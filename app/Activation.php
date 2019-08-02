<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activation extends Model
{
    protected $primaryKey = "id";
    public $table = "tbl_activate_test";
    
    protected $fillable = [
        'apti_test','program_test'
    ];
}
