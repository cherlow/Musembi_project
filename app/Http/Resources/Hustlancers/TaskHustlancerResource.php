<?php

namespace App\Http\Resources\Hustlancers;

use App\Http\Resources\Review\ReviewResource;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskHustlancerResource extends JsonResource
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
            "task"=>$this->title, 
            "review"=> new ReviewResource($this->review),

        ];
    }
}
