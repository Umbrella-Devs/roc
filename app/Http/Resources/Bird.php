<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Bird extends JsonResource
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
            'id' => $this->id,
            'username' => $this->username,
            'name' => $this->name,
            'number' => $this->number,
            'location' => $this->location,
            'activity' => $this->activity,
            'description' => $this->description,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at, 

        ];

        // return parent::toArray($request);

    }
}
