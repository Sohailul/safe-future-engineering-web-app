<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['join_date','employee_name','phone','address','position','salary','dob','nid'];
}
