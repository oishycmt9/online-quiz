<?php

namespace App\Http\Controllers;

use App\ContestEnrollment;
use App\ContestInformation;
use App\CourseInfo;
use App\Question;
use Illuminate\Http\Request;
use DB;

class ContestInformationController extends Controller
{
    public function index(){
        $contests = ContestInformation::all();
        $enrollList = ContestEnrollment::all();
        return view('back-end.contest-enroll.index', [
            'contests'=>$contests,
            'enrollList'=>$enrollList
        ]);
    }
    public function create(){
        $courses = CourseInfo::where('status',1)->get();
        return view('back-end.contest-info.create',['courses'=>$courses]);
    }

    public function store(Request $request)
    {
        $result = ContestInformation::create($request->all());
        if ($result)
            return back()->with('message','Contest Created Successfully.');

        return back()->with('message','Contest Created Failed.');
    }
    public function show()
    {
//        $contest_information = ContestInformation::all();
        $contest_information = DB::table('contest_information')
            ->join('users', 'contest_information.author_id','=','users.id')

            ->select('contest_information.*','users.name as author')
            ->get();
        return view('back-end.contest-info.show',['contest_information'=>$contest_information]);
    }
    public function edit($id)
    {
        $contest_info = ContestInformation::find($id);
        return view('back-end.contest-info.edit',['contest_info'=>$contest_info]);
    }
    public function update(Request $request)
    {
        $contest_info = ContestInformation::find($request->id);
        $contest_info->name = $request->name;
        $contest_info->description = $request->description;
        $contest_info->no_of_question = $request->no_of_question;
        $contest_info->time = $request->time;
        $contest_info->started_date = $request->started_date;
        $contest_info->started_time = $request->started_time;
        $contest_info->contest_type = $request->contest_type;
        $contest_info->negative_marking = $request->negative_marking;
        $contest_info->contest_fee = $request->contest_fee;
        $contest_info->last_reg_date = $request->last_reg_date;
        $contest_info->author_id = $request->author_id;
        $contest_info->status = $request->status;
        $contest_info->update();
        return redirect('/contest-info/show')->with('message','Contest updated successfully!');
    }
    public function details($id)
    {
        $contest_info = ContestInformation::find($id);
        return view('back-end.contest-info.details',['contest_info'=>$contest_info]);
    }
    public function getDetails($id)
    {
        $contest_info = ContestInformation::find($id);
        return view('back-end.contest-enroll.get-details',['contest_info'=>$contest_info]);
    }
    public function delete($id)
    {
        $contest_info = ContestInformation::find($id);
        $contest_info->delete();
        return back()->with('message','Contest Deleted Successfully!');
    }
}
