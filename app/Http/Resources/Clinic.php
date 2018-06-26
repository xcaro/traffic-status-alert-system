<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Clinic extends JsonResource
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
            'name' => $this->name,
            'address' => $this->address,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'type' => $this->type,
            $this->mergeWhen(($this->doctors) != null, [
                'doctors' => new DoctorCollection($this->doctors),
            ]),
            //'doctors' => 
            //'user_created' => $this->user_created,
            //'confirmed' => $this->confirmed,
            //'active' => $this->active,
        ];
    }
}
