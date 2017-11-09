<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Combination extends Model
{
    protected $fillable = ['combination', 'interpretation', 'careers', 'career_count'];
}
