@extends('layouts.app')
@section('title') Data Karyawan @endsection
@section('content')
<div class="d-flex align-items-center justify-content-between mb-4">
    {{-- <h1 class="h3 mb-0 text-gray-800">Devision</h1> --}}
    <nav aria-label="breadcrumb my-0">
        <ol class="breadcrumb mt-0 py-2 bg-none">
          <li class="breadcrumb-item"><a href="#">Devision</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
    </nav>
    
    <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm py-2 px-3" data-toggle="modal" data-target="#modalAddPosition">
      <i class="fas fa-plus fa-sm text-white-50"></i> Add Devision 
    </button>
</div>

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
                  <th>No</th>
                  <th>Name</th>
                  <th>Supervisor</th>
                  <th>Late Penalty</th>
                  <th>Number of Employee</th>
                  <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                  <td>1</td>
                  <td>Shift</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
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


  <!-- Modal -->
  <div class="modal fade" id="modalAddPosition" tabindex="-1" role="dialog" aria-labelledby="modalAddPosition" aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalAddPosition">Add Position</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-3 col-form-label">Name</label>
              <div class="col-sm-9">
                <input type="input" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-3 col-form-label">Parent</label>
              <div class="col-sm-9">
                <input type="input" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-3 col-form-label">Attendance Target</label>
              <div class="col-sm-9">
                <input type="input" class="form-control">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection