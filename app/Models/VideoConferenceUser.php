<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class VideoConferenceUser extends Model
{
	//
	use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'video_conference_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'conference_id' , 'participant_id'
    ];

    public function usersInfo()
    {
        return $this->hasOne('App\Models\User', 'id', 'participant_id');
    }

    public function videoConference()
    {
        return $this->belongsTo('App\Models\VideoConference','conference_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','participant_id');
    }
}