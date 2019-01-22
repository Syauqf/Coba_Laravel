<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Employee;
class EmployeeController extends Controller
{
    function index()
    {
        $Employee = Employee::get(['employee_id','employee_name','employee_address','employee_phone_number']);
        return view('Employee.Index',compact('Employee'));
    }
    function create(Request $request)
    {
       return view('Employee.Create'); 
    }
    function store(Request $request)
    {
       $Iname = $request->input("txt_name");
       $Iaddress = $request->input("txt_address");
       $Iphone = $request->input("txt_phone");
       Employee::create ([ 
        'employee_name' => $Iname,
        'employee_address' => $Iaddress,
        'employee_phone_number' => $Iphone
       ]);
       return redirect ('\Employee');
    }
    public function show($id)
    {
        $Employee = Employee::where('employee_id',$id)->get();

        return view('Employee.Index',compact('Employee'));
    }

    public function edit($id)
    {
        $Employee = Employee::where('employee_id',$id)->get();

        return view('Employee.Edit',compact('Employee'));
    }

    public function update(Request $request, $id)
    {
        $Iname = $request->input("txt_name");
        $Iaddress = $request->input("txt_address");
        $Iphone = $request->input("txt_phone");
        Employee::where('employee_id',$id)->update([ 

            'employee_name' => $Iname,
            'employee_address' => $Iaddress,
            'employee_phone_number' => $Iphone
           ]);

           return redirect ('\Employee');   
    }
    public function destroy($id)
    {
        Employee::where('employee_id',$id)->delete();
        return redirect ('\Employee')->with('alert-success','Data berhasi dihapus!');
    }
}
