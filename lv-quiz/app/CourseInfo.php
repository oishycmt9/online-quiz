<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseInfo extends Model
{
    protected $fillable = ['name','user_id','status','description'];
}
