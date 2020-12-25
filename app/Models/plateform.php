<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plateform extends Model
{

  
    public function games() 
    {
        return $this->hasMany(Game::class); 
    }
  

// récupérer les produits de la plateforme -> One to many 

public function produits(){
    return $this->hasMany('App\Game');
}

}
