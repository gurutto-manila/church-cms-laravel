<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PageCategory extends Model
{
    //
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'page_categories';


    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'church_id' , 'name' , 'status'
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

    public function page()
    {
    	return $this->hasMany('\App\Models\Page','category_id','id');
    }
}