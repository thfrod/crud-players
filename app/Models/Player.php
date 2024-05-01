<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $fillable = ['photo', 'name', 'age', 'birthdate', 'current_team_id', 'revealed_team_id'];

    public function currentTeam()
    {
        return $this->belongsTo(Team::class, 'current_team_id');
    }

    public function revealedTeam()
    {
        return $this->belongsTo(Team::class, 'revealed_team_id');
    }
}
