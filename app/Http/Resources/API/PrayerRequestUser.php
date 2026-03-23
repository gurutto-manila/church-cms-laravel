<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class PrayerRequestUser extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if($this->audio != '')
        {
            $audio = $this->AudioPath;
        }
        else
        {
            $audio = null;
        }

        return [
            'id'             =>  $this->id,
            'avatar'         =>  $this->user->userprofile->AvatarPath,    
            'title'          =>  $this->title,
            'description'    =>  $this->description,
            'status'         =>  $this->status,
            'audio'          =>  $audio,
            'date'           =>  date('d-m-Y h:i A',strtotime($this->date)),
            'display_status' =>  ucfirst($this->status),
        ];
    }
}