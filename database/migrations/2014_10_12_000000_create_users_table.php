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
            $table->string('pname');    //nombre real del usuario
            $table->string('lastname');
            $table->string('cel');
            $table->string('country');
            $table->longText('biography');
            $table->string('type');   //cantante, pianista, etc
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('followers')->default(0);
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
        Schema::dropIfExists('user__songs');
        Schema::dropIfExists('followings');
        Schema::dropIfExists('users');
    }
}
