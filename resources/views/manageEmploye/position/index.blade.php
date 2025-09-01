@extends('layouts.app')
@section('title') Data Karyawan @endsection
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Position</h1>
    
    <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm py-2 px-3" data-toggle="modal" data-target="#modalAddPosition">
      <i class="fas fa-plus fa-sm text-white-50"></i> Add Position </button>
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
                  <th>Position</th>
                  <th>Attendance Targets</th>
                  <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                  <td>1</td>
                  <td>Accounting Staff</td>
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
    <div class="modal-dialog modal-md " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalAddPosition">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Isi modal disini...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection