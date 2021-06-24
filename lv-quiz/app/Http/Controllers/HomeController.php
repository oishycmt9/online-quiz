<?php

namespace App\Http\Controllers;

use App\ContestInformation;
use App\Question;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $number_of_question = Question::count();
        $number_of_contest = ContestInformation::count();
        return view('home',[
            'number_of_question'=>$number_of_question,
            'number_of_contest'=>$number_of_contest
        ]);
    }
}
