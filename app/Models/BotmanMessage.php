<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BotmanMessage extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'botman_messages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'message', 'reply'
    ];

    public function userInfo(){
        return $this->hasOne('App\Models\User','id','user_id');
    }
}
