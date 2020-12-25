<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use App\Models\Comment;

class Game extends Model
{


    public function Plateform() 

    {

        return $this->belongsTo(Plateform::class); 
    }
  
} 



$Plateform = Plateform::find(1);

return $Plateform->plateform_type;
=======

class Game extends Model
{
    protected $table = "games";
    /**
     * Get the games for the blog plateforme.
     */
    public function plateforme()
    {
        return $this->belongsTo(Plateforme::class);
    }
}
>>>>>>> 79c6d57ab2d3ef6d93406f6abe61076819952dd0
