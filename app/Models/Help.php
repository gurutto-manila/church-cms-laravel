<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'helps';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'church_id' , 'user_id' , 'title' , 'description' , 'contact_details' , 'status'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];

    public function church()
    {
        return $this->belongsTo('App\Models\Church','church_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}