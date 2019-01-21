<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{

    function index()
    {
        $Customer = Customer::get(['customer_id','name','addres']);
        return view('Customer.Index',compact('Customer'));
    }
    function create(Request $request)
    {
       return view('Customer.Create'); 
    }
    function store(Request $request)
    {
       // echo 'Sudah diinput';
       $Iname = $request->input("txt_name");
       $Iaddres = $request->input("txt_addres");

       Customer::create ([ 

        'name' => $Iname,
        'addres' => $Iaddres
       ]);

       return redirect ('\Customer');

    }
    public function show($id)
    {
        $Customer = Customer::where('Customer_id',$id)->get();

        return view('Customer.Index',compact('Customer'));
    }

    public function edit($id)
    {
        $Customer = Customer::where('Customer_id',$id)->get();

        return view('Customer.Edit',compact('Customer'));
    }

    public function update(Request $request, $id)
    {
        $Iname = $request->input("txt_name");
        $Iaddres = $request->input("txt_addres");
        Customer::where('Customer_id',$id)->update([ 

            'name' => $Iname,
            'addres' => $Iaddres
           ]);

           return redirect ('\Customer');   
    }
    public function destroy($id)
    {
        Customer::where('Customer_id',$id)->delete();
        return redirect ('\Customer')->with('alert-success','Data berhasi dihapus!');
    }
}
