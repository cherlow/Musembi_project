<?php

namespace App\Http\Resources\Hustlancers;

use App\Http\Resources\Attachment\AttachmentResource;
use App\Http\Resources\Skill\SkillResource;
use App\Review;
use App\Task;
use Illuminate\Http\Resources\Json\JsonResource;

class HustlancerResource extends JsonResource
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
            "name"=>$this->name,
            "avatar"=>asset('storage/userprofiles/'.$this->cover_pic),
            "tagline"=>$this->tagline,
            "rating"=>"not rated yet",
            "tasks"=> TaskHustlancerResource::collection(Task::where('developer_id',$this->id)->get()),
            "rate"=>$this->rate,
            "location"=>$this->location,
            "reviews"=>count($this->reviews),
            "verified"=>"not verified yet",
            "bio"=>$this->description,
            "onbudget"=>count($this->reviews) > 0 ? intval(count($this->reviews()->where('budget','true')->get()))/intval(count($this->reviews))*100:0,
            "ontime"=>count($this->reviews) > 0 ? intval(count($this->reviews()->where('time','true')->get()))/intval(count($this->reviews))*100:0,
            "skills"=> SkillResource::collection($this->skills) ,
            "attachments"=>AttachmentResource::collection($this->attachments) ,
            
            


 


           
        ];
    }
}
