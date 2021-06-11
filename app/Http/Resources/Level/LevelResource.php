<?php

namespace App\Http\Resources\Level;

use Illuminate\Http\Resources\Json\JsonResource;

class LevelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
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
        'category'=> $this->category_id,
        'created_at'=>$this->created_at
        ];
    }
}
