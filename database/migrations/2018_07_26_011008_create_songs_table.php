<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('chords'); // la cancion
            $table->string('tone');  // tono en el que está
            $table->integer('type'); //1 , 0 --- normal o drag and drop
            $table->integer('downloaded'); // cuantas descargas tiene 
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
        Schema::dropIfExists('songs');
    }
}
