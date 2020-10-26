<?php

namespace App\Http\Resources\Review;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
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
            "reviewer" => $this->user->name,
            "review" => $this->review,
            "rating" => $this->rating,
            "created" => $this->created_at->diffForHumans(),
        ];
    }
}
