<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChurchDetail;
use App\Models\Church;
use App\Traits\Common;

class ChurchDetailsController extends Controller
{
    use Common;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($church_id)
    {
        //
        $church = Church::where('id',$church_id)->first();
        $churchdetail = [];

        $churchdetails  = ChurchDetail::select('meta_key','meta_value')->where('church_id',$church->id)->get();
        $plucked  = $churchdetails->pluck('meta_value','meta_key');

        $churchdetail['church_name']    = ucwords($church->name);
        $churchdetail['church_logo']    = $plucked['church_logo'] == '-' ? '':$this->getFilePath($plucked['church_logo']);
        $churchdetail['short_summary']  = $plucked['short_summary'] == '-' ? '':$plucked['short_summary'];
        $churchdetail['long_summary']   = $plucked['long_summary'] == '-' ? '':$plucked['long_summary'];
        $churchdetail['quotes']         = $plucked['quotes'] == '-' ? '':$plucked['quotes'];
        $churchdetail['phone']          = $plucked['phone'] == '-' ? '':$plucked['phone'];
        $churchdetail['email']          = $plucked['email'] == '-' ? '':$plucked['email'];
        $churchdetail['address']        = $plucked['address'] == '-' ? '':$plucked['address'];
        $churchdetail['latitude']       = $plucked['latitude'] == '-' ? '':$plucked['latitude'];
        $churchdetail['longitude']      = $plucked['longitude'] == '-' ? '':$plucked['longitude'];
        $churchdetail['website']        = $plucked['website'] == '-' ? '':$plucked['website'];
        $churchdetail['facebook']       = $plucked['facebook'] == '-' ? '':$plucked['facebook'];
        $churchdetail['twitter']        = $plucked['twitter'] == '-' ? '':$plucked['twitter'];
        $churchdetail['instagram']      = $plucked['instagram'] == '-' ? '':$plucked['instagram'];
        
        return $churchdetail;  
    }
}