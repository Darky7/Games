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
<<<<<<< HEAD:database/migrations/2020_12_16_043358_create_games_table.php
       //     $table->unsignedBigInteger('plateform_id'); // foreign key (clé secondaire)
=======
            $table->unsignedBigInteger('plateforme_id'); // foreign key (clé secondaire)
>>>>>>> 79c6d57ab2d3ef6d93406f6abe61076819952dd0:database/migrations/2020_12_07_211948_create_games_table.php
            $table->string('name');
            $table->string('description');
            $table->string('date_publication');
            $table->string('keywords');
            $table->string('price');
            $table->string('language');
<<<<<<< HEAD:database/migrations/2020_12_16_043358_create_games_table.php
            $table->integer('plateform_type');
=======
>>>>>>> 79c6d57ab2d3ef6d93406f6abe61076819952dd0:database/migrations/2020_12_07_211948_create_games_table.php
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
