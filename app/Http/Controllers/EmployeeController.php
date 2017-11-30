<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
    	$employees = Employee::all();
    	return view("employees", compact('employees'));
    }

    public function show(Employee $employee){
    	dd($post->toArray());
    }
}
