<?php

namespace App\Http\Controllers;

// use App\Models\ManageDevision;
use Illuminate\Http\Request;

class ManageDevision extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('manageEmploye.devision.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ManageDevision  $manageDevision
     * @return \Illuminate\Http\Response
     */
    public function show(ManageDevision $manageDevision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManageDevision  $manageDevision
     * @return \Illuminate\Http\Response
     */
    public function edit(ManageDevision $manageDevision)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ManageDevision  $manageDevision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManageDevision $manageDevision)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManageDevision  $manageDevision
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManageDevision $manageDevision)
    {
        //
    }
}
