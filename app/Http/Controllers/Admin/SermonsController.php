<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Traits\LogActivity;
use App\Models\SermonLink;
use App\Models\Sermon;
use App\Traits\Common;
use Exception;
use Log;

/**
 * SermonsController
 *
 * Manages sermon/message content within the church.
 * Handles sermon creation, updates, deletion, and sermon link management (audio/video files).
 * Supports searching by title and pastor name, voting, and sermon categorization.
 * Integrates with voting system and sermon media links.
 *
 * @package App\Http\Controllers\Admin
 * @uses LogActivity Trait for audit logging
 * @uses Common Trait for file path utilities
 */
class SermonsController extends Controller
{
     use LogActivity;
    use Common;
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sermons = Sermon::where('church_id',Auth::user()->church_id)->with('vote');
        $q = request('q');
        if($q!= '')
        {
            $sermons= Sermon::whereHas('user', function ($query) use($q)
            {
                $query->where([['title','LIKE','%'.$q.'%'],['church_id',Auth::user()->church_id]])->orWhere('name','LIKE','%'.$q.'%');
            });
        }
        $sermons = $sermons->paginate(8);

        return view('admin/sermon/index',['sermons' => $sermons])->withQuery($q);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sermon = Sermon::where('id',$id)->first();
        $sermonlinks = SermonLink::where('sermons_id',$id)->paginate(5);
        if(Gate::allows('sermon',$sermon))
        {
            return view('/admin/sermon/show',['sermon' => $sermon , 'sermonlinks' => $sermonlinks]);
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
    public function download(Request $request,$id)
    {
        //PDF file is stored under project/public/download/info.pdf
        $sermon = SermonLink::where('id', $id)->first();
        if(Gate::allows('sermon',$sermon))
        {
           $path= $this->getFilePath($sermon->url);


            $file=pathinfo($path);
            $extension = $file['extension'];
            $headers = [
                'Content-Type: application/'.$extension,
            ];

            return \Response::download($path, 'filename.'.$extension, $headers);
        }
        else
        {
            abort(403);
        }
    }
}
