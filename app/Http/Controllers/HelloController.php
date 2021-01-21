<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HelloController extends Controller
{
    public function contact()
    {
    	return view('pages.contact');
    }

    public function about()
    {
    	return view('pages.about');
    }



}
