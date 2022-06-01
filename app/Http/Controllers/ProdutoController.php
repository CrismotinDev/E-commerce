<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $data = [];

        $listaProdutos = Produto::all();
        $data['lista'] = $listaProdutos;

        return view('home', $data);
    }

    public function categoria($idcategoria = 0, Request $request)
    {
        $data = [];

        //select *from categorias
        $listaCategorias = Categoria::all();

        //select *from categorias limi 4
        $queryProduto = Produto::limit(15);

        if ($idcategoria != 0) {
            $queryProduto->where('categoria_id', $idcategoria);
        }

        $listaProdutos = $queryProduto->get();

        $data["lista"] = $listaProdutos;
        $data["listaCategoria"] = $listaCategorias;
        $data['idcategoria'] = $idcategoria;

        return view('categoria', $data);
    }

    public function adicionarCarrinho($idProduto = 0, Request $request)
    {
        //buscar o produto pelo id
        $prod = Produto::find($idProduto);

        if ($prod) {
            //encontrou produo

            //Buscar da sessao o carrinho atual
            $carrinho = session('cart', []);

            array_push($carrinho, $prod);
            session(['cart' =>$carrinho]);
        }

        return redirect()->route('home');
    }

    public function verCarrinho(Request $request)
    {
        $carrinho = session('cart', []);
        $data = ['cart' =>$carrinho];

        return view('carrinho', $data);
    }

    public function excluirCarrinho($indice,Request $request)
    {
        $carrinho = session('cart', []);
        if(isset($carrinho[$indice])){
            unset($carrinho[$indice]);
        }
        session(['cart' =>$carrinho]);
        return redirect()->route('ver_carrinho');
    }
}
