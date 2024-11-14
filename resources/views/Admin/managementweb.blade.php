@extends('Layout.admin')
@section('content')
<div class="page-inner">
    <div class="page-header">
        <h3 class="fw-bold mb-3">Data Website</h3>
    </div>
@foreach ($website as $site)
    <form action="{{ route('updateweb')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Ubah Isi Website</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="namaperusahaan">Nama Perusahaan</label>
                                    <input type="text" name="namaperusahaan" class="form-control" id="namaperusahaan"
                                        placeholder="Masukkan nama perusahaan" value="{{ old('namaperusahaan', $site->namaperusahaan) }}" />
                                </div>

                                <div class="form-group">
                                    <label for="logo">Logo</label>
                                    <input type="file" name="logo" class="form-control" id="logo" />
                                    @if($site->logo)
                                    <img src="{{ asset($site->logo) }}" alt="Current Image" width="150">
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="banner">Banner</label>
                                    <input type="file" name="banner" class="form-control" id="banner" />
                                    @if($site->banner)
                                    <img src="{{ asset($site->banner) }}" alt="Current Image" width="150">
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="foto">Ubah gambar proyek konstruksi</label>
                                    <input type="file" name="foto" class="form-control" id="foto" />
                                    @if($site->foto)
                                    <img src="{{ asset($site->foto) }}" alt="Current Image" width="150">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi Perusahaan</label>
                                    <textarea name="deskripsi" class="form-control" id="deskripsi"
                                        placeholder="Masukkan Deskripsi Perusahaan">{{ old('deskripsi', $site->deskripsi) }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Masukkan email perusahaan" value="{{ old('email', $site->email) }}" />
                                </div>
                                <div class="form-group">
                                    <label for="social-media">Social Media</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3">Instagram</span>
                                        <input type="text" name="instagram" class="form-control" id="instagram"
                                            value="{{ old('instagram', $site->instagram) }}" />
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3">Facebook</span>
                                        <input type="text" name="facebook" class="form-control" id="facebook"
                                            value="{{ old('facebook', $site->facebook) }}" />
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3">Website</span>
                                        <input type="text" name="website" class="form-control" id="website"
                                            value="{{ old('website', $site->website) }}" />
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3">X</span>
                                        <input type="text" name="x" class="form-control" id="x"
                                            value="{{ old('x', $site->x) }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button type="submit" class="btn btn-success">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endforeach
</div>
@endsection
