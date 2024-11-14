@extends('Layout.admin')
@section('content')
<div class="page-inner">
    <div class="page-header">
        <h3 class="fw-bold mb-3">Data Website</h3>
    </div>
    <form action="{{ route('createposisi') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Posisi</label>
            <input type="text" name="posisi" class="form-control">
            @error('posisi')
            <div class="text-danger mt-2">{{ $message }}</div>
        @enderror
        </div>
        <div class="form-group">
            <label>Kualifikasi</label>
            <textarea name="kualifikasi" class="form-control" style="min-height: 100px;"></textarea>
            @error('kualifikasi')
            <div class="text-danger mt-2">{{ $message }}</div>
        @enderror
        </div>
        <button type="submit" class="btn btn-success">Tambah Lowongan</button>
    </form>
</div>
@endsection


