<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    // protected $table = 'custom_table_name'; //to customize table name unlike laravel'sway
    protected $fillable = ['nama', 'niu', 'email', 'jurusan']; //mass assignment
}
