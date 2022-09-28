<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $fillable = [
        'employee_name',
        'employee_addrs',
        'employee_phone',
        'employee_email',
        'employee_salay'
    ];
}
