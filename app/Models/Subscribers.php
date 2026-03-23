<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
//use Mpociot\Firebase\SyncsWithFirebase;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Common;

class Subscribers extends Model
{
    //
    //use SyncsWithFirebase;
    use SoftDeletes;
    use Common;

    protected $dates = ['deleted_at'];
   
    /**
      * The table associated with the model.
      *
      * @var string
    */
	protected $table = 'subscribers';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
    */
	protected $fillable = [ 
        'church_id' , 'email','firstname','lastname','aff','source','is_active'
	];

    public function mailinglist()
    {
        return $this->belongsToMany('App\Models\MailingList')->using('App\Models\MailinglistSubscriber')->withTimeStamps();
    }

    public function queue()
    {
        return $this->hasMany('App\Models\MailQueue','subscribers_id','id');
    }

    public function attachList($subscriber_id)
    {
        $maillistSubscriber=MailinglistSubscriber::where('subscribers_id',$subscriber_id)->first();

        $mailinglist=MailingList::where('id',$maillistSubscriber->mailinglist_id)->first();

        return $mailinglist->name;
    }

    public function maillistsubscriber()
    {
        return $this->hasMany('App\Models\MailinglistSubscriber','subscribers_id','id');
    } 
}