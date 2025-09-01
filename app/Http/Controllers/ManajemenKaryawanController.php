<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenKaryawanController extends Controller
{
    public function index(){
        return view('manageEmploye.employee.index');
    }
    public function create(){
        return view('manageEmploye.employee.create');
    }
}
