@extends('layouts.app')
@section('title') Data Karyawan @endsection
@section('content')

{{-- <div class="card"> --}}
    <div class="row justify-content-md-center mb-5">
        <div class="col-md-10">
            <h1 class="h3 mb-0 text-gray-800">Personal Imformation</h1>
            <form class="mt-3">
                <div class="row mb-4 mt-4">
                  <div class="col">
                    <label for="" class="form-label">First name</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col">
                    <label for="">Last name</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-4 mt-4">
                    <div class="col">
                      <label for="">Gender</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col">
                      <label for="">Province</label>
                      <input type="text" class="form-control">
                    </div>
                </div>
                <div class="row mb-4 mt-4">
                    <div class="col">
                      <label for="">City</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col">
                      <label for="">Address</label>
                      <input type="text" class="form-control">
                    </div>
                </div>
            </form>
            {{-- Employee Affair --}}
            <h1 class="h3 mb-0 text-gray-800">Employee Affair</h1>
            <form class="mt-3">
                <div class="row mb-4 mt-4">
                  <div class="col">
                    <label for="">Employee ID</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col">
                    <label for="">Position</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-4 mt-4">
                    <div class="col">
                      <label for="">Divison</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col">
                      <label for="">Employee Status</label>
                      <input type="text" class="form-control">
                    </div>
                </div>
            </form>
            {{-- Mobile Application Login Account --}}
            <h1 class="h3 mb-0 text-gray-800">Mobile Application Login Account</h1>
            <form class="mt-3">
                <div class="row mb-4 mt-4">
                  <div class="col">
                    <label for="" class="text-muted">Email</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col">
                    <label for="">Password</label>
                    <input type="text" class="form-control" >
                  </div>
                </div>
                <div class="row mb-4 mt-4">
                    <div class="col-6">
                      <label for="">Confirm Password</label>
                      <input type="text" class="form-control">
                    </div>
                </div>

                {{-- <div class="col-6"> --}}
                  <button class="btn btn-primary">Save</button>
                {{-- </div> --}}
            </form>
        </div>
    </div>
@endsection