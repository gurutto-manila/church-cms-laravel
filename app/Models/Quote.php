<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Common;

class Quote extends Model
{
    use SoftDeletes;
    use Common;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table='quotes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
	    'church_id' , 'user_id' ,  'image' , 'text' , 'tamil_quotes' , 'english_quotes' , 'publish_on' , 'published_at' , 'status'
	];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['publish_on' , 'published_at'];

	public function getImagePathAttribute()
	{
		return $this->getFilePath($this->image);
	}

    public function church()
    {
        return $this->belongsTo('App\Models\Church','church_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}