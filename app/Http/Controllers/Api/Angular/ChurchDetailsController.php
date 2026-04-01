<?php

namespace App\Http\Controllers\Api\Angular;

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
    public function showChurchDetails($slug)
    {
        //
        $church = Church::where('slug','=',$slug)->first();
        $churchdetail = [];

        $churchdetails  = ChurchDetail::select('meta_key','meta_value')->where('church_id',$church->id)->get();
        $plucked  = $churchdetails->pluck('meta_value','meta_key');

        $churchdetail['church_logo']     = $plucked['church_logo'] === '-' ? null:$this->getFilePath($plucked['church_logo']);
        $churchdetail['short_summary']   = $plucked['short_summary'] === '-' ? null:$plucked['short_summary'];
        $churchdetail['long_summary']    = $plucked['long_summary'] === '-' ? null:$plucked['long_summary'];
        $churchdetail['quotes']          = $plucked['quotes'] === '-' ? null:$plucked['quotes'];
        $churchdetail['phone']           = $plucked['phone'] === '-' ? null:$plucked['phone'];
        $churchdetail['email']           = $plucked['email'] === '-' ? null:$plucked['email'];
        $churchdetail['address']         = $plucked['address'] === '-' ? null:$plucked['address'];
        $churchdetail['latitude']        = $plucked['latitude'] === '-' ? null:$plucked['latitude'];
        $churchdetail['longitude']       = $plucked['longitude'] === '-' ? null:$plucked['longitude'];
        $churchdetail['facebook']        = $plucked['facebook'] === '-' ? null:$plucked['facebook'];
        $churchdetail['twitter']         = $plucked['twitter'] === '-' ? null:$plucked['twitter'];
        $churchdetail['instagram']       = $plucked['instagram'] === '-' ? null:$plucked['instagram'];

        $churchdetail['seo_basic']['sitetitle']                = \config::get('settings.sitetitle');
        $churchdetail['seo_basic']['site_description']         = \config::get('settings.site_description');
        $churchdetail['seo_basic']['site_keyword']             = \config::get('settings.site_keyword');
        $churchdetail['seo_basic']['header_code']              = \config::get('settings.header_code');
        $churchdetail['seo_basic']['footer_code']              = \config::get('settings.footer_code');
        
        $churchdetail['seo_advanced']['facebook_title']        = \config::get('settings.facebook_title');
        $churchdetail['seo_advanced']['facebook_description']  = \config::get('settings.facebook_description');
        $churchdetail['seo_advanced']['facebook_url']          = \config::get('settings.facebook_url');
        $churchdetail['seo_advanced']['facebook_image']        = \config::get('settings.facebook_image') === null ? null:$this->getFilePath(\config::get('settings.facebook_image'));
        $churchdetail['seo_advanced']['twitter_title']         = \config::get('settings.twitter_title');
        $churchdetail['seo_advanced']['twitter_description']   = \config::get('settings.twitter_description');
        $churchdetail['seo_advanced']['twitter_url']           = \config::get('settings.twitter_url');
        $churchdetail['seo_advanced']['twitter_image']         = \config::get('settings.twitter_image') === null ? null:$this->getFilePath(\config::get('settings.twitter_image'));

        return $churchdetail;  
    }
}