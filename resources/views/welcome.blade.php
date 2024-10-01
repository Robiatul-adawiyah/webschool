@extends('layouts.layouts')
@section('content')
<section id="hero">
    <div class="container text-center text-white">
       <div class="hero-title">

        <h1 id="typing"></h1>
        <script src="https://unpkg.com/typeit@@{TYPEIT_VERSION}/dist/index.umd.js"></script>
        </div>
    </div>
  </section>

  <section id="program" style="margin-top: -30px">
   <div class="container col-xxl-9">
    <div class="row">
        <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
            <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                <div>
                    <p>Pendidikan  Berkualitas</p>
                    </div>
                    <img src="{{ asset('assets/icons/ic-book.png') }}" height="55" width="55" alt="">
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                        <p>Pendidikan  Teknologi</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-neraca.png') }}" height="55" width="55" alt="">
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <p>Pendidikan  Siap Kerja</p>
                            </div>
                            <img src="{{ asset('assets/icons/ic-globe.png') }}" height="55" width="55" alt="">
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                        <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                            <div>
                                <p>Pendidikan Wirausaha</p>
                                </div>
                                <img src="{{ asset('assets/icons/ic-komputer.png') }}" height="55" width="55" alt="">
                            </div>


                        </div>




        </div>
    </div>
   </div>




<section id="berita py-2" style="margin-top: 100px">
    <div class="project_blog_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="head_text">Project Blog</h2>
                </div>


    @foreach ($artikels as $item)
    <div class="col-lg-4">
        <div class="card border-0">
            <img src="{{ asset('storage/artikel/' . $item->image)}}" class="img-fluid mb-3">
            <div class="konten-berita">
                <p class="mb-3 text-secondary me-3">{{ $item->create_at}}</p>
                <h4 class="fw-bold mb-3 me-3">{{ $item->judul }}</h4>
                <p class="text-secondary me-3">#Smk bisa</p>
                <a href="/detail/{{ $item->slug }}" class="text-decoration-none text-danger me-3">Selengkapnya</a>
            </div>
        </div>
    </div>

    @endforeach
</div>
<div class="footer-berita text-center">
<a href="/berita" class="btn btn-outline-danger  mb-5 mt-4">Berita Lainnya</a>
</div>

</div>

</section>


{{--Jurusan--}}

<div class="container swiper py-3 mb-5" data-aos="zoom-in-up">
<h2 class="py-2 text-center fw-bold">Jurusan</h2>
<div class="card-wrapper">
<ul class="card-list swiper-wrapper">
  <li class="card-item swiper-slide ">
      <a href="#" class="card-link">
          <img src="{{asset('assets/images/rpl.jpg')}}" class="card-image">
          <p class="badge designer">Rpl</p>
          <h2 class="card-title">jurusan ini berkaitan dengan software komputer, seperti pembuatan website, aplikasi, dan game</h2>
          <button class="card-button
          material-symbols-outlined">
              arrow_forward
              </button>
      </a>

  </li>

  <li class="card-item swiper-slide">
      <a href="#" class="card-link">
        <img src="{{asset('assets/images/bp.jpg')}}" class="card-image">
          <p class="badge">broad casting & perfileman</p>
          <h2 class="card-title">jurusan yang mempelajari perencanaan produksi konten, proses siaran radio dan televisi, teknik pengambilan gambar.</h2>
          <button class="card-button
          material-symbols-outlined">
              arrow_forward
              </button>
      </a>

  </li>

  <li class="card-item swiper-slide">
      <a href="#" class="card-link">
        <img src="{{asset('assets/images/titl.jpg')}}" class="card-image">
          <p class="badge marketer">Titl</p>
          <h2 class="card-title">Jurusan ini adalah bidang ilmu yang mempelajari teknik-teknik yang berhubungan dengan tenaga listrik.</h2>
          <button class="card-button
          material-symbols-outlined">
              arrow_forward
              </button>
      </a>

  </li>

  <li class="card-item swiper-slide">
      <a href="#" class="card-link">
        <img src="{{asset('assets/images/dkv.jpg')}}" class="card-image">
          <p class="badge gamer">Desain Komunikasi visual</p>
          <h2 class="card-title">DKV itu seperti seorang komunikator yang menggunakan gambar untuk menyampaikan pesan</h2>
          <button class="card-button
          material-symbols-outlined">
              arrow_forward
              </button>
      </a>

  </li>

  <li class="card-item swiper-slide">
      <a href="#" class="card-link">
        <img src="{{asset('assets/images/tav.jpg')}}" class="card-image">
          <p class="badge editor">Teknik Audio Video</p>
          <h2 class="card-title">keterampilan yang diperlukan untuk bekerja dalam industri yang berkaitan distribusi audio dan video</h2>
          <button class="card-button
          material-symbols-outlined">
              arrow_forward
              </button>
      </a>

  </li>

  <li class="card-item swiper-slide">
    <a href="#" class="card-link">
      <img src="{{asset('assets/images/tei.jpg')}}" class="card-image">
        <p class="badge">Teknik Elektronika</p>
        <h2 class="card-title">Teknik Elektronika Industri adalah jurusan  dalam bidang system control dan maintenance”..</h2>
        <button class="card-button
        material-symbols-outlined">
            arrow_forward
            </button>
    </a>
</li>
</ul>


<div class="swiper-pagination"></div>
<div class="swiper-slide-button swiper-button-prev"></div>
<div class="swiper-slide-button swiper-button-next"></div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



{{--Jurusan--}}

{{--about--}}

{{--about--}}







{{--Video--}}


</section>
<section id="video" class="py-5" data-aos="zoom-in">
<div class="container py-5">
<div class="text-center">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/A927ale9-vI?si=UrQlacDeOEphivnu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
</div>

</section>

<section id="video_youtube" class="py-5" data-aos="zoom-in">
<div class="container py-5">
<div class="header-berita text-center">
    <h2 class="fw-bold">Video kegiatan smk</h2>
</div>

<div class id="yutub">
<div class="row py-5">
    @foreach ($videos as $item)
    <div class="col-lg-4">
        <iframe width="100%" height="215" src="https://www.youtube.com/embed/{{ $item->youtube_code }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    @endforeach
</div>


<div class="footer-berita text-center py-3">
    <a href="" class="btn btn-outline-danger">Video Lainnya</a>
</div>
</div>
</section>

{{--Video--}}

{{--foto--}}





{{--Ekskul--}}


{{--Ekskul--}}

{{--prestasi--}}

{{--prestasi--}}

{{-- Fasilitas --}}




{{-- Fasilitas --}}

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


