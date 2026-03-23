<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Common;

class Page extends Model
{
    //
    use SoftDeletes;
    use Common;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pages';


    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'church_id' , 'category_id' , 'page_name' , 'description' , 'cover_image' , 'created_by' , 'status'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function church()
    {
    	return $this->belongsTo('\App\Models\Church','church_id');
    }

    public function pageCategory()
    {
        return $this->belongsTo('\App\Models\PageCategory','category_id');
    }

    public function user()
    {
    	return $this->belongsTo('\App\Models\User','created_by');
    }

    public function pageDetail()
    {
    	return $this->hasMany('\App\Models\PageDetail','page_id','id');
    }

    public function pageAttachment()
    {
    	return $this->hasMany('\App\Models\PageAttachment','page_id','id');
    }

    public function getCoverImagePathAttribute()
    {
        return $this->getFilePath($this->cover_image);
    }
}