<?php

namespace App\Http\Controllers\Api\Angular;

use App\Http\Resources\API\Widget as WidgetResource;
use App\Http\Controllers\Controller;
use App\Models\Widget;
use App\Models\Church;

class WidgetsController extends Controller
{
    public function showWigets($slug,$uid)
    {
        $church = Church::where('slug','=',$slug)->first();

        $widget = Widget::where('church_id',$church->id)->where('slug', $uid)->get();
        
        $widget = WidgetResource::collection($widget);

        return $widget;
    }
}