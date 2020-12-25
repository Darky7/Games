<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
       //     $table->unsignedBigInteger('plateform_id'); // foreign key (clé secondaire)
            $table->string('name');
            $table->string('description');
            $table->string('date_publication');
            $table->string('keywords');
            $table->string('price');
            $table->string('language');
            $table->integer('plateform_type');
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
        Schema::dropIfExists('games');
    }
}