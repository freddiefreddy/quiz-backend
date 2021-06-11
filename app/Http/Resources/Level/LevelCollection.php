<?php

namespace App\Http\Resources;
use App\Category;

use Illuminate\Http\Resources\Json\Resource;

class LevelCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */


    public function toArray($request)
    {
        return [
        'id'=>$this->id,
        'name'=>$this->name,
        'details'=>$this->details,
        'category'=> Category::find($this->category_id)->name,
        'created_at'=>$this->created_at
        ];
    }
}
