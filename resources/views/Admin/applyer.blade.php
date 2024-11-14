@extends('Layout.admin')
@section('content')
<div class="container">
    <p>
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <a href="/tambahlowongan" class="btn btn-info">Tambah Lowongan</a>
                <p>
                <div class="product-wrapper-grid">
                    <div class="row gy-4">
                        @foreach ($lowongan as $loker)
                        <!-- Card Produk -->
                        <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
                            <div class="card">
                                <div class="product-box">
                                    <!-- Gambar Produk -->
                                    <div class="product-img position-relative">
                                        <img class="img-fluid product-image" src="{{ asset($loker->gambar) }}" alt="Product Image" data-bs-toggle="modal" data-bs-target="#exampleModalCenter{{ $loker->id }}">
                                        <div class="product-hover position-absolute top-0 end-0">
                                            <ul class="d-flex">
                                                <li><a href="cart.html" class="icon"><i class="icon-shopping-cart"></i></a></li>
                                                <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter{{ $loker->id }}" class="icon"><i class="icon-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Detail Produk -->
                                    <div class="product-details text-center p-3">
                                        <a href="product-page.html" class="product-title">
                                            <h4>Lowongan Kerja: {{ $loker->posisi }}</h4>
                                        </a>
                                        <div class="product-price">{{ \Carbon\Carbon::parse($loker->tanggal_berakhir)->format('d-M-y') }}</div>

                                        <p class="text-truncate">{{$loker->kualifikasi }}</p>
                                        <a href="#baca-lengkap-{{ $loker->id }}" class="text-info">Baca Selengkapnya</a>
                                        <div class="meta d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-geo-alt"></i>
                                                <span class="ps-2">{{ $loker->penempatan }}</span>
                                            </div>
                                            <span class="px-3 text-black-50">/</span>
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-briefcase"></i>
                                                <span class="ps-2">Full-time</span>
                                            </div>
                                        </div>
                                        <a href="{{ url('/detailloker/' . $loker->id) }}">
                                            <span></span><i class="bi bi-arrow-right"></i>
                                        </a>
                                        <div class="d-flex justify-content-between mt-3">
                                            <a href="{{ route('editloker', $loker->id) }}" class="btn btn-warning">Edit</a>

                                            <form action="{{ url('/hapusloker/' . $loker->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                <h1></h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Card Produk -->

                        <!-- Modal Detail -->
                        <div class="modal fade" id="exampleModalCenter{{ $loker->id }}" tabindex="-1" aria-labelledby="exampleModalCenterLabel{{ $loker->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterLabel{{ $loker->id }}">Lowongan Kerja: {{ $loker->posisi }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Kualifikasi:</strong> {{ $loker->kualifikasi }}</p>
                                        <p><strong>Penempatan:</strong> {{ $loker->penempatan }}</p>
                                        <p><strong>Deskripsi:</strong> {{ $loker->deskripsi }}</p>
                                        <p><strong>Tanggal Berakhir:</strong> {{ \Carbon\Carbon::parse($loker->tanggal_berakhir)->format('d-M-Y') }}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    <style>
        .product-img {
            width: 100%;
            height: 250px; /* Sesuaikan tinggi yang diinginkan */
            overflow: hidden;
        }

        .product-image {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Memastikan gambar tetap proporsional dalam ukuran yang tetap */
        }
    </style>


</div>
@endsection
