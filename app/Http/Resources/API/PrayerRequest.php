<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;
use App\Models\PrayerResponse;

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
        $prayer_response = PrayerResponse::where([['church_id',Auth::user()->church_id],['prayer_id',$this->id],['user_id',Auth::id()]])->first();
        if($prayer_response)
        {
          $status=1;
        }
        else
        {
          $status=0;  
        }

        return [
            'id'                         =>  $this->id,
            'requested_person'           =>  $this->user->FullName,
            'requested_person_avatar'    =>  $this->user->userprofile->AvatarPath,
            'title'                      =>  $this->title,
            'description'                =>  $this->description,
            'status'                     =>  $this->status,
            'response_status'            =>  $status,
            'date'                       =>  date('d-m-Y h:i A',strtotime($this->date)),
        ];
    }
}