<?php

namespace App\Http\Controllers;

use App\ContestInformation;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
       return view('front-end.home.home');
    }
    public function about(){
       return view('front-end.about.about');
    }
    public function contact(){
       return view('front-end.contact.contact');
    }

}
