<?php

namespace App\Http\Resources\User;

use App\Http\Resources\Attachment\AttachmentResource;
use App\Http\Resources\Skill\SkillResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            "username"=>$this->name,
            "email"=>$this->email,
            "account_type"=>$this->role,
            "tagline"=>$this->tagline,
            "location"=>$this->location,
            "rate"=>$this->rate,
            "mobile"=>$this->mobile,
            "bio"=>$this->description,
            "avatar"=>asset('storage/userprofiles/'.$this->cover_pic),
            
            "skills"=> SkillResource::collection($this->skills) ,
            "attachments"=>AttachmentResource::collection($this->attachments) ,
        ];
    }
}
