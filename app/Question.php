<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Level;

class Question extends Model
{
    protected $fillable = ['category_id','question', 'true_answer', 'false_answer1', 'false_answer2', 'false_answer3', 'points',  'level_id'];
    
    public function category() {
    	return $this->belongsTo(Category::class);
    }

    public function level() {
    	return $this->belongsTo(Level::class);
    }
}
