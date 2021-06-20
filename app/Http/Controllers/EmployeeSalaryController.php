<?php

namespace App\Http\Controllers;

use App\Employee;
use App\EmployeeSalary;
use PDF;
use Illuminate\Http\Request;
use DataTables;

class EmployeeSalaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index(){
        return view('front-end.empsalary.add-salary');
    }
    public function saveEmployeeSalary(Request $request){
        $empsalary = new EmployeeSalary();

        $empsalary->employee_name = $request->employee_name;
        $empsalary->designation = $request->designation;
        $empsalary->months = $request->months;
        $empsalary->salary = $request->salary;
        $empsalary->tday = $request->tday;
        $empsalary->govholy = $request->govholy;
        $empsalary->weekholy = $request->weekholy;
        $empsalary->absent = $request->absent;
        $empsalary->overtime = $request->overtime;
        $empsalary->awday = $request->awday;
        $empsalary->wday = $request->wday;
        $empsalary->pdpot = $request->pdpot;
        $empsalary->transport_bill = $request->transport_bill;
        $empsalary->allowance = $request->allowance;
        $empsalary->total = $request->total;
        $empsalary->save();

        return redirect('salary/add')->with('message','Employee Salary Saved Successfully');
    }
    public function manageEmployeeSalary(){
        $employee_salaries = EmployeeSalary::paginate(4);
        return view('front-end.empsalary.manage-salary',['employee_salaries'=>$employee_salaries]);
    }

    public function editEmployeeSalary($id){
        $empsalary = EmployeeSalary::find($id);
        return view('front-end.empsalary.edit-salary',['empsalary'=>$empsalary]);
    }

    public function updateEmployeeSalary(Request $request){
        $empsalary = EmployeeSalary::find($request->empsalary_id);

        $empsalary->employee_name = $request->employee_name;
        $empsalary->designation = $request->designation;
        $empsalary->months = $request->months;
        $empsalary->salary = $request->salary;
        $empsalary->tday = $request->tday;
        $empsalary->govholy = $request->govholy;
        $empsalary->weekholy = $request->weekholy;
        $empsalary->absent = $request->absent;
        $empsalary->overtime = $request->overtime;
        $empsalary->awday = $request->awday;
        $empsalary->wday = $request->wday;
        $empsalary->pdpot = $request->pdpot;
        $empsalary->transport_bill = $request->transport_bill;
        $empsalary->allowance = $request->allowance;
        $empsalary->total = $request->total;
        $empsalary->save();
        return redirect('/salary/manage')->with('message','Employee Salary Updated');

    }

    public function deleteEmployeeSalary($id){
        $empsalary = EmployeeSalary::find($id);
        $empsalary->delete();

        return redirect('/salary/manage')->with('message','Employee Salary Info Deleted');
    }

    public function pdfEmployeeSalary(){
        $employee_salaries = EmployeeSalary::all();
        $pdf = PDF::loadView('front-end.empsalary.pdf-salary',['employee_salaries'=>$employee_salaries]);
        return $pdf->stream('salary_sheet.pdf');
    }
    public function pdfgenEmployeeSalary($id){
        $empsalary = EmployeeSalary::find($id);
        $pdf = PDF::loadView('front-end.empsalary.pdfgen-salary',['empsalary'=>$empsalary]);
        return $pdf->stream('individual_salary_sheet.pdf');
    }
}
