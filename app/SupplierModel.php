<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class SupplierModel extends Model
{
    public $table = "supplier";
    public $timestamps = false;
    protected $fillable = [
    'Supplier_id',
    'Supplier_name',
    'Supplier_address'
    ];

}
