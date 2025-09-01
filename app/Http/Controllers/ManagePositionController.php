<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagePositionController extends Controller
{
    public function index(){
        return view('manageEmploye.position.index');
    }
    public function create(){
        return view('manageEmploye.position.create');
    }
}
