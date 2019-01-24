<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";
    public $timestamps = false;
    protected $fillable = [
    'Customer_id',
    'Customer_name',
    'Customer_address'
    ];

}
