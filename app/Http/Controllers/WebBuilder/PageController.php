<?php

namespace App\Http\Controllers\WebBuilder;

use App\Http\Controllers\Controller;
use App\Models\Page;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::where('status', 1)
                     ->orderBy('created_at', 'desc')
                     ->paginate(12);

        return view('theme::page_index', compact('pages'));
    }

    public function show($id)
    {
        $page = Page::where('id', $id)->where('status', 1)->firstOrFail();

        return view('theme::page', compact('page'));
    }
}
