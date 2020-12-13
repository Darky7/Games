<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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