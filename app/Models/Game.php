<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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