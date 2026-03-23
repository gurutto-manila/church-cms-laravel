<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostTag;
use App\Traits\Common;
use App\Models\Post;
use App\Models\Tag;

class Tag extends Model 
{
    //
    use Common;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tags';

    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'tag_name'
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function postTag()
    {
        return $this->belongsToMany(PostTag::class);
    }

    public function getTag($tag_name)
    {
        $tag=Tag::where('tag_name',$tag_name)->first();

        $count=PostTag::where('tag_id',$tag->id)->count();

        return $count;
    }
}