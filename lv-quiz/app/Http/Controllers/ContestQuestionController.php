<?php

namespace App\Http\Controllers;

use App\ContestInformation;
use App\ContestQuestion;
use App\CourseInfo;
use App\Question;
use Illuminate\Http\Request;

class ContestQuestionController extends Controller
{
    public function create(){
        $contests = ContestInformation::all();
        return view('back-end.contest-question.create',['contests'=>$contests]);
    }

    public function store(Request $request)
    {
        $contest = ContestInformation::find($request->contest_id);
        $course_id = $contest->course_id;
        $no_of_question = $contest->no_of_question;
        $questions = Question::where('course_id',$course_id)->get();
        $noOfQuestion = count($questions);
        if($noOfQuestion<$no_of_question)
        {
            return redirect('contest-question/create')->with('message','Can not create question, Not enough question!!!');
        }
        else{
            foreach ($questions as $q)
            {
                $contestQuestion = new ContestQuestion();
                $contestQuestion->contest_id = $request->contest_id;
                $contestQuestion->question_id = $q->id;
                $contestQuestion->question = $q->question;
                $contestQuestion->option1 = $q->option_1;
                $contestQuestion->option2 = $q->option_2;
                $contestQuestion->option3 = $q->option_3;
                $contestQuestion->option4 = $q->option_4;
                $contestQuestion->answer = $q->answer;
                $contestQuestion->save();
            }
            return redirect('contest-question/create')->with('message','Question Created Successfully!');
        }
    }


    public function show ($id)
    {
        $contest_ques = ContestQuestion::findorfail($id);

        if($contest_ques->contest_id!=$id )
        {
            return redirect('contest-result/result')->with('message','Question is not exist');
        }else{
            $contest_questions = ContestQuestion::where('contest_id','=',$id )->get();
            return view('back-end.contest-question.show',['contest_questions'=>$contest_questions]);
        }

    }




//    public function submitMCQ(Request $request)
//    {
//        //return $request;
//        $ques = ContestQuestion::all();
//        $i=1;
//        $mark = 0;
//        $wrong_ans = 0;
//        $unAttempts = 0;
//        foreach ($ques as $q)
//        {
//            $qu = 'ques'.$i;
//            $an = 'ans'.$i;
////            return [
////                'ques'.$i=>$request->$qu,
////                'ans'.$i=>$request->$an,
////                'qid'=>$q->id,
////                'qans'=>$q->answer
////            ];
//
//            if($q->id==$request->$qu && $q->answer==$request->$an)
//            {
//                $mark++;
//            }
//            else if($request->$an==null)
//            {
//                $unAttempts++;
//            }
//            else{
//                $wrong_ans++;
//            }
//            $i++;
//        }
//        return [
//            'mark'=>$mark,
//            'unAttempts'=>$unAttempts,
//            'wrong_ans'=>$wrong_ans
//        ];
//
//    }
}
