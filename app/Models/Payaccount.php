<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Payaccount extends Model
{
    //

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'payaccounts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'church_id' , 'paymentgateway_id' , 'status','attachment','comments','param1','param2','param3','param4','param5','param6','param7','param8' 
    ];

    public function paymentgateway()
    {
        return $this->belongsTo('App\Models\Paymentgateway','paymentgateway_id');
    }

}
