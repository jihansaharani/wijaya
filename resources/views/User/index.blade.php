<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PT WIJAYA PLYWOOD INDONESIA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('webwijaya/assets/img/wijaya/logoo.png') }}" rel="icon">
    <link href="{{ asset('webwijaya/assets/img/wijaya/logoo.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('webwijaya/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('webwijaya/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('webwijaya/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('webwijaya/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('webwijaya/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('webwijaya/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('webwijaya/assets/css/main.css') }}" rel="stylesheet">


    <!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
    .features .tab-content img {
    width: 100%;   /* Menyesuaikan lebar gambar dengan lebar kontainer */
    height: auto;  /* Menjaga rasio aspek gambar */
    max-height: 300px; /* Menentukan tinggi maksimal gambar */
    object-fit: cover; /* Memastikan gambar tidak terdistorsi */
}

</style>
<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>PT WIJAYA PLYWOOD INDONESIA<span>.</span></h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            @auth
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/"  class="active">Beranda</a></li>
                    <li><a href="/about">Tentang kami</a></li>
                    <li><a href="/loker">Lowongan Kerja</a></li>
                    <li><a href="/kontak">Kontak</a></li>
                    <li><a href="/profileuser" >Profile</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </nav><!-- .navbar -->
                @else
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="/"  class="active">Beranda</a></li>
                        <li><a href="/about">Tentang kami</a></li>
                        <li><a href="/loker">Lowongan Kerja</a></li>
                        <li><a href="/kontak">Kontak</a></li>
                        <li><a href="/profileuser" >Profile</a></li>
                        <li><a href="/login">Login</a></li>
                    </ul>
                </nav><!-- .navbar -->
            @endauth


        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down">Selamat datang di <br> PT WIJAYA PLYWOOD INDONESIA</br></h2>
                        <p data-aos="fade-up">PT WIJAYA PLYWOOD INDONESIA adalah sebuah perusahaan yang bergerak dalam bidang manufacture pabrik produksi triplek terbaik..
                            Lebih menekankan ke pembuatan kayu lapis dengan berbagai macam ukuran untuk keperluan pembangunan dan proyek lainnya.
                            Dengan komitmen terhadap inovasi dan keunggulan, kami berusaha memberikan produk yang
                            memenuhi standar tertinggi.
                           </p>
                           @auth
                           <a href="/logout" class="btn-get-started" data-aos="fade-up" data-aos-delay="200">Logout</a>
                           
                               @else
                               <a href="/login" class="btn-get-started" data-aos="fade-up" data-aos-delay="200">Login</a>
                           @endauth
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active"
                style="background-image: url('{{ asset('webwijaya/assets/img/wijaya/wijaya-1.jpg') }}')">
            </div>
            <div class="carousel-item"
                style="background-image: url('{{ asset('webwijaya/assets/img/wijaya/wijaya-2.jfif') }}')"></div>
            <div class="carousel-item"
                style="background-image: url('{{ asset('webwijaya/assets/img/wijaya/wijaya-1.jpg') }}')"></div>
            <div class="carousel-item"
                style="background-image: url('{{ asset('webwijaya/assets/img/wijaya/wijaya-2.jfif') }}')"></div>
            <div class="carousel-item"
                style="background-image: url('{{ asset('webwijaya/assets/img/wijaya/wijaya-1.jpg') }}')"></div>


            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Constructions Section ======= -->
        <section id="constructions" class="constructions">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Produk kami</h2>
                    <p>Kami menyediakan triplek berkualitas tinggi untuk berbagai aplikasi dalam industri konstruksi. Produk kami dirancang untuk memenuhi kebutuhan spesifik setiap proyek.</p>
                </div>

                <div class="row gy-4">

                    <!-- Triplek Sengon -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card-bg" style="background-image: url('{{ asset('webwijaya/assets/img/sengon.jpg') }}');"></div>
                                </div>
                                <div class="col-xl-5 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title"><strong>Triplek Sengon</strong></h4>
                                        <p>Triplek dari kayu sengon, sering digunakan untuk bangunan dan furniture karena kekuatan dan daya tahannya yang baik.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                    <!-- Triplek Semi -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card-bg" style="background-image: url('{{ asset('webwijaya/assets/img/semi.jpg') }}');"></div>
                                </div>
                                <div class="col-xl-5 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title"><strong>Triplek Semi</strong></h4>
                                        <p>Triplek semi meranti dengan lapisan dalam kayu sengon dan lapisan luar kayu meranti, cocok untuk berbagai kebutuhan konstruksi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                    <!-- Triplek Full Meranti -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url('{{ asset('webwijaya/assets/img/full meranti.jpg') }}');"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title"><strong>Triplek Full Meranti</strong></h4>
                                        <p>Triplek meranti tanpa campuran kayu lain, kuat dan tahan lama, ideal untuk furniture dan bahan bangunan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                    <!-- Triplek Melamin -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url('{{ asset('webwijaya/assets/img/melamin.jpg') }}');"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title"><strong>Triplek Melamin</strong></h4>
                                        <p>Triplek meranti dengan lapisan melamin, tahan lama, mudah perawatan, dan tahan terhadap kelembapan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                </div><!-- End Row -->
            </div><!-- End Container -->
        </section><!-- End Constructions Section -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Layanan Kami</h2>
                    <p>Kami menyediakan berbagai layanan berkualitas dalam produksi triplek untuk memenuhi kebutuhan
                        Anda. Dari desain kustom hingga pengiriman cepat, kami berkomitmen untuk memberikan solusi
                        terbaik.</p>
                </div>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-layer-group"></i>
                            </div>
                            <h3>Produksi Triplek Kustom</h3>
                            <p>Kami menawarkan layanan produksi triplek yang dapat disesuaikan dengan ukuran dan
                                ketebalan yang Anda butuhkan, memastikan produk yang tepat untuk proyek Anda.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-tools"></i>
                            </div>
                            <h3>Pengolahan dan Finishing</h3>
                            <p>Triplek kami dapat diproses lebih lanjut untuk mendapatkan finishing yang sesuai, baik
                                itu pelapisan, penghalusan, atau desain khusus.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-truck-moving"></i>
                            </div>
                            <h3>Pengiriman Tepat Waktu</h3>
                            <p>Kami memastikan semua pesanan dikirim tepat waktu ke lokasi yang Anda inginkan, mendukung
                                kelancaran proyek Anda.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-headset"></i>
                            </div>
                            <h3>Dukungan Pelanggan</h3>
                            <p>Tim kami selalu siap memberikan bantuan dan konsultasi untuk memenuhi kebutuhan spesifik
                                Anda terkait produk dan layanan kami.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-check-circle"></i>
                            </div>
                            <h3>Kontrol Kualitas</h3>
                            <p>Kami melakukan pengujian kualitas yang ketat pada setiap batch triplek untuk memastikan
                                bahwa produk yang Anda terima memenuhi standar tertinggi.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-recycle"></i>
                            </div>
                            <h3>Solusi Ramah Lingkungan</h3>
                            <p>Kami berkomitmen untuk menggunakan bahan baku yang berkelanjutan dan ramah lingkungan
                                dalam semua produk triplek kami.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Services Section -->


        <!-- ======= Alt Services Section ======= -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg"
                        style="background-image:  url('{{ asset('webwijaya/assets/img/profile.jpg') }}');"data-aos="zoom-in"
                        data-aos-delay="100"></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>Keunggulan Layanan Kami dalam Produksi Triplek</h3>
                        <p>Kami menawarkan berbagai layanan untuk memenuhi kebutuhan produksi triplek Anda. Dengan
                            pengalaman lebih dari 30 tahun, kami berkomitmen untuk menyediakan produk berkualitas tinggi
                            dan layanan yang dapat diandalkan.</p>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-easel flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Produksi Berkualitas Tinggi</a></h4>
                                <p>Kami menggunakan bahan baku terbaik dan teknologi modern untuk memastikan setiap
                                    lembar triplek memenuhi standar kualitas yang tinggi.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-patch-check flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Desain Kustom</a></h4>
                                <p>Kami menyediakan layanan desain kustom untuk memenuhi spesifikasi proyek Anda, baik
                                    untuk konstruksi, furnitur, maupun aplikasi lainnya.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Sustainable Practices</a></h4>
                                <p>Kami berkomitmen untuk praktik produksi yang ramah lingkungan, menggunakan bahan baku
                                    yang berkelanjutan dan proses yang minim dampak.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Pengiriman Tepat Waktu</a></h4>
                                <p>Tim kami berusaha untuk memastikan pengiriman tepat waktu sehingga Anda dapat
                                    merencanakan proyek dengan lancar tanpa kendala.</p>
                            </div>
                        </div><!-- End Icon Box -->

                    </div>
                </div>

            </div>
        </section><!-- End Alt Services Section -->


        <!-- ======= Features Section ======= -->
        <section id="features" class="features section-bg">
            <div class="container" data-aos="fade-up">

                <ul class="nav nav-tabs row g-2 d-flex">

                    <li class="nav-item col-3">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <h4>Kualitas Terbaik</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <h4>Desain Kustom</h4>
                        </a><!-- End tab nav item -->
                    </li>

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <h4>Ramah Lingkungan</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <h4>Pengiriman Cepat</h4>
                        </a>
                    </li><!-- End tab nav item -->

                </ul>

                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                                data-aos="fade-up" data-aos-delay="100">
                                <h3>Kualitas Terbaik</h3>
                                <p class="fst-italic">
                                    Kami menggunakan bahan baku pilihan dan proses produksi yang ketat untuk memastikan
                                    setiap
                                    lembar triplek memiliki standar kualitas tinggi.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Material tahan lama dan kuat untuk berbagai
                                        aplikasi.</li>
                                    <li><i class="bi bi-check2-all"></i> Uji kualitas yang dilakukan secara rutin.</li>
                                    <li><i class="bi bi-check2-all"></i> Sertifikasi produk yang memenuhi standar
                                        industri.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up"
                                data-aos-delay="200">
                                <img src="{{ asset('webwijaya/assets/img/content/bb.png') }}" alt="Kualitas Terbaik" class="img-fluid" style="width: 100%; max-height: 300px; object-fit: cover;">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Desain Kustom</h3>
                                <p class="fst-italic">
                                    Kami memahami bahwa setiap proyek memiliki kebutuhan unik, oleh karena itu kami
                                    menawarkan
                                    layanan desain kustom untuk memenuhi spesifikasi Anda.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Fleksibilitas dalam ukuran dan ketebalan.</li>
                                    <li><i class="bi bi-check2-all"></i> Pilihan finishing yang beragam untuk estetika
                                        yang
                                        menarik.</li>
                                    <li><i class="bi bi-check2-all"></i> Kemudahan dalam penyesuaian produk sesuai
                                        kebutuhan
                                        klien.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('webwijaya/assets/img/wijaya/wijaya8.jpg') }}" alt="Desain Kustom"
                                    class="img-fluid">

                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Ramah Lingkungan</h3>
                                <p class="fst-italic">
                                    Kami berkomitmen untuk menjaga lingkungan dengan menggunakan proses produksi yang
                                    ramah
                                    lingkungan dan bahan baku yang berkelanjutan.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Menggunakan kayu dari sumber yang terkelola
                                        dengan baik.</li>
                                    <li><i class="bi bi-check2-all"></i> Proses produksi yang meminimalisir limbah.
                                    </li>
                                    <li><i class="bi bi-check2-all"></i> Produk yang dapat didaur ulang dan ramah
                                        lingkungan.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('webwijaya/assets/img/content/product.jpg') }}"
                                    alt="Ramah Lingkungan" class="img-fluid">

                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Pengiriman Cepat</h3>
                                <p class="fst-italic">
                                    Kami memahami pentingnya waktu dalam setiap proyek. Tim kami berkomitmen untuk
                                    memastikan
                                    pengiriman yang cepat dan tepat waktu.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Proses pemesanan yang efisien untuk
                                        mempercepat waktu
                                        tunggu.</li>
                                    <li><i class="bi bi-check2-all"></i> Jaminan pengiriman tepat waktu sesuai jadwal.
                                    </li>
                                    <li><i class="bi bi-check2-all"></i> Dukungan pelanggan yang siap membantu
                                        sepanjang
                                        proses.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('webwijaya/assets/img/wijaya/wijaya9.jfif') }}"
                                    alt="Pengiriman Cepat" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                </div>

            </div>
        </section>

        <!-- End Features Section -->

        <!-- ======= Our Projects Section ======= -->
        {{-- <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Projects</h2>
          <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto
            accusamus fugit aut qui distinctio</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
          data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-remodeling">Remodeling</li>
            <li data-filter=".filter-construction">Construction</li>
            <li data-filter=".filter-repairs">Repairs</li>
            <li data-filter=".filter-design">Design</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/remodeling-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Remodeling 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/remodeling-1.jpg" title="Remodeling 1"
                    data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/construction-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Construction 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/construction-1.jpg" title="Construction 1"
                    data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/repairs-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Repairs 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/repairs-1.jpg" title="Repairs 1" data-gallery="portfolio-gallery-repairs"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/design-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Design 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/design-1.jpg" title="Repairs 1" data-gallery="portfolio-gallery-book"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/remodeling-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Remodeling 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/remodeling-2.jpg" title="Remodeling 2"
                    data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/construction-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Construction 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/construction-2.jpg" title="Construction 2"
                    data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/repairs-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Repairs 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/repairs-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/design-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Design 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/design-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-book"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/remodeling-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Remodeling 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/remodeling-3.jpg" title="Remodeling 3"
                    data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/construction-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Construction 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/construction-3.jpg" title="Construction 3"
                    data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/repairs-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Repairs 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/repairs-3.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/design-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Design 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/design-3.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section --> --}}

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Testimoni Pelanggan</h2>
                    <p>Berikut adalah testimoni dari Pelanggan kami</p>
                </div>

                <div class="slides-2 swiper">
                    <div class="swiper-wrapper">
                        @foreach ($testimoni as $testi )
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="{{ asset('webwijaya/assets/imgtestimonials/testimonials-1.jpg') }}"
                                        class="testimonial-img" alt="">
                                    <h3>{{$testi->name}}</h3>
                                    <h4>Pelajar</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        {{$testi->pesan}}
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        @endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Recent Blog Posts Section ======= -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="footer-content position-relative">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>PT WIJAYA PLYWOOD INDONESIA</h3>
                            <p>
                                Jalan Doktor Wahidin No.31 Krajan, RT.02/RW.01, Kalirejo, Kec. Lawang, Kabupaten Malang,
                                Jawa Timur 65215<br><br>
                                <strong>Telepon:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> wijaya@gmail.com<br>
                            </p>
                            <div class="social-links d-flex mt-3">
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-twitter"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div><!-- End footer info column-->

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Link</h4>
                        <ul>
                            <li><a href="/">Beranda</a></li>
                            <li><a href="/about">Tentang kami</a></li>
                            <li><a href="/loker"class="active">Lowongan Kerja</a></li>
                            <li><a href="/kontak">Kontak</a></li>
                            <li><a href="/profileuser">Profile</a></li>
                            <li><a href="/login">Login</a></li>
                        </ul>
                    </div><!-- End footer links column-->

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Kebijakan</h4>
                        <ul>
                            <li><a href="#">Kebijakan Privasi</a></li>
                            <li><a href="#">Syarat dan Ketentuan</a></li>
                        </ul>
                    </div><!-- End footer links column-->
                    <div class="col-lg-4 col-md-6">
                        <h4>Jam Operasional</h4>
                        <p>Senin - Sabtu: 08:00 - 17:00 <br>Minggu: Tutup</br></p>
                    </div><!-- End hours column-->



                </div>
            </div>
        </div>

        <div class="footer-legal text-center position-relative">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>PT Wijaya Plywood Indonesia</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a> -->
                </div>
            </div>
        </div>
    </footer>

    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('webwijaya/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('webwijaya/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('webwijaya/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('webwijaya/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('webwijaya/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('webwijaya/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('webwijaya/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('webwijaya/assets/js/main.js') }}"></script>


</body>

</html>
