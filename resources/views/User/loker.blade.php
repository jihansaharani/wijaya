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
        <h2>Lowongan Kerja</h2>
        <ol>
            <li><a href="index.html">Beranda</a></li>
            <li>Lowongan Kerja</li>
        </ol>
    </div>
</div>
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 posts-list">

            @foreach ($lowongan as $loker)
            <div class="col-xl-4 col-md-6">
                <div class="post-item position-relative h-100">
                    <div class="post-img position-relative overflow-hidden">
                        <img src="{{ asset($loker->gambar) }}" class="img-fluid" alt="Gambar Lowongan Kerja" style="max-width: 100%; height: auto;">

                        <span class="post-date">{{ \Carbon\Carbon::parse($loker->tanggal_berakhir)->format('d-M-y') }}</span>

                    </div>
                    <div class="post-content d-flex flex-column">
                        <h3 class="post-title">Lowongan Kerja: {{$loker->posisi}}</h3>

                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-geo-alt"></i> <span class="ps-2">{{$loker->penempatan}}</span>
                            </div>
                            <span class="px-3 text-black-50">/</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-briefcase"></i> <span class="ps-2">Full-time</span>
                            </div>
                        </div>

                        <p>
                            {{$loker->kualifikasi}}
                        </p>

                        <hr>

                        <a href="{{ route('detailloker.show', ['id' => $loker->id]) }}" class="readmore stretched-link">
                            <span>Lihat Detail</span><i class="bi bi-arrow-right"></i>
                        </a>

                    </div>
                </div>
            </div>
        @endforeach

            <div class="blog-pagination">
                <ul class="justify-content-center">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </div><!-- End blog pagination -->
        </div>
</section><!-- End Blog Section -->
@endsection
