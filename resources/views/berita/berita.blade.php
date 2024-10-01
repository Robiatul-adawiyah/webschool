@extends('layouts.layouts')

@section('content')
<section id="berita" style="margin-top: 100px" class="py-5">
    <div class="container">
    <div class="header-berita text-center">
        <h2 class="fw-bold">News</h2>

    </div>

    <div class="row py-5" data-aos="flip-up">

       @foreach ($artikels as $item)
       <div class="col-lg-4">
        <div class="card border-0">
            <img src="{{ asset('storage/artikel/' . $item->image)}}" class="img-fluid mb-3">
            <div class="konten-berita">
                <p class="mb-3 text-secondary">{{ $item->create_at}}</p>
                <h4 class="fw-bold mb-3">{{ $item->judul }}</h4>
                <p class="text-secondary">#Smk bisa</p>
                <a href="/berita" class="text-decoration-none text-danger">Selengkapnya</a>
            </div>
        </div>
    </div>
       @endforeach

    </div>

    </section>

    <section id="footer" class="bg-white">
        <div class="container py-4">
            <footer>
                <div class="row">
                 <div class="col-12 col-md-3 mb-3">
                    <h5 class="fw-bold mb-3">Navigasi</h5>
                 <div class="d-flex">
                    <ul class="nav flex-column me-5">
                        <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Berita sekolah</a></li>
                        <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Kegiatan</a></li>
                        <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Gallery</a></li>
                        <li class="nav-item mb-2"><a href="" class="nav-link p-0 text-muted">Kegiatan sosial</a></li>
                    </ul>

                 <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#"
                        class="nav-link p-0 text-muted">Alumni</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Info Psb</a></li>

                        <li class="nav-item mb-2"><a href="/prestasi"
                            class="nav-link p-0 text-muted">Prestasi</a>
                        </li>

                        <li class="nav-item mb-2"><a href="#"
                            class="nav-link p-0 text-muted">Video Kegiatan </a>
                        </li>
                 </ul>

                 </div>
                    </div>
                </div>
            </footer>

        </div>
    </section>
    {{-- Footer --}}


@endsection
