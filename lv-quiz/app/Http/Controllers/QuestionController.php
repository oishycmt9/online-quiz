<?php

namespace App\Http\Controllers;

use App\CourseInfo;
use App\Question;
use Illuminate\Http\Request;
use DB;

class QuestionController extends Controller
{
    public function create()
    {
        $courses = CourseInfo::where('status',1)->get();
        return view('back-end.question.create',['courses'=>$courses]);
    }
    public function store(Request $request)
    {
        $result = Question::create($request->all());
        if($result)
            return back()->with('message','Question Created Successfully.');
        else
            return back()->with('message','Question Created Failed.');
    }
    public function show()
    {
        //$questions = Question::all();
        $questions = DB::table('questions')
            ->join('users', 'questions.author_id','=','users.id')
            ->join('course_infos','questions.course_id','=','course_infos.id')
            ->select('questions.*','users.name as author','course_infos.name as course')
            ->get();
        return view('back-end.question.show',['questions'=>$questions]);
    }
    public function delete($id)
    {
        $question = Question::find($id);
        $question->delete();
        return back()->with('message','Question Deleted Successfully!');
    }
    public function edit($id)
    {
        $question = Question::find($id);
        $courses = CourseInfo::where('status',1)->get();
        return view('back-end.question.edit',['question'=>$question,'courses'=>$courses]);
    }

    public function update(Request $request)
    {
        $question = Question::find($request->id);
        $question->question = $request->question;
        $question->option_1 = $request->option_1;
        $question->option_2 = $request->option_2;
        $question->option_3 = $request->option_3;
        $question->option_4 = $request->option_4;
        $question->answer = $request->answer;
        $question->course_id = $request->course_id;
        $question->mark = $request->mark;
        $question->time = $request->time;
        $question->status = $request->status;
        $question->author_id = $request->author_id;
        $question->question_type = $request->question_type;
        $question->update();
        return redirect('/question/show')->with('message','Question updated successfully!');
    }
    public function details($id)
    {
        //$question = Question::find($id);
        $ques = DB::table('questions')
            ->join('users', 'questions.author_id','=','users.id')
            ->join('course_infos','questions.course_id','=','course_infos.id')
            ->select('questions.*','users.name as author','course_infos.name as course')
            ->where('questions.id','=',$id)
            ->get();
        return view('back-end.question.details',['ques'=>$ques]);
    }
}
