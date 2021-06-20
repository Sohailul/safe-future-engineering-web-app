<?php

namespace App\Http\Controllers;

use App\Employee;
use PDF;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function Index(){
        return view('auth.login');
    }
    public function __construct()
    {
        $this->middleware('auth'); 
    }
    public function addEmployeeInfo(){
        return view('front-end.employee.add-employee');
    }
    public function saveEmployeeInfo(Request $request){
        $employee =new Employee();

        $employee->join_date = $request->join_date;
        $employee->employee_name = $request->employee_name;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->position = $request->position;
        $employee->salary = $request->salary;
        $employee->dob = $request->dob;
        $employee->nid = $request->nid;
        $employee->save();

        return redirect('/employee/add')->with('message', 'Employee Info Saved Successfully');

    }
    public function manageEmployeeInfo(){
        $employees = Employee::all();
        return view('front-end.employee.manage-employee', ['employees'=>$employees]);
    }
    public function editEmployeeInfo($id){
        $employee = Employee::find($id);

        return view('front-end.employee.edit-employee', ['employee'=>$employee]);
    }
    public function updateEmployeeInfo(Request $request){
        $employee = Employee::find($request->employee_id);

        $employee->join_date = $request->join_date;
        $employee->employee_name = $request->employee_name;
        $employee->phone = $request->phone;
        $employee->address = $request->address;
        $employee->position = $request->position;
        $employee->salary = $request->salary;
        $employee->dob = $request->dob;
        $employee->nid = $request->nid;
        $employee->save();

        return redirect('/employee/manage')->with('message', 'Employee Info Updated Successfully');
    }

    public function deleteEmployeeInfo($id){
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('/employee/manage')->with('message', 'Employee Info Deleted');
    }
    public function pdfEmployeeInfo($id){
        $employee = Employee::find($id);
        $pdf = PDF::loadView('front-end.employee.pdf-employee',['employee'=>$employee]);
        return $pdf->stream('employee_info.pdf');
    }
}
