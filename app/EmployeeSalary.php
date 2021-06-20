<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeSalary extends Model
{
    protected $fillable = ['employee_name','designation','months','salary','tday','govholy','weekholy','absent','overtime','awday','wday','pdpot','transport_bill','allowance','total'];
}
