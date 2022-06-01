<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cat1 = new \App\Models\Categoria(['categoria' => 'Geral']);
        $cat1->save();

        $cat = new \App\Models\Categoria(['categoria' => 'Consoles']);
        $cat->save();

        $cat2 = new \App\Models\Categoria(['categoria' => 'Controles']);
        $cat2->save();

        $cat3 = new \App\Models\Categoria(['categoria' => 'PC Jogos']);
        $cat3->save();

        $prod = new \App\Models\Produto(['nome' => 'Xbox One 1Tera - 2 Controles ', 'valor' => 2699.00, 'foto' => 'images/produto1.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod1 = new \App\Models\Produto(['nome' => 'Xbox One 1Tera - 1 Jogo  ', 'valor' => 2220.00, 'foto' => 'images/produto2.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod1->save();

        $prod2 = new \App\Models\Produto(['nome' => 'Xbox One Preto 1Tera - 1 Controle ', 'valor' => 2500.00, 'foto' => 'images/produto3.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod2->save();

        $prod3 = new \App\Models\Produto(['nome' => 'Xbox One Preto 500Gb - 1 Controles ', 'valor' => 1999.00, 'foto' => 'images/produto4.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod3->save();

        $prod4 = new \App\Models\Produto(['nome' => 'Playstation 4 - Preto 1 Controle + 3 jogos', 'valor' => 2569.00, 'foto' => 'images/produto5.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod4->save();

        $prod5 = new \App\Models\Produto(['nome' => 'Playstation 4 - Preto 1 Controle', 'valor' => 1999.00, 'foto' => 'images/produto6.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod5->save();

        $prod6 = new \App\Models\Produto(['nome' => 'Playstation 5 - Preto 1 Controle + Jogo', 'valor' => 5599.00, 'foto' => 'images/produto7.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod6->save();

        $prod7 = new \App\Models\Produto(['nome' => 'Controle Branco Xbox one', 'valor' => 399.00, 'foto' => 'images/produto8.jpg', 'descricao' => '', 'categoria_id' => $cat2->id]);
        $prod7->save();

        $prod8 = new \App\Models\Produto(['nome' => 'Controle Preto Playstation 4 ', 'valor' => 450.00, 'foto' => 'images/produto9.jpg', 'descricao' => '', 'categoria_id' => $cat2->id]);
        $prod8->save();

        $prod9 = new \App\Models\Produto(['nome' => 'Controle Preto Nintendo', 'valor' => 559.00, 'foto' => 'images/produto10.jpg', 'descricao' => '', 'categoria_id' => $cat2->id]);
        $prod9->save();

        $prod10 = new \App\Models\Produto(['nome' => 'Pc Gamer Processador Intel 21p', 'valor' => 4449.00, 'foto' => 'images/produto11.jpg', 'descricao' => '', 'categoria_id' => $cat3->id]);
        $prod10->save();

        $prod11 = new \App\Models\Produto(['nome' => 'Pc Gamer Processador Intel ', 'valor' => 4449.00, 'foto' => 'images/produto12.jpg', 'descricao' => '', 'categoria_id' => $cat3->id]);
        $prod11->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
