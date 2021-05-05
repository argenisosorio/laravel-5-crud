<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "articles";
    protected $fillable = ['first_name','last_name','identification_number'];
}