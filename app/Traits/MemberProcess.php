<?php

/**
 * Trait for processing common
 */
namespace App\Traits;

use App\Http\Resources\User as UserResource;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Log;

/**
 *
 * @class trait
 * Trait for MemberProcess Processes
 */
trait MemberProcess
{
    public function MemberFilter($request,$church_id,$usergroup_id)
    {
        try
        {
            $users = User::ByChurch($church_id)->ByRole($usergroup_id)->whereHas('userprofile', function($q)
                {
                     $q->where('membership_type','member')->orWhere('membership_type',null);
                   // $q->where([['status','active'],['membership_type','member']])->orWhere([['status','inactive'],['membership_type','member']]);
                });

            $alphabet = $request->alphabet ? $request->alphabet:'';
                if($alphabet)
                {
                    $users =$users->ByFirstName($alphabet);
                }
            if(count(array(\Request::getQueryString()))>0)
            {
                /*$name = $request->name;
                if($name!='')
                {
                    $users = $users->ByName($name);
                }*/

                $firstname = $request->firstname;
                if($firstname!='')
                {
                    $users = $users->ByFirstName($firstname);
                }

                $lastname = $request->lastname;
                if($lastname!='')
                {
                    $users = $users->ByLastName($lastname);
                }

                $gender = $request->gender;
                if($gender!='')
                {
                    $users = $users->ByGender($gender);
                }

                $membership_type = $request->membership_type;
                if($membership_type!='')
                {
                    $users = $users->ByMembershipType($membership_type);
                }

                $marriage_status = $request->marriage_status;
                if($marriage_status!='')
                {
                    $users = $users->ByMarriageStatus($marriage_status);
                }

                $min_search = $request->min_age;
                $max_search = $request->max_age;
                if(($min_search!='') && ($max_search!=''))
                {
                    $min_age = date('Y') - $min_search;
                    $max_age = date('Y') - $max_search;
                    $users = $users->ByAge($min_age,$max_age);
                }

                $date_of_birth = $request->date_of_birth;
                if($date_of_birth != '1970-01-01') 
                {
                    if($date_of_birth != '')
                    {
                        $users = $users->ByDateOfBirth($date_of_birth);
                    }
                }

                $baptism = $request->baptism;
                if($baptism!='')
                {
                    $users = $users->ByBaptism($baptism);
                }

                $family = $request->family;
                if($family!='')
                {
                    $users = $users->ByFamily($family);
                }

                $profession = $request->profession;
                if($profession!='')
                {
                    $users = $users->ByProfession($profession);
                }

                $mobile_no = $request->mobile_no;
                if($mobile_no!='')
                {
                    $users = $users->ByMobile_no($mobile_no);
                }

                $email = $request->email;
                if($email!='')
                {
                    $users = $users->ByEmail_id($email);
                }

                $location = $request->location;
                if($location!='')
                {
                    $users = $users->ByLocation($location);
                }
            }
            $users=$users->get();
            $users = UserResource::collection($users);
            return $users;
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }
    }
    
    public function SubAdminFilter($request,$church_id,$usergroup_id)
    {
        try
        {
            $users = User::ByChurch($church_id)->ByRole($usergroup_id)->whereHas('userprofile', function($q)
                {
                    $q->where('status','active')->orWhere('status','inactive');
                });

            $alphabet = $request->alphabet ? $request->alphabet:'';
                if($alphabet)
                {
                    $users =$users->ByFirstName($alphabet);
                }
            if(count(array(\Request::getQueryString()))>0)
            {
                /*$name = $request->name;
                if($name!='')
                {
                    $users = $users->ByName($name);
                }*/

                $firstname = $request->firstname;
                if($firstname!='')
                {
                    $users = $users->ByFirstName($firstname);
                }

                $lastname = $request->lastname;
                if($lastname!='')
                {
                    $users = $users->ByLastName($lastname);
                }

                $gender = $request->gender;
                if($gender!='')
                {
                    $users = $users->ByGender($gender);
                }

                $min_search = $request->min_age;
                $max_search = $request->max_age;
                if(($min_search!='') && ($max_search!=''))
                {
                    $min_age = date('Y') - $min_search;
                    $max_age = date('Y') - $max_search;
                    $users = $users->ByAge($min_age,$max_age);
                }

                $date_of_birth = $request->date_of_birth;
                if($date_of_birth != '1970-01-01') 
                {
                    if($date_of_birth != '')
                    {
                        $users = $users->ByDateOfBirth($date_of_birth);
                    }
                }

                $profession = $request->profession;
                if($profession!='')
                {
                    $users = $users->ByProfession($profession);
                }

                $mobile_no = $request->mobile_no;
                if($mobile_no!='')
                {
                    $users = $users->ByMobile_no($mobile_no);
                }

                $email = $request->email;
                if($email!='')
                {
                    $users = $users->ByEmail_id($email);
                }

                $location = $request->location;
                if($location!='')
                {
                    $users = $users->ByLocation($location);
                }
            }
            $users=$users->get();
            $users = UserResource::collection($users);
            return $users;
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }
    }
    
