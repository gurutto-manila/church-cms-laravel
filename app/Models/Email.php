<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Common;

class Email extends Model
{
    //
    use SoftDeletes;
    use Common;

    /**
      * The table associated with the model.
      *
      * @var string
    */
	protected $table = 'emails';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
    */
	protected $fillable = [ 
        'church_id' , 'subject' , 'from_email','from_name','reply_to_email'
	];

    public function campaign()
    {
        return $this->belongsToMany('App\Models\Campaign');
    }

    public function queue()
    {
        return $this->hasMany('App\Models\MailQueue','email_id','id');
    }  
}