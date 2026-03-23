<?php
/**
 * Trait for processing Dashboard
 */
namespace App\Traits;

use Illuminate\Support\Facades\Cache;
use App\Models\Subscription;
use App\Models\Userprofile;
use App\Models\Attendance;
use App\Models\MediaFile;
use App\Models\Bulletin;
use App\Models\Gallery;
use App\Models\Events;
use App\Models\Group;
use App\Models\Fund;
use App\Models\User;
use Carbon\Carbon;
use Exception;

/**
 *
 * @class trait
 * Trait for Dashboard Processes
 */
trait Dashboard
{

    public function adminDashboard($church_id,$admin_id)
    {
        $ssseconds = 300;
        $array = [];

        $array['memberCount'] = Cache::remember('memberCount'.$church_id, env('CACHE_TIME'), function () use ($church_id)  {
            return User::ByChurch($church_id)->ByRole(5)->ByMembershipType('member')->ByStatus('active')->count();
        });

        $array['maleMemberCount'] = Cache::remember('maleMemberCount'.$church_id, env('CACHE_TIME'), function () use ($church_id)  {
            return Userprofile::ByRole(5)->where([
                ['church_id',$church_id],
                ['membership_type','member'],
                ['gender','male'],
                ['status','active']
            ])->count();
        });

        $array['femaleMemberCount'] = Cache::remember('femaleMemberCount'.$church_id, env('CACHE_TIME'), function () use ($church_id)  {
            return Userprofile::ByRole(5)->where([
                ['church_id',$church_id],
                ['membership_type','member'],
                ['gender','female'],
                ['status','active']
            ])->count();
        });

        /*$array['baptizedCount'] = Cache::remember('baptizedCount'.$church_id, env('CACHE_TIME'), function () use ($church_id)  {
            return Userprofile::ByChurch($church_id)->ByRole(5)->ByStatus('active')->ByBaptism('yes')->count();
        });

        $array['maleBaptizedCount'] = Cache::remember('maleBaptizedCount'.$church_id, env('CACHE_TIME'), function () use ($church_id)  {
            return Userprofile::ByChurch($church_id)->ByRole(5)->ByStatus('active')->ByGender('male')->ByBaptism('yes')->count();
        });

        $array['femaleBaptizedCount'] = Cache::remember('femaleBaptizedCount'.$church_id, env('CACHE_TIME'), function () use ($church_id)  {
            return Userprofile::ByChurch($church_id)->ByRole(5)->ByStatus('active')->ByGender('female')->ByBaptism('yes')->count();
        });

        $array['nonBaptizedCount'] = Cache::remember('nonBaptizedCount'.$church_id, env('CACHE_TIME'), function () use ($church_id)  {
            return Userprofile::ByChurch($church_id)->ByRole(5)->ByStatus('active')->ByBaptism('no')->count();
        });*/

        $array['guestCount'] = Cache::remember('guestCount'.$church_id, env('CACHE_TIME'), function () use ($church_id)  {
            return Userprofile::ByChurch($church_id)->ByRole(5)->ByMembershipType('guest')->ByStatus('active')->count();
        });

        $array['maleGuestCount'] = Cache::remember('maleGuestCount'.$church_id, env('CACHE_TIME'), function () use ($church_id)  {
            return Userprofile::ByRole(5)->where([
                ['church_id',$church_id],
                ['membership_type','guest'],
                ['gender','male'],
                ['status','active']
            ])->count();
        });

        $array['femaleGuestCount'] = Cache::remember('femaleGuestCount'.$church_id, env('CACHE_TIME'), function () use ($church_id)  {
            return Userprofile::ByRole(5)->where([
                ['church_id',$church_id],
                ['membership_type','guest'],
                ['gender','female'],
                ['status','active']
            ])->count();
        });

        $array['longTimeMember'] = Cache::remember('longTimeMember'.$church_id, env('CACHE_TIME'), function () use ($church_id)  {
            return User::with('userprofile')->orderBy('created_at', 'asc')->ByRole(5)->ByChurch($church_id)->ByStatus('active')->take(4)->get();
        });

        $array['recentMember'] = Cache::remember('recentMember'.$church_id, env('CACHE_TIME'), function () use ($church_id)  {
            return User::with('userprofile')->orderBy('created_at', 'desc')->ByRole(5)->ByChurch($church_id)->ByStatus('active')->take(4)->get();
        });

        $array['eventCount'] = Cache::remember('eventCount'.$church_id, env('CACHE_TIME'), function () use ($church_id)  {
            return Events::where('church_id',$church_id)->count();
        });

        $array['galleryCount'] = Cache::remember('galleryCount'.$church_id, env('CACHE_TIME'), function () use ($church_id)  {
            return Gallery::where('church_id',$church_id)->count();
        });

        $array['fileCount'] = Cache::remember('fileCount'.$church_id, env('CACHE_TIME'), function () use ($church_id)  {
            return MediaFile::where('church_id',$church_id)->count();
        });

        $array['bulletinCount'] = Cache::remember('bulletinCount'.$church_id, env('CACHE_TIME'), function () use ($church_id)  {
            return Bulletin::where('church_id',$church_id)->count();
        });

        $array['groupCount'] = Cache::remember('groupCount'.$church_id, env('CACHE_TIME'), function () use ($church_id)  {
            return Group::where('church_id',$church_id)->count();
        });

        $array['subscription'] = Cache::remember('subscription'.$church_id, env('CACHE_TIME'), function () use ($church_id)  {
            return Subscription::with('user','church')->where('church_id',$church_id)->first();
        });

        $array['fundlist'] = Cache::remember('fundlist'.$church_id, env('CACHE_TIME'), function () use ($church_id)  {
            return Fund::where([['church_id',$church_id],['status','deposited']])->orderBy('authorised_at','DESC')->take(5)->get();
        });

        $array['latestevent'] = Cache::remember('latestevent'.$church_id, env('CACHE_TIME'), function () use ($church_id)  {
            return Events::where([['church_id',$church_id],['start_date','>=',date('Y-m-d')]])->first(); 
        });

        $latestevent = $array['latestevent'];

        $array['latest_date'] = Cache::remember('latest_date'.$church_id, env('CACHE_TIME'), function () use ($church_id,$latestevent)  {
            return date('Y-m-d',strtotime('-1 day',strtotime($latestevent->start_date)));
        });

        $latest_date = $array['latest_date'];

        $array['absentMembers'] = Cache::remember('absentMembers'.$church_id, env('CACHE_TIME'), function () use ($church_id,$latest_date)  {
            return Attendance::where([['church_id',$church_id],['is_present',0],['date','<=',$latest_date]])->orderBy('date')->take(4)->get();
        });

        $array['total_fund'] = Cache::remember('total_fund'.$church_id, env('CACHE_TIME'), function () use ($church_id)  {
            return Fund::where([['church_id',$church_id],['status','deposited']])->sum('amount');
        });

        $array['funds']  = Cache::remember('funds'.$church_id, env('CACHE_TIME'), function () use ($church_id)  {
            return Fund::where([['church_id',$church_id],['status','deposited']])->orderBy('authorised_at','DESC')->get()->groupBy([function($fund) {
                return Carbon::parse($fund->authorised_at)->format('M-y'); 
            }])->take(6);
        });
        
        $amountarray = [];
        foreach($array['funds'] as $key => $groups)
        {
            foreach ($groups as $fund) 
            {
                $amountarray[$key] += $fund->amount;
            }
            if($key == null)
            {
                $array['final'][] = array('y' => 0 , 'label' => 0);
            }
            else
            {
                $array['final'][] = array('y' => $amountarray[$key], 'label' => $key );
            }
        }

        return $array;
    }
}