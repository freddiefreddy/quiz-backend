<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;
use App\Level;

class Category extends Model
{
    protected $fillable = ['name', 'image_url', 'is_featured'];
    public function questions() {
    	return $this->hasMany(Question::class);
    }

    public function levels() {
    	return $this->hasMany(Level::class);
    }
}
