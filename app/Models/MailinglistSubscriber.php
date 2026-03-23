<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class MailinglistSubscriber extends  Pivot
{
    //
    use SoftDeletes;

    /**
      * The table associated with the model.
      *
      * @var string
    */
    protected $table = 'mailing_list_subscribers';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
    */
    protected $fillable = [ 
        'subscribers_id' , 'mailing_list_id' , 'status'
    ];

    protected $dates = ['deleted_at'];
  
    /*public function subscriber()
    {
        return $this->belongsTo('App\Models\Subscribers','subscriber_id','id');
    }*/   
}