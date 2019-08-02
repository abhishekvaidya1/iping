<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $primaryKey = "id";
    public $table = "tbl_questions";
    
    protected $fillable = [
        'question','option1','option2','option3','option4','answer','flag','problem_fig','answer_fig','created_at','updated_at','marks'
    ];
}
