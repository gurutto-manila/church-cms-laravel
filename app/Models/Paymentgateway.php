<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Paymentgateway extends Model
{
    //

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'paymentgateways';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'gatewayname' , 'displayname' , 'status','instructions' 
    ];
}
