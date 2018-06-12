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
            $table->increments('id');
            $table->string('name');
            $table->string('cpf');
            $table->date('dtnasc');
            $table->string('sexo');
            $table->string('telFixo');
            $table->string('telCelular');
            $table->string('email',191)->unique();
            $table->string('password');
            $table->string('cep');
            $table->string('rua');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->double('lat');
            $table->double('lgn');
            $table->string('estado civil');
            $table->string('filhos');
            $table->double('filhos_qtd');
            $table->string('escolaridade');
            $table->string('profissao');
            $table->string('comoconheceu');
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
