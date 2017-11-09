<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'lrn',
        'e_percentage',
        'i_percentage',
        's_percentage',
        'n_percentage',
        't_percentage',
        'f_percentage',
        'p_percentage',
        'j_percentage',
        'interpretation'
    ];
}
