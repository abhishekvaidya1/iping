<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programing extends Model
{
    protected $primaryKey = "id";
    public $table = "tbl_program";
    
    protected $fillable = [
        'questions','flag'
    ];
}
