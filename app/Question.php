<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['letter_code', 'statement', 'statement_type', 'question_no'];
}
