<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class createTablePetshopFuncionarios extends Migration
{
    public function up()
    {
        	Schema::create('Funcionarios', function (Blueprint $table)
	 {
           		$table->increments('RG');
            		$table->string('Nome', );
            		$table->string('Sobrenome', );
					$table->string('Idade', );
					$table->string('CPF', );
					$table->string('Cargo', );
                    $table->string('Salário', );
            		$table->timestamps();
        	});
    }

    public function down()
    {
        	Schema::dropIfExists('Funcionarios');
    }
};