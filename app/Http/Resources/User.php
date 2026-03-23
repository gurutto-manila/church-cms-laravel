<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
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
            'id'                => $this->id,
            'name'              => $this->name,
            'email'             => $this->email,
            'mobile_no'         => $this->mobile_no,
            'profession'        => ucwords(str_replace('_', ' ', optional($this->userprofile)->profession)),
            'sub_occupation'    => optional($this->userprofile)->sub_occupation,
            'avatar'            => $this->userprofile->AvatarPath,
            'firstname'         => $this->userprofile->firstname,
            'lastname'          => optional($this->userprofile)->lastname,
            'fullname'          => $this->FullName,
            'relation'          => $this->userprofile->relation,
            'date_of_birth'     => $this->userprofile->date_of_birth == null ? null:date('d M Y',strtotime($this->userprofile->date_of_birth)),
            'marriage_status'   => $this->userprofile->marriage_status == null ? null:$this->userprofile->marriage_status,
            'state'             => ucwords($this->userprofile->state->name),
            'city'              => ucwords($this->userprofile->city->name),
            'usergroup'         => ucwords($this->usergroup->name),
        ];
    }
}