<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamLimit extends Model
{
    protected $fillable = ['lrn', 'exam_count'];
}
