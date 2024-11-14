@extends('Layout.admin')
@section('content')
<div class="page-inner">
    <div class="page-header">
        <h3 class="fw-bold mb-3">Edit Lowongan</h3>
    </div>
    <form action="{{ route('Admin.updateLowongan', $loker->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Gambar Loker</label>
            <input type="file" name="gambar" class="form-control">
            @if($loker->gambar)
            <img src="{{ asset($loker->gambar) }}" alt="Current Image" width="150">
            @endif
        </div>
        <div class="form-group">
            <label>Kualifikasi</label>
            <textarea name="kualifikasi" class="form-control" style="min-height: 100px">{{ $loker->kualifikasi }}</textarea>
        </div>
        <div class="form-group">
            <label>Penempatan</label>
            <input type="text" name="penempatan" class="form-control" value="{{ $loker->penempatan }}">
        </div>
        <div class="form-group">
            <label>Tanggal Berakhir</label>
            <input type="date" name="tanggal_berakhir" class="form-control" value="{{ $loker->tanggal_berakhir }}">
        </div>
        {{-- <div class="form-group">
            <label>Posisi</label>
            <select name="posisi" class="form-control">
                <option value="Produksi" {{ $loker->posisi == 'Produksi' ? 'selected' : '' }}>Produksi</option>
                <option value="Driver" {{ $loker->posisi == 'Driver' ? 'selected' : '' }}>Driver</option>
                <option value="Staff" {{ $loker->posisi == 'Staff' ? 'selected' : '' }}>Staff</option>
                <option value="Admin" {{ $loker->posisi == 'Admin' ? 'selected' : '' }}>Admin</option>
                <option value="HRD" {{ $loker->posisi == 'HRD' ? 'selected' : '' }}>HRD</option>
            </select>
        </div> --}}

        <button type="submit" class="btn btn-success">Update Lowongan</button>
    </form>

</div>
@endsection
