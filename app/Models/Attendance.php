<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    //
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'attendances';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'church_id' , 'user_id' , 'entity_id' , 'entity_name' , 'title' , 'category' , 'date' , 'is_present' , 'present_at' 
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [ 'date' , 'present_at' , 'deleted_at' ];

    public function church()
    {
        return $this->belongsTo('App\Models\Church','church_id');
    }

    public function user()
   	{
   		return $this->belongsTo('App\Models\User','user_id');
   	}

   	public function events()
   	{
   		return $this->belongsTo('App\Models\Events','entity_id');
   	}
}