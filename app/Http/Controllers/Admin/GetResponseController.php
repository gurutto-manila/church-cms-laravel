<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Cache;
use App\Traits\Common;

class GetResponseController extends Controller
{
  use Common;
    public function getcampaigns()
    {
       $res=[];
    	try{
           $url='https://api.getresponse.com/v3/campaigns';
              $headers = array(
       'X-Auth-Token: api-key '.env('GETRESPONSE_API_KEY'),
       'Content-Type: application/json',
       
      );
 //dd($headers);

        if(Cache::has('getresponse_campaigns'))
        {
         
            $res=Cache::get('getresponse_campaigns');          

        }
        else
        {
    
             $res=$this->getResponse($url,$headers);
            Cache::forever('getresponse_campaigns',$res);
        }

       
          }
     catch(Exception $e)
     {
		//dd($e->getMessage());
     }
           return $res;     
              
    }
     
   public function getContacts($campaign_id){
     $headers = array(
       'X-Auth-Token: api-key '.env('GETRESPONSE_API_KEY'),
       'Content-Type: application/json',
      );
      $contact_url=env('GETRESPONSE_URL').'/contacts?query[campaignId]='.$campaign_id;
      $res_contact=$this->getResponse($contact_url,$headers);
        $res_contact = json_decode($res_contact,true); 
      //dd($res_contact);
   }
   public function refreshCache()
   {

        Cache::forget('getresponse_campaigns');
   }






}
