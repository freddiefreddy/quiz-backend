<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Player;
use App\Level;

class Completed extends Model
{
    protected $fillable = ['player_id', 'category_id', 'category_level', 'points', 'total_quiz_points'];

    public function player() {
    	return $this->belongsTo(Player::class);
    }

    public function player() {
    	return $this->belongsTo(Level::class);
    }
}
