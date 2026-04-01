<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\API\GroupLink as GroupLinkResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GroupLink;
use App\Models\User;

/**
 * GroupsController
 *
 * Provides group listings and group information via API.
 * Returns user group memberships and group details.
 *
 * @package App\Http\Controllers\Api
 */
class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::where('name', Auth::user()->name)->first();
        $grouplinks = GroupLink::where('user_id',$user->id)->get();

        $group = GroupLinkResource::collection($grouplinks);

        return $group;
    }
}
