<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class TestController extends Controller
{
    public function home(){
        $count = Employee::count();
        return "Total Employees: " . $count;

    }
}
