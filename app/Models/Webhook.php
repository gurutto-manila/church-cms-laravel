<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Webhook extends Model
{
    //
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='webhooks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'verb' , 'name' , 'url' , 'mailinglist_id' , 'handshake_key' , 'status'
    ];
 
    public function mailinglist()
    {
     	return $this->belongsTo('App\Models\Mailinglist', 'mailinglist_id', 'id');
    }

    public function scopeByChurch($query , $church_id)
    {
        $query->wherehas('mailinglist',function ($query) use($church_id)
        {
            $query->where('church_id',$church_id); 
        });
        return $query;
    }
}