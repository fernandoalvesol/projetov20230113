<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('blacklist_id')->unsigned();
            $table->foreign('blacklist_id')
                  ->references('id')
                  ->on('blacklist')
                  ->onDelete('cascade');
            $table->text('comentario');
            $table->boolean('visivel');
            $table->date('dtcomentarios');
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
        Schema::dropIfExists('comentarios');
    }
}
