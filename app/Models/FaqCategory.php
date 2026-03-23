<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    //
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'faq_categories';

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

    public function faq()
    {
    	return $this->hasMany('\App\Models\Faq','faq_category_id','id');
    }
}