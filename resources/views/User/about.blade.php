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
                <li><a href="/about" class="active">Tentang kami</a></li>
                <li><a href="/loker">Lowongan Kerja</a></li>
                <li><a href="/kontak">Kontak</a></li>
                <li><a href="/profileuser">Profile</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

@endsection
@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image:  url('{{ asset('webwijaya/assets/img/slider/mid_back.jpg') }}');">


    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Tentang Kami</h2>
        <ol>
            <li><a href="index.html">Beranda</a></li>
            <li>Tentang Kami</li>
        </ol>

    </div>
</div>

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    <div class="col-lg-7 about-img" style="background-image: url('{{ asset('webwijaya/assets/img/wijaya/logoo.png') }}');"></div>

                    <div class="col-lg-7">
                        <h2>Berikut adalah Informasi tentang Kami</h2>
                        <div class="our-story">
                            <h4>Est 1979</h4>
                            <h3>Sejarah kami</h3>
                            <p>Kami adalah pabrik triplek yang berdiri sejak tahun 1979, berkomitmen untuk menyediakan
                                produk berkualitas tinggi untuk kebutuhan konstruksi dan furnitur. Dengan pengalaman
                                lebih dari tiga dekade, kami telah menjadi pemimpin di industri ini dengan teknologi
                                mutakhir dan proses produksi yang efisien.</p>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> <span>Produksi triplek berkualitas dengan bahan
                                        baku terpilih</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>Standar kualitas yang tinggi dan pengujian
                                        produk yang ketat</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>Pelayanan pelanggan yang responsif dan
                                        profesional</span></li>
                            </ul>
                            <p>Kami percaya bahwa kualitas adalah kunci untuk membangun kepercayaan dengan pelanggan.
                                Setiap lembar triplek yang kami produksi melewati berbagai tahap pemeriksaan untuk
                                memastikan produk yang sampai ke tangan Anda adalah yang terbaik.</p>

                            <div class="watch-video d-flex align-items-center position-relative">
                                <i class="bi bi-play-circle"></i>
                                <a href="https://youtu.be/XH49yHwBKSg?si=6LaLlF1bA6S4dk_5"
                                    class="glightbox stretched-link">Tonton Video Kami</a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Stats Counter Section ======= -->

        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg" style="background-image: url('{{ asset('webwijaya/assets/img/content/mesin.png') }}');"
                        data-aos="zoom-in" data-aos-delay="100"></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>Berikut Cara Pembuatan Triplek di Perusahaan Kami</h3>
                        <p>Kami menggunakan proses produksi yang cermat untuk memastikan setiap lembar triplek memenuhi
                            standar kualitas tertinggi. Dari pemilihan bahan baku hingga pengemasan, setiap langkah
                            diperhatikan dengan detail.</p>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-easel flex-shrink-0"></i>
                            <div>
                                <h4><a href="#" class="stretched-link">Pemilihan Bahan Baku</a></h4>
                                <p>Kami hanya menggunakan kayu berkualitas tinggi yang diperoleh dari sumber yang
                                    bertanggung jawab, untuk menjamin ketahanan dan kualitas produk kami.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-patch-check flex-shrink-0"></i>
                            <div>
                                <h4><a href="#" class="stretched-link">Proses Pengolahan</a></h4>
                                <p>Setelah bahan baku dipilih, kami menjalani proses pengolahan yang meliputi
                                    pemotongan, pengeringan, dan pengikatan untuk membentuk lembaran triplek.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="#" class="stretched-link">Pemeriksaan Kualitas</a></h4>
                                <p>Setiap lembar triplek menjalani pemeriksaan kualitas yang ketat untuk memastikan
                                    tidak ada cacat, sehingga hanya produk terbaik yang dikirim ke pelanggan.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-box-seam flex-shrink-0"></i>
                            <div>
                                <h4><a href="#" class="stretched-link">Pengemasan dan Pengiriman</a></h4>
                                <p>Setelah melewati semua tahap, produk kami dikemas dengan hati-hati dan siap untuk
                                    dikirim kepada pelanggan, memastikan sampai dalam kondisi sempurna.</p>
                            </div>
                        </div><!-- End Icon Box -->
                    </div>

                </div>

            </div>
        </section><!-- End Alt Services Section -->

        <!-- ======= Alt Services Section 2 ======= -->
        <section id="alt-services-2" class="alt-services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>Layanan Kami dalam Produksi Triplek</h3>
                        <p>Kami menyediakan berbagai layanan berkualitas dalam produksi triplek untuk memenuhi kebutuhan
                            pelanggan. Dengan pengalaman bertahun-tahun, kami menjamin hasil terbaik dan kepuasan
                            pelanggan.</p>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-easel flex-shrink-0"></i>
                            <div>
                                <h4><a href="#" class="stretched-link">Produksi Triplek Kustom</a></h4>
                                <p>Kami menawarkan produksi triplek sesuai dengan spesifikasi yang diinginkan, mulai
                                    dari ukuran hingga ketebalan.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-patch-check flex-shrink-0"></i>
                            <div>
                                <h4><a href="#" class="stretched-link">Pengujian Kualitas</a></h4>
                                <p>Setiap produk triplek kami melewati serangkaian pengujian ketat untuk memastikan
                                    kualitas dan ketahanannya.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="#" class="stretched-link">Pengiriman Tepat Waktu</a></h4>
                                <p>Kami menjamin pengiriman produk tepat waktu untuk memenuhi jadwal proyek Anda.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="#" class="stretched-link">Dukungan Pelanggan</a></h4>
                                <p>Tim kami siap membantu Anda dengan pertanyaan dan dukungan terkait produk kami.</p>
                            </div>
                        </div><!-- End Icon Box -->
                    </div>

                    <div class="col-lg-6 img-bg"  style="background-image: url('{{ asset('webwijaya/assets/img/content/bb.png') }}');"
                        data-aos="zoom-in" data-aos-delay="100"></div>
                </div>

            </div>
        </section><!-- End Alt Services Section 2 -->
@endsection
