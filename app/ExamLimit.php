<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamLimit extends Model
{
    protected $fillable = ['user_id', 'exam_count'];
}
