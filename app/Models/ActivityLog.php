<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    //
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'activity_log';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'log_name' , 'description' , 'subject' , 'causer' , 'properties'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts=[
        'properties' => 'array' 
    ];

    protected $with = array('user');

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'causer_id');
    }
}