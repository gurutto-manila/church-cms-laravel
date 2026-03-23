<?php
namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Smtp extends Model
{
    //
    use SoftDeletes;

    /**
      * The table associated with the model.
      *
      * @var string
    */
    protected $table = 'smtp';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
    */
    protected $fillable = [
    	'host' , 'port' , 'username' , 'password' , 'encryption' , 'status'
    ];
}