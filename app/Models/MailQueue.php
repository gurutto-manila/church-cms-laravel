<?php
namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class MailQueue extends Model
{
    //
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='mail_queues';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable=[
        'email_id','subscriber_id','mailinglist_id','campaign_id','subject','from_email','from_name','reply_to_email','to_mail','content','scheduled_at','username','is_read','clicks','status'
    ];


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates =['deleted_at','scheduled_at','fired_at','failed_at','rule_checked_at'];

    public function campaign()
    {
        return $this->belongsTo('App\Models\Campaign','campaign_id','id');
    }

    public function subscriber()
    {
        return $this->belongsTo('App\Models\Subscribers','subscriber_id','id');
    }

    public function email()
    {
        return $this->belongsTo('App\Models\Email','email_id','id');
    }

    public function mailinglist()
    {
        return $this->belongsTo('App\Models\MailingList','mailinglist_id','id');
    }
    
    public function response()
    {
        return $this->hasOne('App\Models\GetResponse','campaign_id','campaign_id');
    }

    public function scopeByChurch($query , $church_id)
    {
        $query->wherehas('campaign',function ($query) use($church_id)
        {
            $query->where('church_id',$church_id); 
        });
        return $query;
    }
}