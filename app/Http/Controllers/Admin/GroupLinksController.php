<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\User as UserResource;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Events\SinglePushEvent;
use App\Models\PermissionUser;
use Illuminate\Http\Request;
use App\Traits\EventProcess;
use App\Traits\LogActivity;
use App\Models\Permission;
use App\Models\GroupLink;
use App\Traits\Common;
use App\Models\Group;
use App\Models\User;
use Exception;
use Log;

class GroupLinksController extends Controller
{
    use EventProcess;
    use LogActivity;
    use Common;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $group = Group::where('id',$id)->first();
        if(Gate::allows('group',$group))
        {
            $array =[];
            $permission = Permission::get();
            $users = User::where('church_id',Auth::user()->church_id)->ByRole(5)->whereHas('userprofile', function($q){
                        $q->where('membership_type','member')->where('status','active');
                    })->get();
            $memberlist = UserResource::collection($users);
            $array['permissionlist'] = $permission;
            $array['memberlist'] = $memberlist;

            return $array;
        }
        else
        {
            abort(403);
        } 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($group_id)
    {
        //
        $group = Group::where('id',$group_id)->first();
        if(Gate::allows('group',$group))
        {
            return view('/admin/groups/addMember',['group' => $group]);
        }
        else
        {
            abort(403);
        } 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $group_id)
    {
        //
        $existing_user = Grouplink::where([['church_id',$request->church_id],['user_id',$request->user_id],['group_id',$request->group_id]])->first();

        if(!($existing_user))
        {
            try
            {
                $grouplink = new Grouplink;

                $grouplink->church_id   = $request->church_id;
                $grouplink->user_id     = $request->user_id;
                $grouplink->group_id    = $request->group_id;
                $grouplink->role        = $request->role;

                $grouplink->save();

                $user = User::where([['church_id',$grouplink->church_id],['id',$grouplink->user_id]])->first();
                
                $user->attachPermissions($request->permissions);
                if( count($request->permissions) > 0 )
                {
                    $this->userNotifyGroup($request->church_id,$grouplink->id,$user->mobile_no,$grouplink->created_at);
                }

                $data=[];

                $data['church_id']  =   Auth::user()->church_id;
                $data['user_id']    =   $user->id;
                $data['message']    =   'You have been added to this group';
                $data['type']       =   'group';

                event(new SinglePushEvent($data));

                $message=('Member Added to Group Successfully');

                $ip= $this->getRequestIP();
                $this->doActivityLog(
                    $grouplink,
                    Auth::user(),
                    ['ip' => $ip, 'details' => $_SERVER['HTTP_USER_AGENT'] ],
                    LOGNAME_ADD_MEMBER_TO_GROUP,
                    $message
                    );

                $res['success']="Member Added Successfully";
                return $res; 
            }
            catch(Exception $e)
            {
                Log::info($e->getMessage());
               //dd($e->getMessage());
            }
        }
        else
        {
            $res['success']="Member Already Exists";
            return $res;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $member = GroupLink::where('id',$id)->first();
        if(Gate::allows('group',$member))
        {
            $permissionUsers = PermissionUser::where('user_id',$member->user_id)->get();

            return view('/admin/groups/editMember',['members' => $member , 'permissionUsers' => $permissionUsers]);
        }
        else
        {
            abort(403);
        }  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        try
        {
            $user = User::where([['church_id',$request->church_id],['id',$request->user_id]])->first();
            $permissionUsers = PermissionUser::where('user_id',$request->user_id)->get();

            foreach($permissionUsers as $permissionUser)
            {
                $permissionUser->delete();
            }
           
            $user->attachPermissions($request->permissions);

            $message=('Member Permissions Updated Successfully');

                $ip= $this->getRequestIP();
                $this->doActivityLog(
                    $user,
                    Auth::user(),
                    ['ip' => $ip, 'details' => $_SERVER['HTTP_USER_AGENT'] ],
                    LOGNAME_UPDATE_MEMBER_PERMISSION,
                    $message
                    );
            
            return redirect()->back()->with(['successmessage' => 'Member Permissions Updated Successfully']);
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try
        {
            $member = GroupLink::where('id',$id)->first();
            if(Gate::allows('group',$member))
            {
                $member->delete();
                $permissions = PermissionUser::where('user_id',$member->user_id)->get();
                foreach($permissions as $permission)
                {
                    $permission->delete();
                }
                    $message=('Member removed from Group Successfully');

                    $ip= $this->getRequestIP();
                    $this->doActivityLog(
                        $member,
                        Auth::user(),
                        ['ip' => $ip, 'details' => $_SERVER['HTTP_USER_AGENT'] ],
                        LOGNAME_REMOVE_GROUP_MEMBER,
                        $message
                    );
                
                return redirect()->back()->with(['successmessage' => 'Member removed from Group Successfully']);
            }
            else
            {
                abort(403);
            }  
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }
    }
}