<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AudioRequest;
use Illuminate\Http\Request;
use App\Traits\LogActivity;
use App\Models\MediaFile;
use App\Traits\Common;
use Exception;
use Log;

class AudioController extends Controller
{
    //
    use LogActivity;
    use Common;

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/mediafiles/audio/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAudio(Request $request)
    {
        try
        {
            $folder     = '/uploads/audio/'.Auth::user()->church_id;
            $filename   = date('d_m_Y_H_i_s').'_.'.$request->encoding;
            $path       = $this->putContentsByFilename($folder,$request->file,$filename);
            \Session::put('path',$path);
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }
    }

    public function audiostore(Request $request)
    {
        try
        {
            \Session::forget('path');
            $folder     = Auth::user()->church_id.'/uploads/files/audio';
            $path = $this->uploadFile($folder,$request->file);
            \Session::put('path',$path);
            // dump( \Session::get('audiopath_urls'));
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AudioRequest $request)
    {
        //
        //dd($request->all());
        try
        {
            $audio = new MediaFile;

            $audio->church_id       = Auth::user()->church_id;
            $audio->media_type      = 'audio';
            $audio->name            = $request->name;
            $audio->description     = $request->description;
            $audio->type            = $request->audio_type;

            if($request->audio_type == 'record')
            {
                $file = $request->file('audioupload');
                if($file)
                {
                    //$path = $this->uploadFile('/uploads/audio/'.Auth::user()->church_id,$file);
                     $folder     = Auth::user()->church_id.'/uploads/files/audio';
                     $filename   = 'audio_'.date('d_m_Y_H_i_s').'_audio.mp3';
                     $path  = $this->putContentsByFilename($folder,$request->audioupload,$filename);
                     $audio->url = $path;
                }
            }
            elseif($request->audio_type == 'attach')
            {
                $audio->url = \Session::get('path');
            }

            $audio->save();

            \Session::forget('path');

            $message = 'Audio Added Successfully';

            $ip= $this->getRequestIP();
            $this->doActivityLog(
                $audio,
                Auth::user(),
                ['ip' => $ip, 'details' => $_SERVER['HTTP_USER_AGENT'] ],
                LOGNAME_ADD_AUDIO,
                $message
            );

            return redirect('/admin/mediafiles')->with('successmessage',$message);
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            dd($e->getMessage());
        }
    }
}