<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;
use App\Category;
use App\Completed;

class Level extends Model
{
    protected $fillable = ['name', 'details', 'category_id'];
    public function category() {
    	return $this->belongsTo(Category::class);
    }
    public function questions() {
    	return $this->hasMany(Question::class);
    }
    public function completed() {
    	return $this->hasMany(Completed::class);
    }

}
