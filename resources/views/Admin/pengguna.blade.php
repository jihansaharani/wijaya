@extends('Layout.admin')
@section('content')
<div class="page-inner">
    <div class="page-header">
      <h3 class="fw-bold mb-3">Data Pengguna</h3>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            {{-- <h4 class="card-title"></h4> --}}
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                id="basic-datatables"
                class="display table table-striped table-hover"
              >
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                  </tr>
                </thead>
                @foreach ($pengguna as $data )
                <tbody>
                    <tr>
                      <td>{{$data->name}}</td>
                      <td>{{$data->email}}</td>
                      <td>{{$data->role}}</td>
                    </tr>
                  </tbody>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
