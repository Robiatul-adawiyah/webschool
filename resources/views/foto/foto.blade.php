@extends('layouts.layouts')

@section('content')

    {{--foto--}}

<section id="foto" style="margin-top: 100px" class="section-foto parallax" data-aos="zoom-in-up">
    <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-5">
    <div class="d-flex align-items-center">
        <div class="stripe-putih me-2"></div>
        <h5 class="fw-bold text-white">Foto kegiatan</h5>
    </div>
    <div>
        <a href="/foto" class="btn btn-outline-white">Foto lainnya</a>
    </div>
    </div>

    <div class="row">
    <div class="col-lg-3 col-md-6 col-6">
        <a class="image-link" href="{{asset('assets/images/guru.jpg')}}">
        <img src="{{ asset('assets/images/guru.jpg')}}" class="img-fluid">
    </a>


    </div>
    <div class="col-lg-3 col-md-6 col-6">
        <a class="image-link" href="{{asset('assets/images/guru.jpg')}}">
            <img src="{{ asset('assets/images/guru.jpg')}}" class="img-fluid">
        </a>

    </div>
    <div class="col-lg-3 col-md-6 col-6">
        <a class="image-link" href="{{asset('assets/images/guru.jpg')}}">
            <img src="{{ asset('assets/images/guru.jpg')}}" class="img-fluid">
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-6">
        <a class="image-link" href="{{asset('assets/images/guru.jpg')}}">
            <img src="{{ asset('assets/images/guru.jpg')}}" class="img-fluid">
        </a>
    </div>
    </div>

    </div>

    </section>


@endsection
