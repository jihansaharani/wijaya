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

<div class="breadcrumbs d-flex align-items-center"
style="background-image:  url('{{ asset('webwijaya/assets/img/slider/mid_back.jpg') }}');">


    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Kebijakan dan Privasi</h2>
        <ol>
            <li><a href="index.html">Beranda</a></li>
            <li>Kebijakan dan Privasi</li>
        </ol>

    </div>
</div>
<div class="container">
    <section id="about" class="about">
        <h2>Kebijakan Privasi</h2>

        <ol>
            <li><strong>Pengumpulan Informasi</strong><br>
                Kami menghormati privasi Anda dan berkomitmen untuk melindungi data pribadi Anda. Informasi yang kami kumpulkan melalui website ini hanya digunakan untuk tujuan peningkatan layanan dan memenuhi kebutuhan pengguna.
            </li>

            <li><strong>Jenis Informasi yang Dikumpulkan</strong><br>
                Kami mungkin mengumpulkan informasi identitas (seperti nama, alamat email, atau nomor telepon) yang Anda berikan saat menghubungi kami, mengisi formulir, atau berlangganan newsletter. Kami juga dapat mengumpulkan data non-pribadi, seperti alamat IP dan data demografi, untuk analisis statistik.
            </li>

            <li><strong>Penggunaan Informasi</strong><br>
                Data yang dikumpulkan digunakan untuk:
                <ul>
                    <li>Menanggapi permintaan atau pertanyaan Anda.</li>
                    <li>Menyediakan informasi terbaru tentang produk, layanan, atau perubahan di perusahaan.</li>
                    <li>Meningkatkan layanan dan pengalaman pengguna di website.</li>
                </ul>
            </li>

            <li><strong>Perlindungan Informasi</strong><br>
                Kami melindungi informasi Anda dengan mengambil langkah-langkah keamanan yang tepat. Meskipun begitu, kami tidak dapat menjamin keamanan sepenuhnya karena adanya risiko yang tidak dapat dihindari terkait internet.
            </li>

            <li><strong>Pembagian Informasi dengan Pihak Ketiga</strong><br>
                Kami tidak akan menjual, menukar, atau memindahkan data pribadi Anda ke pihak ketiga tanpa izin Anda, kecuali jika diwajibkan oleh hukum.
            </li>

            <li><strong>Perubahan Kebijakan</strong><br>
                Kami dapat memperbarui kebijakan privasi ini dari waktu ke waktu. Perubahan akan dipublikasikan di halaman ini, dan Anda dianjurkan untuk meninjau kebijakan secara berkala.
            </li>
        </ol>
    </section>
    <section id="about" class="about">
        <h2>Kebijakan Penggunaan Website</h2>

        <ol>
            <li><strong>Kepemilikan Konten</strong><br>
                Semua konten yang tersedia di website ini, termasuk teks, gambar, dan logo, adalah milik perusahaan dan dilindungi oleh undang-undang hak cipta. Dilarang mengunduh, menyalin, atau menyebarkan tanpa izin tertulis dari perusahaan.
            </li>

            <li><strong>Keterbatasan Tanggung Jawab</strong><br>
                Kami berupaya menyajikan informasi yang akurat, namun tidak bertanggung jawab atas kerugian akibat penggunaan informasi dari website ini. Pengguna bertanggung jawab sepenuhnya atas risiko saat mengakses website.
            </li>

            <li><strong>Penggunaan Tautan Eksternal</strong><br>
                Website kami mungkin menyediakan tautan ke situs pihak ketiga untuk kemudahan pengguna. Kami tidak bertanggung jawab atas konten atau kebijakan privasi di situs tersebut.
            </li>

            <li><strong>Perubahan Kebijakan Penggunaan</strong><br>
                Kami berhak mengubah kebijakan penggunaan kapan saja. Setiap perubahan akan dipublikasikan di halaman ini, dan pengguna dianggap menyetujui kebijakan baru jika terus menggunakan website.
            </li>
        </ol>
    </section>
</div>
<div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
    <a href="/register" class="btn btn-warning text-center">Kembali</a>
</div>

@endsection
