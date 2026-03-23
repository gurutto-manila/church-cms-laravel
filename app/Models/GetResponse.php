<?php
namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class GetResponse extends Model
{
    //
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='get_response';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'church_id' , 'campaign_id' , 'name' , 'email_open_campaign_id' , 'no_email_open_campaign_id' , 'day_after' , 'status'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function church()
    {
        return $this->belongsTo('App\Models\Church','church_id');
    }

    public function campaign()
    {
        return $this->belongsTo('App\Models\Campaign','campaign_id');
    }

    public function emailOpenCampaign()
    {
        return $this->belongsTo('App\Models\Campaign','email_open_campaign_id');
    }

    public function noEmailOpenCampaign()
    {
        return $this->belongsTo('App\Models\Campaign','no_email_open_campaign_id');
    }
}