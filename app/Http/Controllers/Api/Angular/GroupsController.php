<?php

namespace App\Http\Controllers\Api\Angular;

use App\Http\Resources\API\Group as GroupResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Church;
use App\Models\Group;
use App\Models\User;

class GroupsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showGroups($slug)
    {
        //
        $church = Church::where('slug','=',$slug)->first();

        $groups = Group::where('church_id',$church->id)->get();
         
        $groups = GroupResource::collection($groups);

        return $groups;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showGroup($slug,$id)
    {
        //
        $church = Church::where('slug','=',$slug)->first();

        $group  = Group::where([['church_id',$church->id],['id',$id]])->first();

        $array = [];

        $array['group_details'] = [
            //
            'id'            =>  $group->id,
            'category'      =>  $group->groupCategory->name,
            'name'          =>  $group->name,
            'cover_image'   =>  $group->CoverImagePath,
            'description'   =>  $group->description,
            'group_type'    =>  $group->group_type,
            'no_of_members' =>  $group->groupLink->count(),
        ];

        foreach($group->groupLink as $groupLink)
        {
            $array['group_member_details'][] = [
                //
                'user_name'     =>  $groupLink->user->name,
                'user_fullname' =>  $groupLink->user->FullName,
                'email'         =>  $groupLink->user->email,
                'role'          =>  $groupLink->role,
            ];
        }

        return $array;
    }
}