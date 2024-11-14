@extends('Layout.admin')
@section('content')
<div class="page-inner">
    <div class="page-header">
        <h3 class="fw-bold mb-3">Data Website</h3>
    </div>
    <form action="{{ route('createlowongan') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Gambar Loker</label>
            <input type="file" name="gambar" class="form-control">
            @error('gambar')
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


        <div class="form-group">
            <label>Penempatan</label>
            <input type="text" name="penempatan" class="form-control">
            @error('penempatan')
            <div class="text-danger mt-2">{{ $message }}</div>
        @enderror
        </div>
        <div class="form-group">
            <label>Tanggal Berakhir</label>
            <input type="date" name="tanggal_berakhir" class="form-control">
            @error('tanggal')
            <div class="text-danger mt-2">{{ $message }}</div>
        @enderror
        </div>
        {{-- <div class="form-group">
            <label>Posisi</label>
            <select name="posisi" class="form-control">
                <option value="" disabled>Pilih Posisi</option>
                <option value="Produksi">Produksi</option>
                <option value="Driver">Driver</option>
                <option value="Staff">Staff</option>
                <option value="Admin">Admin</option>
                <option value="HRD">HRD</option>
            </select>
        </div> --}}

        <button type="submit" class="btn btn-success">Tambah Lowongan</button>
    </form>
</div>
@endsection
