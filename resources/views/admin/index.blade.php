@extends('layouts.layouts')

@section('content')
<section style="margin-top: 100px">
    <div class="container col-xxl-8 py-5">
        <h3 class="fw-bold mb-3">Hallo Admin Robiatul adawiyah</h3>
        <p>Selamat datang dihalaman dashboard admin</p>
        <div class="row">
            <div class="col-lg-4">
                <div class="card shadow-sm rounded-3 border-0">
                    <img src="{{asset('assets/images/guru.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Artikel</h5>
                      <p class="card-text">Atur dan kelola kegiatan fotonya</p>
                      <a href="{{ route('blog') }}" class="btn btn-primary">Detail</a>
                    </div>
                  </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm rounded-3 border-0">
                    <img src="{{asset('assets/images/guru.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Artikel</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="{{ route('photo')}}" class="btn btn-primary">Photo</a>
                    </div>
                  </div>
            </div>

            <div class="col-lg-4">
                <div class="card shadow-sm rounded-3 border-0">
                    <img src="{{asset('assets/images/guru.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Video Kegiatan</h5>
                      <p class="card-text">Atur Video</p>
                      <a href="{{ route('video')}}" class="btn btn-primary">Photo</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>

</section>
@endsection
