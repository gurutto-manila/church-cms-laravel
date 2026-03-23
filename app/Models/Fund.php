<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
	//
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table='funds';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
		'church_id' ,'payaccount_id', 'authorised_by' , 'authorised_at' , 'membership' , 'user_id' , 'data' , 'amount' , 'method' , 'payment_details' , 'status' , 'uuid' , 'comments'
	];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
	protected $casts = ['data'=>'array' , 'payment_details'=>'array'];

    public function church()
    {
        return $this->belongsTo('App\Models\Church','church_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

	public function admin()
    {
    	return $this->belongsTo('App\Models\User','authorised_by');
    }

    public function payaccount()
    {
        return $this->belongsTo('App\Models\Payaccount','payaccount_id');
    }
}