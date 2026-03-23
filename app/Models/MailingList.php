<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Webhook;
use App\Traits\Common;

class MailingList extends Model
{
    //
    use SoftDeletes;
    use Common;

    /**
      * The table associated with the model.
      *
      * @var string
    */
    protected $table = 'mailinglists';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
    */
    protected $fillable = [ 
        'church_id' , 'scope' , 'name' , 'description' , 'is_published' , 'slug'
    ];

    public function subscribers()
    {
        return $this->belongsToMany('App\Models\Subscribers')->using('App\Models\MailinglistSubscriber')->withTimeStamps();
    }

    public function activesubscribers()
    {
        return $this->belongsToMany('App\Models\Subscribers')->where('is_active',1)->using('App\Models\MailinglistSubscriber')->withTimeStamps()->wherePivot('status', 1);
    }

    public function totalactivesubscribers($mailinglist_id)
    {
        //$total=MailinglistSubscriber::where('mailinglist_id',$mailinglist_id)->where('status','1')->count();
        $total=MailinglistSubscriber::where('mailing_list_id',$mailinglist_id)->count();

        return $total;
    }

    /*//Add csss
    public function campaign()
    {
        return $this->belongsToMany('App\Campaign','mailinglist_id');
    }*/
  
    public function queue()
    {
        return $this->hasMany('App\Models\MailQueue','mailing_list_id','id');
    }

    public function webhooks()
    {
        return $this->hasMany('App\Models\Webhook','mailing_list_id');
    }  
}