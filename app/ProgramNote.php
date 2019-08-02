<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramNote extends Model
{
    protected $primaryKey = "id";
    public $table = "tbl_program_note";
    
    protected $fillable = [
        'note'
    ];
}
