@extends('Layout.admin')
@section('content')
<div class="page-inner">
    <div class="page-header">
        {{-- <h3 class="fw-bold mb-3">DataTables.Net</h3>
        <ul class="breadcrumbs mb-3">
            <li class="nav-home">
                <a href="#">
                    <i class="icon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Tables</a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Datatables</a>
            </li>
        </ul> --}}
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/tambahposisi" class="btn btn-info">
                        <i class="fas fa-plus-circle"></i> Tambah Posisi
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Posisi</th>
                                    <th>Kualifikasi</th>
                                </tr>
                            </thead>
                            @foreach ($posisi as $si)
                                <tbody>
                                    <tr>
                                        <td>{{ $si->posisi }}</td>
                                        <td>{{ $si->kualifikasi }}</td>
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
