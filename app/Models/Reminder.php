<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use SoftDeletes;

    /**
      * The table associated with the model.
      *
      * @var string
      */
    protected $table = 'reminder';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
     */
    protected $fillable = [
        'church_id' , 'from' , 'to' , 'subject' , 'message' , 'entity_id' , 'entity_name' , 'via' , 'queue_status' , 'sms_response' , 'executed_at' , 'template_id' , 'data'
    ];

    /**
      * The attributes that should be mutated to dates.
      *
      * @var array
      */
    protected $casts = ['data'=>'array' , 'sms_response'=>'array'];
    
    public function events()
    {
        return $this->belongsTo('App\Models\Events','entity_id');
    }

    public function church()
    {
        return $this->belongsTo('App\Models\Church','church_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','to','email');
    }

    public function userSms()
    {
        return $this->belongsTo('App\Models\User','to','mobile_no');
    }

    public function prayerRequest()
    {
        return $this->belongsTo('App\Models\PrayerRequest','entity_id');
    }
}