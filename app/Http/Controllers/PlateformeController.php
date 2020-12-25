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
<<<<<<< HEAD
}
=======
}
>>>>>>> 79c6d57ab2d3ef6d93406f6abe61076819952dd0
