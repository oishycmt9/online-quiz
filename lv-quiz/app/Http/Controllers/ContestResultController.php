<?php

namespace App\Http\Controllers;

use App\User;
use App\UserInformation;
use App\ContestQuestion;
use App\ContestInformation;
use App\ContestResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class ContestResultController extends Controller
{
    public function result()
    {
        return view('back-end.contest-question.result');
    }
//    public function create()
//    {
//        return view('back-end.contest-question.result');
//    }

    public function submitMCQ(Request $request)
    {
        //return $request;


        $ques = ContestQuestion::all();
        $i=1;
        $mark = 0;
        $wrong_ans = 0;
        $unAttempts = 0;
        foreach ($ques as $q)
        {
            $qu = 'ques'.$i;
            $an = 'ans'.$i;
//            return [
//                'ques'.$i=>$request->$qu,
//                'ans'.$i=>$request->$an,
//                'qid'=>$q->id,
//                'qans'=>$q->answer
//            ];

            if($q->id==$request->$qu && $q->answer==$request->$an)
            {
                $mark++;
            }
            else if($request->$an==null && $request->contest_id==$q->contest_id)
            {
                $unAttempts++;
            }
            else{
                if($request->contest_id==$q->contest_id)
                {
                    $wrong_ans++;
                }
            }
            $i++;
        }

/*        return [
            'mark'=>$mark,
            'unAttempts'=>$unAttempts,
            'wrong_ans'=>$wrong_ans
        ];*/
//        $qu = 'ques'.$i;
//        $an = 'ans'.$i;

        $contestResult = new ContestResult();
        $contestResult->user_id = Auth::user()->id;
        $contestResult->contest_id = $request->contest_id;
        $contestResult->no_of_question = $mark+$wrong_ans+$unAttempts;
        $contestResult->attempt_questions = $mark+$wrong_ans;
        $contestResult->mark_deduction = $wrong_ans+$unAttempts;
        $contestResult->score = 23;
        $contestResult->correct_answer = $mark;
        $contestResult->wrong_answer = $wrong_ans;
        $contestResult->unattempt_questions = $unAttempts;
        $contestResult->save();
        return redirect('contest-result/result')->with('message','Exam Completed Successfully!');
//        return redirect()->back()->with('message','Exam Completed Successfully!');
    }
    public function showResult()
    {
        /*$contest_results = DB:: table('contest_results')
            ->join('users','contest_results.user_id','=','users.id')
            ->join('contest_Information','contest_results.contest_id','=','contest_information.id')
            ->select('contest_results.*','contest_information.name as contest','users.name as examinee')
//            ->orderBy('contest_results.*','contest_results.correct_answer',"desc")
            ->get();*/
        $contest_results = ContestResult::orderBy('correct_answer','desc')
            ->join('users','contest_results.user_id','=','users.id')
            ->join('contest_Information','contest_results.contest_id','=','contest_information.id')
            ->select('contest_results.*','contest_information.name as contest','users.name as examinee')
            ->get();
        return view('back-end.contest-result.show',['contest_results'=>$contest_results]);
    }

}
