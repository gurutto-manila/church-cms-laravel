<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    //
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'subscriptions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'church_id' , 'user_id' , 'plan_id' ,'end_date', 'status'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts=['payment_details'=>'array' , 'card_details'=>'array' , 'plan_details'=>'array'];

    public function church()
    {
        return $this->belongsTo('App\Models\Church','church_id');
    }

    public function user()
    {
    	return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function plan()
    {
    	return $this->belongsTo('App\Models\Plan','plan_id');
    }

    public function scopeDate($query,$start,$end)
    {

        $query->whereDate('created_at','>=',$start)
              ->whereDate('created_at','<=',$end);

        return $query;
    }
}