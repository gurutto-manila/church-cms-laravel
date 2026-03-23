<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\BotmanTag;
class BotmanMaster extends Model
{
    use SoftDeletes;

      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'botman_master';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'answers', 'status', 'created_by', 'updated_by'
    ];

    public function tags(){
        return $this->hasMany('App\Models\BotmanTag', 'master_id', 'id');
    }

    public function userInfo(){
        return $this->hasOne('App\Models\User','id','created_by');
    }
}