    public function PreacherFilter($request,$church_id,$usergroup_id)
    {
        try
        {
            $users = User::ByChurch($church_id)->ByRole($usergroup_id)->whereHas('userprofile', function($q)
            {
                $q->where('status','active')->orWhere('status','inactive');
            });

            $alphabet = $request->alphabet ? $request->alphabet:'';
            if($alphabet)
            {
                $users =$users->ByFirstName($alphabet);
            }
            if(count(array(\Request::getQueryString()))>0)
            {
                /*$name = $request->name;
                if($name!='')
                {
                    $users = $users->ByName($name);
                }*/

                $firstname = $request->firstname;
                if($firstname!='')
                {
                    $users = $users->ByFirstName($firstname);
                }

                $lastname = $request->lastname;
                if($lastname!='')
                {
                    $users = $users->ByLastName($lastname);
                }

                $mobile_no = $request->mobile_no;
                if($mobile_no!='')
                {
                    $users = $users->ByMobile_no($mobile_no);
                }

                $email = $request->email;
                if($email!='')
                {
                    $users = $users->ByEmail_id($email);
                }

                $location = $request->location;
                if($location!='')
                {
                    $users = $users->ByLocation($location);
                }
            }
            $users=$users->get();
            $users = UserResource::collection($users);
            return $users;
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }
    }
    
    public function GuestFilter($request,$church_id,$usergroup_id)
    {
        try
        {
            $users = User::ByChurch($church_id)->ByRole($usergroup_id)->whereHas('userprofile', function($q)
                {
                    $q->where([['status','active'],['membership_type','guest']])->orWhere([['status','inactive'],['membership_type','guest']]);
                });

            $alphabet = $request->alphabet ? $request->alphabet:'';
                if($alphabet)
                {
                    $users =$users->ByFirstName($alphabet);
                }
            if(count(array(\Request::getQueryString()))>0)
            {
                $firstname = $request->firstname;
                if($firstname!='')
                {
                    $users = $users->ByFirstName($firstname);
                }

                $lastname = $request->lastname;
                if($lastname!='')
                {
                    $users = $users->ByLastName($lastname);
                }

                $gender = $request->gender;
                if($gender!='')
                {
                    $users = $users->ByGender($gender);
                }

                $min_search = $request->min_age;
                $max_search = $request->max_age;
                if(($min_search!='') && ($max_search!=''))
                {
                    $min_age = date('Y') - $min_search;
                    $max_age = date('Y') - $max_search;
                    $users = $users->ByAge($min_age,$max_age);
                }

                $date_of_birth = $request->date_of_birth;
                if($date_of_birth != '1970-01-01') 
                {
                    if($date_of_birth != '')
                    {
                        $users = $users->ByDateOfBirth($date_of_birth);
                    }
                }

                $profession = $request->profession;
                if($profession!='')
                {
                    $users = $users->ByProfession($profession);
                }

                $mobile_no = $request->mobile_no;
                if($mobile_no!='')
                {
                    $users = $users->ByMobile_no($mobile_no);
                }

                $email = $request->email;
                if($email!='')
                {
                    $users = $users->ByEmail_id($email);
                }

                $location = $request->location;
                if($location!='')
                {
                    $users = $users->ByLocation($location);
                }
            }
            $users=$users->get();
            $users = UserResource::collection($users);
            return $users;
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }
    }
}