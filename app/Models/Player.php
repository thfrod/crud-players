<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;


    public function CurrentTeam()
    {
        return $this->belongsTo(Team::class);
    }

    public function RevealedTeam()
    {
        return $this->belongsTo(Team::class);
    }
}
