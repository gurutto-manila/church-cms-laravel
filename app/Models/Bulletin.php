<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Common;

class Bulletin extends Model
{
    //
    use SoftDeletes;
    use Common;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bulletins';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'church_id' , 'name' , 'cover_image' , 'type' , 'week' , 'month' , 'year' , 'path' 
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function church()
    {
        return $this->belongsTo('App\Models\Church','church_id');
    }

    public function getFilePathAttribute()
    {
        return $this->getFilePath($this->path);
    }

    public function getCoverImagePathAttribute()
    {
        return $this->getFilePath($this->cover_image);
    }
}