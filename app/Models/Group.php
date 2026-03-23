<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Common;

class Group extends Model
{
    //
    use SoftDeletes;
    use Common;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'groups';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'church_id' , 'category_id' , 'name', 'cover_image', 'description' , 'group_type'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function groupCategory()
    {
    	return $this->belongsTo('App\Models\GroupCategory','category_id');
    }

    public function church()
    {
        return $this->belongsTo('App\Models\Church','church_id');
    }

    public function groupLink()
    {
        return $this->hasMany('App\Models\GroupLink','group_id','id');
    }

    public function getCoverImagePathAttribute()
    {
        return $this->getFilePath($this->cover_image);
    }
}