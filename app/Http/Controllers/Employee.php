<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\EmployeeModel;
class Employee extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manageEmploye.employee.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manageEmploye.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'first_name'       => 'required|string|max:255',
            'last_name'        => 'required|string|max:255',
            'gender'           => 'required|in:Laki-laki,Perempuan',
            'province'         => 'required|string|max:255',
            'city'             => 'required|string|max:255',
            'address'          => 'required|string',
            'employee_id'      => 'required|string|max:50|unique:employee,employee_id',
            'position'         => 'required|string|max:255',
            'devision'         => 'required|string|max:255',
            'employee_status'  => 'required|string|max:255',
            'email'            => 'required|email|unique:employee,email',
            'password'         => 'required|string|min:6',
        ]);

       // Simpan ke database
        Employee::create([
            'first_name'       => $request->first_name,
            'last_name'        => $request->last_name,
            'gender'           => $request->gender,
            'province'         => $request->province,
            'city'             => $request->city,
            'address'          => $request->address,
            'employee_id'      => $request->employee_id,
            'position'         => $request->position,
            'devision'         => $request->devision,
            'employee_status'  => $request->employee_status,
            'email'            => $request->email,
            'password'         => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Data employee berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
