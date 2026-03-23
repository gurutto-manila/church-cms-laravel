<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model 
{
    //
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'post_tag';

    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'tag_id','post_id'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    public function tag()
    {
        return $this->hasMany(Tag::class);
    }
}