<?php

namespace App\Http\Controllers;

use App\CourseInfo;
use Illuminate\Http\Request;

class CourseInfoController extends Controller
{
    public function create()
    {
        return view('back-end.course.create');
    }
    public function store(Request $request)
    {
        CourseInfo::create($request->all());
        return back()->with('message','Course Created Successfully.');
    }
    public function show()
    {
        $courses = CourseInfo::all();
        return view('back-end.course.show',['courses'=>$courses]);
    }

    public function delete($id)
    {
        $course = CourseInfo::find($id);
        $course->delete();
        return back()->with('message','Course Deleted Successfully!');
    }
    public function edit($id)
    {
        $course = CourseInfo::find($id);
        return view('back-end.course.edit',['course'=>$course]);
    }
    public function update(Request $request)
    {
        $course = CourseInfo::find($request->id);
        $course->name = $request->name;
        $course->description = $request->description;
        $course->user_id = $request->user_id;
        $course->status = $request->status;
        $course->update();
        return redirect('/course/show')->with('message','Course updated successfully!');
    }
    public function details($id)
    {
        $course = CourseInfo::find($id);
        return view('back-end.course.details',['course'=>$course]);
    }
}
