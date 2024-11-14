@extends('Layout.user')
<style>
    /* Center the section and control the width */
    #about {
        display: flex;
        justify-content: center;
        padding: 50px 0;
        background-color: #f4f4f4;
    }

    /* Style the accordion for a cleaner look */
    .accordion {
        width: 100%;
        max-width: 600px; /* Set max-width for the accordion */
        background-color: #ffffff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .accordion-button {
        font-weight: bold;
        color: #333;
        background-color: #e9ecef;
        border: none;
        padding: 1rem;
        transition: background-color 0.3s ease;
    }

    .accordion-button:not(.collapsed) {
        color: #0056b3;
        background-color: #e0f2ff;
    }

    .accordion-button:focus {
        box-shadow: none;
    }

    .accordion-body {
        font-size: 1rem;
        color: #555;
        padding: 1.25rem;
        background-color: #ffffff;
    }
</style>
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

        <h2>FAQ</h2>
        <ol>
            <li><a href="index.html">Beranda</a></li>
            <li>FAQ</li>
        </ol>

    </div>
</div>
<section id="about" class="about">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Accordion Item #1
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Accordion Item #2
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Accordion Item #3
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
