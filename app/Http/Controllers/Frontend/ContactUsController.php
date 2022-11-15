<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    public function contactUs(Request $request){
    	return view('frontend.pages.contactus');
    }
}
