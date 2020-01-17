<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('name', 50);
            $table->string('email', 50);
            $table->string('phone')->nullable();
            $table->string('localidad', 50)->nullable();
            $table->string('especialidad',50)->nullable();
            $table->integer('puntuacion');
            $table->integer('tiempo');
            $table->boolean('admin');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image')->default('predifinida.jpg');
            $table->rememberToken();
            $table->timestamps();
        });
    }

            /*
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50);
            $table->string('lastname', 50);
            $table->string('email', 100);
            $table->integer('phone');
            $table->string('password');
            $table->boolean('verificated')->default(0);
            $table->string('codigo',20)->nullable();
            $table->timestamps();
            */
        
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
