<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('cpf');
            $table->string('email')->unique(); 
            $table->timestamp('email_verified_at')->nullable();          
            $table->string('password');
            $table->tinyInteger('funcionario')->nullable();
            $table->tinyInteger('cliente')->nullable();
            $table->string('telefone')->nullable();
            $table->tinyInteger('ativo')->nullable();
            $table->integer('perfil')->nullable();
            $table->integer('enderecos')->nullable();
                      
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
