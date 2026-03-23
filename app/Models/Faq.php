<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    //
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'faqs';

    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
    	'church_id' , 'faq_category_id' , 'question' , 'answer' , 'order' , 'status'
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

    public function faqCategory()
    {
    	return $this->belongsTo('\App\Models\FaqCategory','faq_category_id');
    }
}