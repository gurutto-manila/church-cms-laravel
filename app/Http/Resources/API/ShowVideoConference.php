<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class ShowVideoConference extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return 
        [
            //
            'id'            =>  $this->id,
            'title'         =>  $this->name,
            'description'   =>  $this->description,
            'slug'          =>  $this->slug,
            'status'        =>  $this->status,
            'created_by'    =>  $this->userInfo->FullName,
            'created_at'    =>  $this->created_at->diffForHumans(),
        ];
    }
}