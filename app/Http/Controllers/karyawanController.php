<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index() {
        return view('employee.management_user.index');
    }

    public function create() {
        return view('employee.management_user.add');
    }
}
