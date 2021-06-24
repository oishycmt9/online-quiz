<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContestResult extends Model
{
    protected $fillable = [
        'user_id',
        'contest_id',
        'no_of_question',
        'score',
        'attempt_questions',
        'unattempt_questions',
        'correct_answer',
        'wrong_answer',
        'mark_deduction'

    ];
}
