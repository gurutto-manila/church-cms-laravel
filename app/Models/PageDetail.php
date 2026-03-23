<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PageDetail extends Model
{
    //
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'page_details';


    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'user_id' , 'page_id' , 'is_following' , 'like' , 'dislike' , 'status'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function user()
    {
    	return $this->belongsTo('\App\Models\User','user_id');
    }

    public function page()
    {
    	return $this->belongsTo('\App\Models\Page','page_id');
    }

    public function scopeByLike($query,$page_id)
    {
        $count = $query->where('page_id',$page_id)->where('like',1)->get(); 
        
        return $count;
    }

    public function scopeByUnlike($query,$page_id)
    {
        $count = $query->where('page_id',$page_id)->where('dislike',1)->count();  
        
        return $count;
    }
}