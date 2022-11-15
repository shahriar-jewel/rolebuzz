<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventHighlightController extends Controller
{
    public function eventHighlight(Request $request){
    	return view('frontend.pages.eventhighlight');
    }
    public function eventDetails(Request $request){
    	return view('frontend.pages.eventdetails');
    }
}
