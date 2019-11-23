<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class LibraryCollection extends ResourceCollection
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
            'data' => $this->collection->transform(function($library){
                return [
                    'id' => $library->id,
                    'name' => $library->name,
                    'created_at' => $library->created_at,
                    'updated_at' => $library->updated_at,
                ];
            }),
        ];
    }
}
