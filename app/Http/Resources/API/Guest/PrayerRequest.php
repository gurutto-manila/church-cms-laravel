<?php

namespace App\Http\Resources\API\Guest;

use Illuminate\Http\Resources\Json\JsonResource;

class PrayerRequest extends JsonResource
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
            'id'                         =>  $this->id,
            'requested_person'           =>  $this->user->FullName,
            'requested_person_avatar'    =>  $this->user->userprofile->AvatarPath,
            'title'                      =>  $this->title,
            'description'                =>  $this->description,
            'status'                     =>  $this->status,
            'date'                       =>  date('d M Y h:i A',strtotime($this->date)),
        ];
    }
}