<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Common;

class SermonLink extends Model
{
    //
    use SoftDeletes;
    use Common;

    /**
      * The table associated with the model.
      *
      * @var string
      */
    protected $table = 'sermons_links';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
     */
    protected $fillable = [
        'church_id' , 'user_id' , 'sermons_id' , 'type' , 'location' , 'date' , 'url'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    

    public function sermons()
    {
        return $this->belongsTo('App\Models\Sermon','sermons_id');
    }

    public function church()
    {
        return $this->belongsTo('App\Models\Church','church_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function getUrlPathAttribute()
    {
        return $this->getFilePath($this->url);
    }
}