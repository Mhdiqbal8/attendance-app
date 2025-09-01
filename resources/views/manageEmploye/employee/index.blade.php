@extends('layouts.app')
@section('title') Data Karyawan @endsection
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Employee</h1>
    <a href="{{route('employee.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm py-2 px-3">
      <i class="fas fa-plus fa-sm text-white-50"></i> Add Employee </a>
</div>

{{-- <div class="card">
  <div class="card-header py-3"></div>
  <div class="card-body">
    <form action="">
      
    </form>
  </div>
</div> --}}


<div class="card mb-4">
  <div class="card-body">
      <div class="d-flex justify-content-end mb-3">
          {{-- <h5 class="mb-0">Employee List</h5> --}}
          <div>
              <button class="btn btn-sm btn-outline-secondary">Filter</button>
              <select class="custom-select custom-select-sm" style="width:auto; display:inline-block;">
                  <option selected>September 2020</option>
                  <option>October 2020</option>
                  <option>November 2020</option>
              </select>
          </div>
      </div>

      <div class="table-responsive">
          <table class="table table-hover align-middle">
              {{-- <thead class="thead-light"> --}}
              <thead class="thead-light">
              <tr>
                  <th>Name</th>
                  <th>Identity</th>
                  <th>Status</th>
                  <th>Role</th>
                  <th>Employee ID</th>
                  <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                  <td>
                      <div class="name-cell">
                          <img src="https://i.pravatar.cc/35?img=1" alt="avatar" class="avatar">
                          Darlene Robertson
                      </div>
                  </td>
                  <td>February 11, 2014</td>
                  <td><span class="badge badge-success">Active</span></td>
                  <td>Lead Product Manager</td>
                  <td>36600033441</td>
                  <td>
                    {{-- Look Data --}}
                    <a href="#" class="btn btn-sm btn-info">
                      <i class="fas fa-eye"></i>
                    </a>
                    {{-- Edit Data --}}
                    <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit Data">
                      <i class="fas fa-pencil-alt"></i>
                    </a>
                    {{-- Delete Data --}}
                    <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                      <i class="fas fa-trash"></i>
                    </a>

                  </td>
              </tr>
              <tr>
                  <td>
                      <div class="name-cell">
                          <img src="https://i.pravatar.cc/35?img=2" alt="avatar" class="avatar">
                          Marvin McKinney
                      </div>
                  </td>
                  <td>November 7, 2017</td>
                  <td><span class="badge badge-success">Active</span></td>
                  <td>Lead Data Engineer</td>
                  <td>36600033443</td>
                  <td>
                     {{-- Look Data --}}
                     <a href="#" class="btn btn-sm btn-info">
                      <i class="fas fa-eye"></i>
                    </a>
                    {{-- Edit Data --}}
                    <a href="#" class="btn btn-sm btn-warning" data-toggle="tooltip" title="Edit Data">
                      <i class="fas fa-pencil-alt"></i>
                    </a>
                    {{-- Delete Data --}}
                    <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
              </tr>
              </tbody>
          </table>
      </div>
  </div>
</div>

@endsection