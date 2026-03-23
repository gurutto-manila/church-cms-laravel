<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupCategory extends Model
{
    //

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'group_category';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id' , 'category' , 'name' , 'status' 
    ];

    public function group()
    {
        return $this->hasMany('App\Models\Group','category_id','id');
    }
}