<?php

namespace App\Http\Controllers\Api\Angular;

use App\Http\Resources\API\Page as PageResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Church;
use App\Models\Page;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        //
        $church = Church::where('slug','=',$slug)->first();

        $pages = Page::where([
            ['church_id',$church->id],
            ['status',1],
        ])->paginate(5);
        $pages = PageResource::collection($pages);

        return $pages;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug,$id)
    {
        //
        $church = Church::where('slug','=',$slug)->first();
        
        $page = Page::where([['church_id',$church->id],['id',$id]])->first();

        $array = [];

        $array['id']            = $page->id;
        $array['page_name']     = $page->page_name;
        $array['category']      = str_replace('_', ' ', ucwords($page->pageCategory->name));
        $array['description']   = $page->description;
        $array['cover_image']   = $page->CoverImagePath;
        $array['like_count']    = $page->pageDetail()->where('like',1)->count();
        $array['unlike_count']  = $page->pageDetail()->where('dislike',1)->count();
        $array['follow_count']  = $page->pageDetail()->where('is_following',1)->count();

        return $array;
    }
}