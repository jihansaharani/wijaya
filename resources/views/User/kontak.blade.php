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
                <li><a href="/about" >Tentang kami</a></li>
                <li><a href="/loker">Lowongan Kerja</a></li>
                <li><a href="/kontak" class="active">Kontak</a></li>
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

        <h2>Kontak</h2>
        <ol>
            <li><a href="index.html">Beranda</a></li>
            <li>Kontak</li>
        </ol>

    </div>
</div>
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
            <div class="col-lg-6">
                <div class="info-item  d-flex flex-column justify-content-center align-items-center text-center">
                    <i class="bi bi-map"></i>
                    <h3>Alamat Kami</h3>
                    <p>Jalan Doktor Wahidin No.31 Krajan, RT.02/RW.01, Kalirejo, Kec. Lawang, Kabupaten Malang,
                        Jawa Timur 65215</p>
                </div>
            </div><!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-envelope"></i>
                    <h3>Email</h3>
                    <p>wijaya@example.com</p>
                </div>
            </div><!-- End Info Item -->

            <div class="col-lg-3 col-md-6">
                <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-telephone"></i>
                    <h3>Telepon</h3>
                    <p>+1 5589 55488 55</p>
                </div>
            </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">

            <div class="col-lg-6 ">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15809.728746096684!2d112.6953429!3d-7.8497542!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62b6ab36cc457%3A0xcb18c7bd58a7576d!2sWijaya%20Plywoods%20Indonesia!5e0!3m2!1sid!2sid!4v1730708364291!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" frameborder="0"
                    style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div><!-- End Google Maps -->

            <div class="col-lg-6">
                <form action="{{ route('actionmasukan') }}" method="POST" role="form">
                    @csrf <!-- This line adds the CSRF token -->
                    <div class="row gy-4">
                        <div class="col-lg-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required>
                        </div>
                    </div>
                    <p>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subjek" id="subject" placeholder="Subjek" required>
                    </div>
                    <p>
                    <div class="form-group">
                        <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan" required></textarea>
                    </div>
                    <p>
                        <p>
                        <button type="submit" class="btn btn-primary text-center">Submit</button>
                    <p>
                </form>

            </div><!-- End Contact Form -->

        </div>

    </div>
</section><!-- End Contact Section -->
@endsection
