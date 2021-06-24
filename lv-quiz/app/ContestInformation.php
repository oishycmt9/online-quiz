<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContestInformation extends Model
{
    protected $fillable =[
        'author_id',
        'name',
        'description',
        'course_id',
        'no_of_question',
        'time',
        'started_date',
        'started_time',
        'contest_type',
        'negative_marking',
        'last_reg_date',
        'status'
    ];
}
