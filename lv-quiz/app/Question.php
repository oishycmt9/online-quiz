<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question',
        'option_1',
        'option_2',
        'option_3',
        'option_4',
        'author_id',
        'answer',
        'mark',
        'time',
        'status',
        'course_id',
        'question_type'
    ];
}
