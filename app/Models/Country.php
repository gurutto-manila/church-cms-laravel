<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //

    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'countries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name' , 'short_name' , 'iso_code' , 'tel_prefix' , 'status' , 'order'
    ];

    public function userprofile()
    {
        return $this->belongsTo('App\Models\Userprofile','country_id');
    }

    public function state()
    {
        return $this->hasMany('App\Models\State','state_id','id');
    }

    public function city()
    {
        return $this->hasMany('App\Models\City','city_id','id');
    }
}