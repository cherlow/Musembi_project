<?php

namespace App\Http\Resources\Task;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskUserResource extends JsonResource
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
            "avatar"=>asset('storage/userprofiles/'.$this->cover_pic),
            "name"=>$this->name,
            "rating"=>'',
            "location"=>$this->location,
            "verified"=>'',

        ];
    }
}
