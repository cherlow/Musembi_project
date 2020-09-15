<?php

namespace App\Http\Resources\Attachment;

use Illuminate\Http\Resources\Json\JsonResource;

class AttachmentResource extends JsonResource
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
           "name"=>$this->attachment_name,
           "link"=>$this->attachment_link,
           "type"=>pathinfo(storage_path('public/attachments/'.$this->attachment_link), PATHINFO_EXTENSION)
       ];
}

}