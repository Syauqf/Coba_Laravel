<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";
    public $timestamps = false;
    protected $fillable = [
    'customer_id',
    'name',
    'addres'
    ];

}
