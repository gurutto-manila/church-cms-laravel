<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mailtemplate extends Model
{
    //

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='mailtemplates'; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable=[
    	'name' , 'subject' , 'mail_content' , 'status'
    ];
}