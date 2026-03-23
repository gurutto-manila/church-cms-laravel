<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class VideoConference extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'video_conferences';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'church_id' ,'user_id' , 'name' , 'description' , 'slug' , 'room_id' , 'compose_id' , 'compose_status' , 'status' , 'created_by' , 'updated_by'
    ];

    public function church()
    {
        return $this->belongsTo('App\Models\Church','church_id');
    }

    public function participantInfo()
    {
        return $this->belongsToMany('App\Models\User', 'video_conference_users', 'conference_id', 'participant_id')->whereNull('video_conference_users.deleted_at');
    }

    public function userInfo()
    {
        return $this->hasOne('App\Models\User','id','user_id');
    }

    public function videoConferenceUser()
    {
        return $this->hasMany('App\Models\VideoConferenceUser','conference_id','id');
    }
}