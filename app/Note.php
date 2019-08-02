<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $primaryKey = "id";
    public $table = "tbl_note";
    
    protected $fillable = [
        'note'
    ];
}
