<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Common;

class PrayerRequest extends Model
{
    //
    use Common;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prayer_requests';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'church_id' , 'user_id' , 'title' , 'description' , 'image' , 'audio' , 'date' , 'status' , 'comments'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['date'];

    public function church()
    {
        return $this->belongsTo('App\Models\Church','church_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function prayerResponse()
    {
        return $this->hasMany('App\Models\PrayerResponse','prayer_id','id');
    }

    public function getAudioPathAttribute()
    {
        return $this->getFilePath($this->audio);
    }

    public function getImagePathAttribute()
    {
        return $this->getFilePath($this->image);
    }
}