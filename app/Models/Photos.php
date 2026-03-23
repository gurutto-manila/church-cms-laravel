<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Common;

class Photos extends Model
{
    use SoftDeletes;
    use Common;
    
    /**
      * The table associated with the model.
      *
      * @var string
    */
    protected $table='photos';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
    */
    protected $fillable=[
        'church_id' , 'gallery_id' , 'path' , 'created_by' , 'updated_by'
    ];

    protected $appends = ['FullPath'];
    
  	public function gallery()
  	{
    	return $this->belongsTo('App\Models\Gallery','gallery_id');
    }

    public function getFullPathAttribute()
    {
    	return $this->getFilePath($this->path);
    }
}