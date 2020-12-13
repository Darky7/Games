<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plateforme extends Model
{
    protected $table = "plateformes";
    /**
     * Get the games for the blog plateforme.
     */
    public function games()
    {
        return $this->hasMany(Games::class);
    }

}
