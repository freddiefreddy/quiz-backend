<?php

namespace App\Http\Controllers;

use App\Level;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Resources\Level\LevelCollection;
use App\Http\Resources\Level\LevelResource;
use Session;

class LevelController extends Controller
{


    /**
     * Display a listing of all levels.
     *
     * @return \Illuminate\Http\Response
     */
    public function all(Request $request)
    {
        $id=$request->id;
        $category = Category::all();
        //$LevelQuestions = $category->level->where('level', 'easy');
        //return LevelCollection::collection(Level::all());
        $levelCategories = $category->levels->where('category_id', $id);
        return LevelCollection::collection($levelCategories);
        
    }

    public function levelCategories($id)
    {  
        $category = Category::all();
        //$LevelQuestions = $category->level->where('level', 'easy');
        //return LevelCollection::collection(Level::all());
        $levelCategories = $category->levels->where('category_id', $id);
        return LevelCollection::collection($levelCategories);
        
    }
}
