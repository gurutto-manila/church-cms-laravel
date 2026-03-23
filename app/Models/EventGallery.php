<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Common;

class EventGallery extends Model
{
    use SoftDeletes;
    use Common;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'event_galleries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable=[
    	'church_id' , 'event_id' , 'path' , 'created_by' , 'updated_by'
    ];

    public function church()
    {
        return $this->belongsTo('App\Models\Church','church_id');
    }

    public function events()
    {
        return $this->belongsTo('App\Models\Events','event_id');
    }

    public function getFullPathAttribute()
    {
    	return $this->getFilePath($this->path);
    }
}