<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $primaryKey = "id";
    public $table = "tbl_answer";
    
    protected $fillable = [
        'stud_id','stud_ans','score','time','end_time','date'
    ];
}
