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
            $table->engine = 'InnoDB';

            $table->bigIncrements('id');
            $table->string('name');
            $table->string('sobrenome')->default('');
            $table->string('username')->default('');
            $table->date('nascimento')->nullable();
            $table->string('sexo')->default('NE');
            $table->string('foto')->default('null');
            $table->string('categoria')->default('');
            $table->string('UF')->default('');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();


            $table->string('password');
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
