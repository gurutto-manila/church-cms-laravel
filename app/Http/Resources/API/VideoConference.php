<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class VideoConference extends JsonResource
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
            'roomId'        =>  $this->room_id,
            'composeId'     =>  $this->compose_id,
            'status'        =>  $this->status,
            'created_by'    =>  $this->userInfo->FullName,
            'duration'      =>  $this->duration==null ? '':"$this->duration",
            'joining_date'  =>  $this->joining_date==null ? '':date('d-m-Y', strtotime($this->joining_date)),
            'start_time'    =>  $this->joining_date==null ? '':date('h:i A', strtotime($this->joining_date)),
            'end_time'      =>  $this->joining_date==null ? '': date('h:i A', strtotime("+".$duration."minute", strtotime($this->joining_date))),
        ];
    }
}