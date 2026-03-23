<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'widgets';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'church_id' ,'slug' , 'content' , 'created_by' , 'updated_by'
    ];

    public function userInfo(){
        return $this->hasOne('App\Models\User','id','created_by');
    }
}
