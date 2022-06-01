<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use App\Models\Usuario;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function cadastrar(Request $request)
    {
        $data = [];

        return view ('cadastrar');
    }

    public function cadastrarCliente(Request $request)
    {
        //pegar todos os valores do formulario
        $values = $request->all();
        $usuario = new Usuario();
        $usuario->fill($values);
        $usuario->login = $request->input('cpf','');

        $senha = $request->input('password', '');
        $usuario->password = \Hash::make($senha); // criptografa as senhas no banco

        $endereco = new Endereco($values);
        $endereco->fill($values);

        try{
            \DB::beginTransaction(); //começa uma transação
            $usuario->save();  //salva usuario
            $endereco->usuario_id = $usuario->id; //relacionamento das tabelas
            $endereco->save(); //salvar endereço
            \DB::commit(); //confirmando transação
        }catch(\Exception $e){
            //tratar o erro
            \DB::rollback(); //se der erro quero cancelar a transação
        }

        return redirect()->route('cadastrar');
    }
}
