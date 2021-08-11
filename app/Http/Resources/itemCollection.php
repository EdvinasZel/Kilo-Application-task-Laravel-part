<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class itemCollection extends ResourceCollection
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
            'id' -> $this->id;
            'category' -> $this->category;
            'name' -> $this -> name;
            'value' -> $this ->value;
            'quality' -> $this ->quality;
            'created_at' -> $this->created_at;
            'updated_at' -> $this->updated_at;
        ];
    }
}
