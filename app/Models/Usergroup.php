<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usergroup extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'user_group';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id' , 'name'
    ];

	public function user()
    {
        return $this->hasMany('App\Models\User','usergroup_id');
    }
}