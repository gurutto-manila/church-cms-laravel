<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Common;

class Events extends Model
{
    //
    use SoftDeletes;
    use Common;
  
    /**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'events';
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'church_id' , 'select_type' , 'title' , 'description' , 'repeats' , 'freq' , 'freq_term' , 'location' , 'category' , 'organised_by' , 'image' , 'start_date' , 'end_date' , 'allDay' , 'created_by' , 'updated_by'
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

    public function notes()
    {
        return $this->hasMany('App\Models\Notes','entity_id','id');
    }
    
    public function scopeByChurch($query,$church_id)
    {
        $query->where('church_id',$church_id);
        return $query;
    }

    public function eventreminder()
    {
        return $this->hasMany('App\Models\Reminder', 'entity_id','id')->where('entity_name','=','App\\Models\\Events');
    }

    public function getImagePathAttribute()
    {
        if($this->image==null) 
        {
            return $this->eventImagePath($this->category,$this->image);
        }
    }
}