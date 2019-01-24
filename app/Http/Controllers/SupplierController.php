<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\SupplierModel;
class SupplierController extends Controller
{
    function index()
    {
        $Data = SupplierModel::get(['Supplier_id','Supplier_name','Supplier_address']);
        return view('Home',compact('Supplier'));
    }
    function create(Request $request)
    {
       return view('Supplier.Create'); 
    }
    function store(Request $request)
    {
       $Iname = $request->input("txt_name");
       $Iaddress = $request->input("txt_addres");
       SupplierModel::create ([ 
        'Supplier_name' => $Iname,
        'Supplier_address' => $Iaddress
       ]);
       return redirect ('\Supplier');
    }
    public function show($id)
    {
        $Data = SupplierModel::where('Supplier_id',$id)->get();

        return view('Supplier.Index',compact('Data'));
    }

    public function edit($id)
    {
        $Data = SupplierModel::where('Supplier_id',$id)->get();

        return view('Supplier.Edit',compact('Data'));
    }

    public function update(Request $request, $id)
    {
        $Iname = $request->input("txt_name");
        $Iaddress = $request->input("txt_address");
        SupplierModel::where('Supplier_id',$id)->update([ 

            'Supplier_name' => $Iname,
            'Supplier_address' => $Iaddress
           ]);

           return redirect ('\Supplier');   
    }
    public function destroy($id)
    {
        SupplierModel::where('Supplier_id',$id)->delete();
        return redirect ('\Supplier')->with('alert-success','Data berhasi dihapus!');
    }
}
