<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Common;

class ChurchDetail extends Model
{
	//
    use SoftDeletes;
    use Common;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='church_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
	    'church_id' , 'meta_key' , 'meta_value'
	];

    public function church()
    {
        return $this->belongsTo('App\Models\Church','church_id');
    }

    public function getLogoPathAttribute()
    {
        if($this->meta_key == 'church_logo')
        {
          return $this->getFilePath($this->meta_value);
        }
    }
}