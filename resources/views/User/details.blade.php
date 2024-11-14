@extends('Layout.user')
@section('header')
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>PT WIJAYA PLYWOOD INDONESIA<span>.</span></h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="/about">Tentang kami</a></li>
                <li><a href="/loker" class="active">Lowongan Kerja</a></li>
                <li><a href="/kontak">Kontak</a></li>
                <li><a href="/profileuser">Profile</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

@endsection
@section('content')

<div class="breadcrumbs d-flex align-items-center"
style="background-image:  url('{{ asset('webwijaya/assets/img/slider/mid_back.jpg') }}');">


    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Detail Lowongan</h2>
        <ol>
            <li><a href="index.html">Beranda</a></li>
            <li>Detail Lowongan</li>
        </ol>

    </div>
</div>
<section id="loker-details" class="loker-details">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-5 ">

            <div class="col-lg-8">
                <article class="job-details">

                    <div class="post-img">
                        <img src="{{ asset($lowongan->gambar) }}" class="img-fluid" alt="Gambar Lowongan Kerja">
                    </div>

                    <h2 class="title">Lowongan Kerja: {{$lowongan->posisi}}</h2>

                    <div class="meta-top">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-building"></i> <a
                                    href="company-details.html">PT WIJAYA PLYWOOD INDONESIA</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-geo-alt"></i> <a
                                    href="#">{{$lowongan->penempatan}}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="2024-11-01">{{ \Carbon\Carbon::parse($lowongan->tanggal_berakhir)->format('d-M-Y') }}</time></li>

                        </ul>
                    </div><!-- End meta top -->

                    <div class="content">
                        <p>
                            Posisi ini bertanggung jawab atas pengelolaan data dan dokumen perusahaan, mendukung
                            operasional administrasi, serta berkoordinasi dengan berbagai departemen. PT WIJAYA PLYWOOD INDONESIA sedang membuka lowongan untuk posisi {{$lowongan->posisi}}.
                        </p>

                        <p>
                            {{$lowongan->kualifikasi}}
                        </p>
                    </div><!-- End job content -->

                </article><!-- End job post -->


                <div class="apply-form">
                    <h4>Ajukan Lamaran</h4>
                    <p>Lengkapi form berikut untuk melamar posisi ini. Semua kolom wajib diisi.</p>
                    <form action="{{ route('applyloker') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                            @error('email')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>

                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" id="nama_lengkap">
                            @error('name')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                        </div>

                        <div class="mb-3">
                            <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                            <input type="text" name="name_sekolah" class="form-control" id="asal_sekolah">
                            @error('name_sekolah')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="file_cv" class="form-label">Tambahkan CV Anda</label>
                            <input type="file" name="file_cv" class="form-control" id="file_cv" accept=".pdf,.doc,.docx">
                            @error('file_cv')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                        </div>

                        <button type="submit" class="btn btn-warning">Apply Lamaran </button>
                    </form>

                </div>

            </div>

            <div class="col-lg-4">
                <!-- Sidebar for related jobs, company info, or other content can be added here -->
            </div>

        </div>

    </div>
</section><!-- End Job Details Section -->
@endsection
