<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $table = "employee";
    public $timestamps = false;
    protected $fillable = [
    'employee_id',
    'employee_name',
    'employee_address',
    'employee_phone_number'
    ];

}
