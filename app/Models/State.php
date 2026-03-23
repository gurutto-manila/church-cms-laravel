<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //

    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'states';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country_id' , 'name' , 'status'
    ];

    public function church()
    {
        return $this->belongsTo('App\Models\Church','state_id');
    }

    public function userprofile()
    {
        return $this->belongsTo('App\Models\Userprofile','state_id');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country','country_id');
    }

    public function city()
    {
        return $this->hasMany('App\Models\City','city_id','id');
    }
}