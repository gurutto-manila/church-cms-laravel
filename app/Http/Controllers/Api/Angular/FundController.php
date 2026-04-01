<?php

namespace App\Http\Controllers\Api\Angular;

use App\Http\Resources\API\Fund as FundResource;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Church;
use App\Models\Fund;
use Exception;
use App\Traits\LogActivity;
use Log;

class FundController extends Controller
{
	use LogActivity;

    public function showFunds($slug)
    {
        $church = Church::where('slug','=',$slug)->first();

        $funds = Fund::where('church_id',$church->id)->get();
        
        $funds = FundResource::collection($funds);

        return $funds;
    }

    public function store($slug,Request $request)
    {
        $church = Church::where('slug','=',$slug)->first();
         try
        {
            $fund = new Fund;

            $fund->church_id         = $church->id;
            $fund->authorised_by     = Auth::id();
            $fund->authorised_at     = date('Y-m-d H:i:s');
            $array =[];
            
            $fund->membership        = 'guest';           
            $array['first_name']    = $request->firstname;
            $array['last_name']     = $request->lastname;
            $array['address']       = $request->address;
            $array['mobile_number'] = $request->mobile_no;            
            $fund->data            = $array;      
            $fund->amount            = $request->amount;
            if($request->amount >= '100000')
            {
                $array['pan_number']    = $request->pan_num;
                $fund->data = $array; 
            }
            $fund->method            = $request->method;
            $payment_details = [];
            if($request->method == 'cheque')
            {
                $payment_details['cheque_number']   = $request->cheque_num;
                $payment_details['account_number']  = $request->acc_num; 
                $payment_details['payee_name']      = $request->payee_name; 

                $fund->payment_details  = $payment_details; 
            }
            elseif($request->method == 'card')
            {
                $payment_details['card_name']   = $request->card_name;
                $payment_details['bank_name']   = $request->bank_name;

                $fund->payment_details = $payment_details;
            }
            elseif($request->method == 'demanddraft')
            {
                $fund->payment_details['payable_at']        = $request->payable_at;
                $fund->payment_details['account_number']    = $request->dd_accnum;
                $fund->payment_details = $payment_details;
            }
            $fund->status            = $request->status;

            if($request->status == 'cancel')
            {
                $fund->comments = $request->comments;
            }
            $fund->uuid=uniqid();
            $fund->save();
            if ($fund) {
            	$success = true;
            	// $ip= $this->getRequestIP();
            	// $this->doActivityLog(
	            //     $fund,
	            //     Auth::user(),
	            //     ['ip' => $ip, 'details' => $_SERVER['HTTP_USER_AGENT'] ],
	            //     LOGNAME_ADD_FUND,
	            //     $message
            	// ); 
            }else{
            	$success = false;
            }
          
          	return response()->json([
	            'status'    =>  $success,
	        ], 200);
            
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());

        }       
    }
}