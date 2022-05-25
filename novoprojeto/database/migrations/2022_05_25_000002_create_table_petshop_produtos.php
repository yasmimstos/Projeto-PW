<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class createTablePetshopProdutos extends Migration
{
    public function up()
    {
        	Schema::create('Produtos', function (Blueprint $table)
	 {
           		$table->increments('Id');
            		$table->string('Nome', );
            		$table->string('Categoria', );
					$table->string('Peso', );
					$table->string('Estoque', );
					$table->string('Validade', );
            		$table->integer('Registro');
            		$table->timestamps();
        	});
    }

    public function down()
    {
        	Schema::dropIfExists('Produtos');
    }
};