@extends('layouts.app')
@section('title') Data Karyawan @endsection
@section('content')

{{-- <div class="card"> --}}
  <form action="{{route('employee.store')}}" method="post">
    @csrf
    <div class="row justify-content-md-center mb-5">
        <div class="col-md-10">
            <h1 class="h3 mb-0 text-gray-800">Personal Imformation</h1>
            {{-- <form class="mt-3"> --}}
                <div class="row mb-4 mt-4">
                  <div class="col">
                    <label for="" class="form-label">First name</label>
                    <input type="text" class="form-control" name="first_name">
                  </div>
                  <div class="col">
                    <label for="">Last name</label>
                    <input type="text" class="form-control" name="last_name">
                  </div>
                </div>
                <div class="row mb-4 mt-4">
                    <div class="col">
                      <label for="">Gender</label>
                      <select class="form-control" name="gender">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </div>
                    <div class="col">
                      <label for="">Province</label>
                      <input type="text" class="form-control" name="province">
                    </div>
                </div>
                <div class="row mb-4 mt-4">
                    <div class="col">
                      <label for="">City</label>
                      <input type="text" class="form-control" name="city">
                    </div>
                    <div class="col">
                      <label for="">Address</label>
                      <input type="text" class="form-control" name="address">
                    </div>
                </div>
            {{-- </form> --}}
            {{-- Employee Affair --}}
            <h1 class="h3 mb-0 text-gray-800">Employee Affair</h1>
            {{-- <form class="mt-3"> --}}
                <div class="row mb-4 mt-4">
                  <div class="col">
                    <label for="">Employee ID</label>
                    <input type="text" class="form-control" name="employee_id">
                  </div>
                  <div class="col">
                    <label for="">Position</label>
                    <input type="text" class="form-control" name="position">
                  </div>
                </div>
                <div class="row mb-4 mt-4">
                    <div class="col">
                      <label for="">Divison</label>
                      <input type="text" class="form-control" name="devision">
                    </div>
                    <div class="col">
                      <label for="">Employee Status</label>
                      <input type="text" class="form-control" name="employee_status">
                    </div>
                </div>
            {{-- </form> --}}
            {{-- Mobile Application Login Account --}}
            <h1 class="h3 mb-0 text-gray-800">Mobile Application Login Account</h1>
            {{-- <form class="mt-3"> --}}
                <div class="row mb-4 mt-4">
                  <div class="col">
                    <label for="" class="text-muted">Email</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                  <div class="col">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password">
                  </div>
                </div>
                <div class="row mb-4 mt-4">
                    <div class="col-6">
                      <label for="">Confirm Password</label>
                      <input type="password" class="form-control" name="confirm_password">
                    </div>
                </div>

                {{-- <div class="col-6"> --}}
                  <button type="submit" class="btn btn-primary">Save</button>
                {{-- </div> --}}
            {{-- </form> --}}
        </div>
    </div>
  <form action="">

@endsection