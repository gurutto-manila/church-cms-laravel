<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contacts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'church_id' , 'fullname' , 'email' , 'mobile' , 'query' , 'date_of_submission' , 'properties'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts=[
        'properties' => 'array' 
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at' , 'date_of_submission'];

    public function church()
    {
        return $this->belongsTo('App\Models\Church','church_id');
    }
}