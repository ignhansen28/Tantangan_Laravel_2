<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Company;

class EmployeeController extends Controller
{
    public function create(){
        $companies = Company::all();
        return view('create-employee', compact('companies'));
    }

    public function store(Request $request){
        Employee::create([
            'company_id'=>$request->employee_company,
            'name'=>$request->employee_name,
            'age'=>$request->employee_age
        ]);
        return back();
    }

    public function index(){
        $employees = Employee::all();
        return view('welcome', compact('employees'));
    }

    public function edit($id){
        $employee = Employee::findOrFail($id);
        return view('edit-employee', ['employee'=>$employee]);
    }

    public function update(Request $request, $id){
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());
        return redirect('/');
    }

    public function delete($id){
        $employee = Employee::findOrFail($id);
        $employee->delete($employee);
        return redirect('/');
    }
}
