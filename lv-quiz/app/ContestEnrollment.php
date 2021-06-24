<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContestEnrollment extends Model
{
    protected $fillable =[
        'user_id',
        'contest_id',
        'date',
        'paid',
        'approved',
        'approved_by'

    ];

}
