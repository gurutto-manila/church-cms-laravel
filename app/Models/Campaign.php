<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Common;

class Campaign extends Model
{
    //
    use SoftDeletes;
    use Common;

    /**
      * The table associated with the model.
      *
      * @var string
    */
	protected $table = 'campaign';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
    */
	protected $fillable = [ 
        'church_id' , 'name' , 'description' , 'status' , 'mailinglist_id'
	];

    public function emails() 
    {
        return $this->belongsToMany('App\Models\Email')->using('App\Models\CampaignEmail')->withTimeStamps();
    }

    /*public function emails()
    {
        return $this->hasManyThrough('App\Email', 'App\Campignemail');
    }

    public function emails()
    {
        return $this->belongsToMany('App\Mailinglist');
    }*/

    public function mailinglist()
    {
        return $this->belongsTo('App\Models\Mailinglist', 'mailinglist_id', 'id');
    }

    public function queue()
    {
        return $this->hasMany('App\Models\MailQueue','campaign_id','id');
    }  

    public function campaignEmail()
    {
        return $this->hasMany('App\Models\CampaignEmail','campaign_id','id');
    }  

    public function rule()
    {
        return $this->hasMany('App\Models\GetResponse','campaign_id','id');
    }  
}