<?php

namespace App\Http\Controllers\Api\Angular;

use App\Http\Resources\PrayerRequest as PrayerRequestsResource;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\PrayerRequest;
use Illuminate\Http\Request;
use App\Models\Church;
use App\Traits\RegisterUser;
use App\Traits\Common;
use Exception;
use Log;

class PrayerRequestsController extends Controller
{
	use RegisterUser,Common;

    public function showPrayerRequests($slug)
    {
        $church = Church::where('slug','=',$slug)->first();

        $prayers = PrayerRequest::where('church_id',$church->id)->paginate(5);
        
        $prayers = PrayerRequestsResource::collection($prayers);

        return $prayers;
    }

    public function store($slug,Request $request)
    {
    	try{

	    	$church = Church::where('slug','=',$slug)->first();
	    	$path = '';
	    	$user = $this->createGuest($request,$church->id,$path,5);
	    	if($user){
	    		$file = $request->file('image');
	            $path = $this->uploadFile('uploads/images/Prayer',$file);

	    		$create = [
	    			'church_id'=> $church->id,
	    			'user_id'=> $user->id,
	    			'title'=> $request->title,
	    			'description'=> $request->prayer_msg,
	    			'image'=> $path,
	    			'date'=> $request->prayer_date,
	    			'status' => 'pending',
	    		];
	    		$prayer_req = PrayerRequest::create($create);
	    		if ($prayer_req) {
	    			$success = true;
	            }
	            else
	            {
	                $success = false;
	            }

	            return response()->json([
	                'status'    =>  $success,
	            ], 200);
	    	}
	    }
	    catch(Exception $e)
        {
            Log::info($e->getMessage());
           // dd($e->getMessage());
        }  
    }
}