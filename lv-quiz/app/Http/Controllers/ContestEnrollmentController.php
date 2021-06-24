<?php

namespace App\Http\Controllers;

use App\ContestEnrollment;
use App\ContestInformation;
use App\ContestQuestion;
use Illuminate\Http\Request;

class ContestEnrollmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function enroll(Request $request)
    {
        $contest_enroll = new ContestEnrollment();
        $contest_enroll->user_id = $request->user_id;
        $contest_enroll->contest_id = $request->contest_id;
        $contest_enroll->date = date('Y-m-d');
        $contest_enroll->save();
        return redirect('contest')->with('message','You have successfully enrolled the contest!');
    }
    public function guestEnroll()
    {
        $contest_enrollments = ContestEnrollment::all();
        return view('back-end.contest-enroll.show',['contest_enrollments'=>$contest_enrollments]);
    }


    public function edit($id)
    {
        $contest_enroll = ContestEnrollment::find($id);
        return view('back-end.contest-enroll.edit',['contest_enroll'=>$contest_enroll]);
    }

    public function update(Request $request)
    {
        $contest_enroll = ContestEnrollment::find($request->id);
        $contest_enroll->approved = $request->approved;
        $contest_enroll->approved_by = $request->approved_by;
        $contest_enroll->update();
        return redirect('/contest-enroll')->with('message','Enrollment updated successfully!');
    }

    public function details($id)
    {
        $contest_enroll = ContestEnrollment::find($id);
        return view('back-end.contest-enroll.details',['contest_enroll'=>$contest_enroll]);
    }
    public function delete($id)
    {
     $contest_enroll = ContestEnrollment::find($id);
     $contest_enroll->delete();
     return back()->with('message','Enrollment Deleted Successfully!');
    }


}
