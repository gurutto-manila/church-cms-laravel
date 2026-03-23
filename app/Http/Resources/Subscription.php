<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Subscription extends JsonResource
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
        //'user_id' => $this->user_id,
           'church'     => $this->church->name,
           'plan'       => $this->plan->name,
           'plan_days'  => $this->plan->cycle,
           'amount'     => $this->payment_details['amount'],
           'end_date'   => date('d-m-Y',strtotime($this->end_date)),
       ];
    }
}
