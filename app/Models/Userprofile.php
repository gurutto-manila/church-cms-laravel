<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Laracasts\Presenter\PresentableTrait;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Common;

class Userprofile extends Model
{
    use PresentableTrait;
    use SoftDeletes;
    use Common;

    protected $presenter = "App\Presenters\UserprofilePresenter";
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'userprofiles';

    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'church_id' , 'user_id' , 'firstname' , 'lastname' , 'birth_firstname' , 'birth_lastname' , 'gender' , 'date_of_birth' , 'was_baptized' , 'baptism_date' , 'profession' , 'address' , 'city_id' , 'state_id' , 'country_id' , 'pincode' , 'membership_type' , 'membership_start_date' , 'membership_end_date' , 'family' , 'marriage_status' , 'marriage_start_date' , 'notes' , 'avatar' , 'status' , 'aadhar_number'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['date_of_birth','baptism_date','membership_start_date','marriage_start_date','deleted_at'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts=['membership_end_date'=>'array'];

    public function church()
    {
        return $this->belongsTo('App\Models\Church','church_id');
    }


    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function members()
    {
      return $this->belongsTo('App\Models\User','ref_id');
    }

    public function country()
    {
        return $this->hasOne('App\Models\Country','id','country_id');
    }

    public function state()
    {
        return $this->hasOne('App\Models\State','id','state_id');
    } 

    public function city()
    {
        return $this->hasOne('App\Models\City','id','city_id');
    }    

    public function scopeByChurch($query,$church_id)
    {
        $query->where('church_id',$church_id);

        return $query;
    }

    public function scopeByRole($query,$usergroup_id)
    {
        $query->wherehas('user',function ($query) use($usergroup_id)
        {
            $query->where('usergroup_id',$usergroup_id);
        });
        return $query;
    }

    public function scopeByAverageAge($query)
    {
        $query->where('usergroup_id',$usergroup_id);
        return $query;
    }

    public function scopeByGender($query , $gender)
    {
        $query->where('gender',$gender); 

        return $query;
    }

    public function scopeByMembershipType($query , $membership_type)
    {
        $query->where('membership_type',$membership_type); 

        return $query;
    }

    public function scopeByStatus($query , $status)
    {
        $query->where('status',$status);

        return $query;
    }

    public function scopeByBaptism($query , $baptism)
    {
        $query->where('was_baptized','LIKE','%'.$baptism.'%');

        return $query;
    }

    public function getAvatarPathAttribute()
    {
        return $this->getFilePath($this->avatar);
    }
}