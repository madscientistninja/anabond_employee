<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
use App\Employee;
use App\EmployeeFactor;
use App\PerformanceFactor;

class EmployeeFactorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_employee_performance($employee_id)
    {
      $employee_factors = EmployeeFactor::where('employee_id', $employee_id)->get();
      $factors = PerformanceFactor:: all();

      return view('performance-factor/index', ['employee_factors' => $employee_factors, 'factors' => $factors]);
    }

}