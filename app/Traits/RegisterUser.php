<?php
/**
 * Trait for processing RegisterUser
 */
namespace App\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Userprofile;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Log;

/**
 *
 * @class trait
 * Trait for RegisterUser Processes
 */
trait RegisterUser
{
    public function CreateUser($data , $church_id , $path , $usergroup_id)
    {
        \DB::beginTransaction();
        try
        {
            if(!is_null($data->ref_name))
            {
                $ref_user = User::where('name',$data->ref_name)->first();
            }
            
            $user = new User;
            $user->church_id = $church_id;
            $user->usergroup_id = $usergroup_id;

            if(!is_null($data->ref_name))
            {
                $user->ref_id = $ref_user->id;
            }

            if(!is_null($data->name))
            {
                $user->name = $data->name;
            }
            //$user->password = bcrypt($data->name);
            $user->password = bcrypt(password); //demo 
            $user->email = $data->email;
            $user->mobile_no = $data->mobile_no;
            $user->email_verification_code = Str::random(40);

            $user->save();
            

            $userprofile = new Userprofile;

            if(!is_null($data->ref_name))
            {
                $userprofile->relation = $data->relation;
            }

            $userprofile->church_id = $church_id;
            $userprofile->user_id = $user->id;
            $userprofile->firstname = $data->firstname;
            if(!is_null($data->lastname))
            {
                $userprofile->lastname = $data->lastname;
            }
            if(!is_null($data->birth_firstname))
            {
                $userprofile->birth_firstname = $data->birth_firstname;
            }

            if(!is_null($data->birth_lastname))
            {
                $userprofile->birth_lastname = $data->birth_lastname;
            }
            if(!is_null($data->gender))
            {
                $userprofile->gender = $data->gender;
            }
            if(!is_null($data->date_of_birth))
            {
                $userprofile->date_of_birth = $data->date_of_birth;
            }
            if(!is_null($data->was_baptized))
            {
                $userprofile->was_baptized = $data->was_baptized;
            }
            if(!is_null($data->baptism_date))
            {
                $userprofile->baptism_date = $data->baptism_date;
            }
            if(!is_null($data->profession))
            {
                $userprofile->profession = $data->profession;
            }
            if(!is_null($data->sub_occupation))
            {
                $userprofile->sub_occupation = $data->sub_occupation;
            }
            if(!is_null($data->address))
            {
                $userprofile->address = $data->address;
            }
            if(!is_null($data->city_id))
            {
                $userprofile->city_id = $data->city_id;
            }
            if(!is_null($data->state_id))
            {
                $userprofile->state_id = $data->state_id;
            }
            if(!is_null($data->country_id))
            {
                $userprofile->country_id = $data->country_id;
            }
            if(!is_null($data->pincode))
            {
                $userprofile->pincode = $data->pincode;
            }
            if(!is_null($data->membership_type))
            {
                $userprofile->membership_type = $data->membership_type;
                if($userprofile->membership_type=="member")
                {
                    //$userprofile->membership_start_date = $data->membership_start_date;
                    $userprofile->membership_start_date = Carbon::now();
                    //$userprofile->membership_end_date = $data->membership_end_date;
                }
            }
            if(!is_null($data->family))
            {
                $userprofile->family = $data->family;
            }
            if(!is_null($data->marriage_status))
            {
                $userprofile->marriage_status = $data->marriage_status;
            }
            if(!is_null($data->marriage_start_date))
            {
                $userprofile->marriage_start_date = $data->marriage_start_date;
            }
            if(!is_null($data->marriage_end_date))
            {
                $userprofile->marriage_end_date = $data->marriage_end_date;
            }
            if(!is_null($data->aadhar_number))
            {
                $userprofile->aadhar_number = $data->aadhar_number;
            }
            if(!is_null($data->notes))
            {
                $userprofile->notes = $data->notes;
            } 

            if($path != '')
            {
              $userprofile->avatar = $path;              
            }
            else
            {
                if($userprofile->gender == 'male')
                {
                    $userprofile->avatar = "uploads/male.png";
                }
                elseif ($userprofile->gender == 'female') 
                {
                    $userprofile->avatar = "uploads/female.png";
                }
                else
                {
                    $userprofile->avatar = "uploads/images.jpg";
                }
            }
            if(!is_null($data->facebook_id))
            {
                $userprofile->facebook_id = $data->facebook_id;
            }
            if(!is_null($data->description))
            {
                $userprofile->description = $data->description;
            }

            $userprofile->save();

            \DB::commit();
            return $user;
        }
        catch(Exception $e)
        {
            \DB::rollBack();
            Log::info($e->getMessage());
            //dd($e->getMessage());
        } 
    }
    public function createGuest($data , $church_id , $path , $usergroup_id)
    {
        \DB::beginTransaction();
        try
        {
            $user = new User;

            $user->church_id = $church_id;
            $user->usergroup_id = $usergroup_id;

            if(!is_null($data->name))
            {
                $user->name = $data->name;
            }
            //$user->password = bcrypt($data->name);
            $user->password = bcrypt(password); //demo 
            $user->email = $data->email;
            $user->mobile_no = $data->mobile_no;
            $user->email_verification_code = Str::random(40);

            $user->save();

            $userprofile = new Userprofile;

            $userprofile->church_id = $church_id;
            $userprofile->user_id = $user->id;
            $userprofile->firstname = $data->firstname;
            if(!is_null($data->lastname))
            {
                $userprofile->lastname = $data->lastname;
            }
            if(!is_null($data->gender))
            {
                $userprofile->gender = $data->gender;
            }
            if(!is_null($data->date_of_birth))
            {
                $userprofile->date_of_birth = $data->date_of_birth;
            }
            if(!is_null($data->was_baptized))
            {
                $userprofile->was_baptized = $data->was_baptized;
            }
            if(!is_null($data->baptism_date))
            {
                $userprofile->baptism_date = $data->baptism_date;
            }
            if(!is_null($data->profession))
            {
                $userprofile->profession = $data->profession;
            }
            if(!is_null($data->sub_occupation))
            {
                $userprofile->sub_occupation = $data->sub_occupation;
            }
            if(!is_null($data->address))
            {
                $userprofile->address = $data->address;
            }
            if(!is_null($data->city_id))
            {
                $userprofile->city_id = $data->city_id;
            }
            if(!is_null($data->state_id))
            {
                $userprofile->state_id = $data->state_id;
            }
            if(!is_null($data->country_id))
            {
                $userprofile->country_id = $data->country_id;
            }
            if(!is_null($data->pincode))
            {
                $userprofile->pincode = $data->pincode;
            }

            $userprofile->membership_type = 'guest';

            if(!is_null($data->aadhar_number))
            {
                $userprofile->aadhar_number = $data->aadhar_number;
            }
            if(!is_null($data->notes))
            {
                $userprofile->notes = $data->notes;
            } 

            if($userprofile->gender == 'male')
            {
                $userprofile->avatar = "uploads/male.png";
            }
            elseif ($userprofile->gender == 'female') 
            {
                $userprofile->avatar = "uploads/female.png";
            }
            else
            {
                $userprofile->avatar = "uploads/images.jpg";
            }

            $userprofile->save();

            \DB::commit();
            return $user;
        }
        catch(Exception $e)
        {
            \DB::rollBack();
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }  
    }
  
    public function CreateSubscriber($data)
    {
        try
        {            
            $subscriber = new Subscriber;

            $subscriber->firstname  =  $data->firstname;
            $subscriber->lastname   =  $data->lastname;
            $subscriber->email      =  $data->email;
            $subscriber->aff        =  $data->aff; 
            $subscriber->source     =  $data->source;
            $subscriber->is_active  =  $data->is_active;

            $subscriber->save();
        
            return $subscriber;
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        } 
    }
}