<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    //
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'votes';
    
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'church_id' , 'user_id' , 'entity_id' , 'entity_name' , 'like' , 'unlike'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /*public function SermonlikeAttribute($church_id)
    {
        $query->where([[['church_id',$church_id],['entity_id',$entity_id],['entity_name','App\Models\Sermon']]]);
        return $query;
    }*/

    public function church()
    {
        return $this->belongsTo('App\Models\Church','church_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function sermon()
    {
        return $this->belongsTo('App\Models\Sermon','id','entity_id');
    }
}