<?php

namespace App\Http\Controllers;

use App\Models\Plateforme;
use Illuminate\Http\Request;

class PlateformeController extends Controller
{
     /**
     * get all plateforme
     */
    public function getPlateformes(){
        $plateformes = Plateforme::all();
    }

    /**
     * store games
     */
    public function storeGames(){
        
    }
}
