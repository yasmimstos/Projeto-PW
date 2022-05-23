<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class createTablePetshop extends Migration
{
    public function up()
    {
        	Schema::create('Bichos', function (Blueprint $table)
	 {
           		$table->increments('IdBicho');
            		$table->string('Nome', );
            		$table->string('Raça', );
					$table->string('Peso', );
					$table->string('Altura', );
					$table->string('Preço', );
            		$table->integer('Registro');
            		$table->timestamps();
        	});
    }

    public function down()
    {
        	Schema::dropIfExists('Bichos');
    }
};