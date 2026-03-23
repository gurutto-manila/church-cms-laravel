<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Common;

class MediaFile extends Model
{
	//
    use SoftDeletes;
	use Common;
	
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='media_files';
	
    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
	protected $fillable = [
	    'church_id' , 'media_type' , 'name' , 'description' , 'type' , 'url' , 'created_by' , 'updated_by'
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

	public function getUrlPathAttribute()
	{
		return $this->getFilePath($this->url);
	}
}