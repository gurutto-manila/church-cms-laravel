<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Smstemplate extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table    = 'sms_templates';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name' , 'template' , 'content' , 'status'
    ];
}