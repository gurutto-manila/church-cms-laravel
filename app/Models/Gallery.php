<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Common;
use App\Models\Photos;

class Gallery extends Model
{
    //
    use SoftDeletes;
    use Common;

    /**
      * The table associated with the model.
      *
      * @var string
    */
	protected $table = 'galleries';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
    */
	protected $fillable = [ 
        'church_id' , 'name' , 'description' , 'path' , 'created_by' , 'updated_by'
	];

    public function photos()
    {
        return $this->hasMany('App\Models\Photos','gallery_id','id');
    }

    public function scopeByName($query , $name)
    {
        $query->where(function ($query) use($name)
        {
            $query->where('name','LIKE',$name.'%');
        });

        return $query;
    }

    public function getFullPathAttribute()
    {
        return $this->getFilePath($this->path);
    }

    public function getPhotoCount($gallery_id)
    {
        return Photos::where('gallery_id',$gallery_id)->count();
    } 
}