<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class PrayerResponse extends JsonResource
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
           'id'                 => $this->id,
           'church_id'          => $this->church_id,
           'prayer_id'          => $this->prayer_id,
           'responded_person'   => $this->user->name,
       ];
    }
}
