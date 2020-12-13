<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GamesController extends Controller
{
    /**
     * get all games
     */
    public function getGames(){
        $games = Game::all();
    }

    /**
     * store games
     */
    public function storeGames(){
        
    }
}
