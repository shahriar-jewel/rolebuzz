<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LearningCenterController extends Controller
{
    public function learningCenter(Request $request){
    	return view('frontend.pages.learningcenter');
    }
}
