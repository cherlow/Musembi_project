<?php

namespace App\Http\Resources\Task;

use App\Http\Resources\Attachment\AttachmentResource;
use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Skill\SkillResource;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
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
            "id"=>$this->id,
            "title"=>$this->title,
            "slug"=>$this->slug,
            "location"=>$this->location,
            "created"=>$this->created_at->diffForHumans(),
            "skills"=>SkillResource::collection($this->skills),
            "max_budget"=>$this->max_budget,
            "min_budget"=>$this->min_budget,
            "mode"=>$this->mode,
            "details"=>$this->Description,
            "attachments"=>AttachmentResource::collection($this->attachments),
            "taskbids"=>"taskbidders here",
            "category"=>new CategoryResource($this->category),
            "employer"=> new TaskUserResource($this->user)



        ];
    }
}
