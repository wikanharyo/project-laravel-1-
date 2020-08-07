<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // protected $table = 'custom_table_name'; //to customize table name unlike laravel'sway
    protected $fillable = ['nama', 'niu', 'email', 'jurusan']; //mass assignment
}
