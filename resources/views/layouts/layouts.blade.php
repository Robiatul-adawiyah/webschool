<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="shortcut icon" href="{{ asset('assets/icons/ic-logo.png') }}">
        <title>Laravel 10 robiatul</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        {{--aos--}}
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        {{--aos--}}

        {{--magnifig--}}
       <link rel="stylesheet" href="{{ asset('assets/css/magnific.css') }}">
         {{--magnifig--}}

         {{--summernote--}}
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />


            {{--summernote--}}

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
        <script src="assets/script/script.js"></script>
    </head>
    <body>

        {{--Navbar--}}
        @include('layouts.navbar')

        {{--kontent--}}
        {{-- Footer --}}



<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('assets/js/magnific.js')}}"></script>

{{-- JQUERY --}}
{{--<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk= "crossorigin="anonymous"></script>--}}
{{-- Summernote JS --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>

<script>
    $(document).ready(function() {
                $('#summernote').summernote({
                    height: 200,
                });
     });
    </script>

<script>
   const navbar = document.querySelector(".fixed-top");
window.onscroll = () => {
  if (window.scrollY > 100) {
    navbar.classList.add("scroll-nav-active");
    navbar.classList.add("text-nav-active");  
   // navbar.classList.remove("navbar-dark");

  } else {
    navbar.classList.remove("scroll-nav-active");
   // navbar.classList.add("navbar-dark");  

  }
       };

  AOS.init();

  $(document).ready(function() {
    $('.image-link').magnificPopup({
        type:'image',
        retina: {
            ratio: 1,
            replaceSrc: function(item, ratio) {
                return item.src.replace(/\.\w+$/, function(m){
                    return '@2x' + m;
                });
            }
        }
    });
  });



  $(document).ready(function () {
    //Owl
    $('.hero-slider').owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        dots: false,
        navText: ['PREV', 'NEXT'],
        smartSpeed: 1000,
        autoplay: true,
        autoplayTimeout: 7000,
        responsive: {
            0: {
                nav: false,
            },
            768: {
                nav: true,
            }
        }
    })

    $('#projects-slider').owlCarousel({
        loop: true,
        nav: false,
        items: 2,
        dots: true,
        smartSpeed: 600,
        center: true,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2,
                margin: 8,
            }
        }
    })

    $('.reviews-slider').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        smartSpeed: 900,
        items: 1,
        margin: 24,
        autoplay: true,
        autoplayTimeout: 4000,
    })
});


</script>

    </body>
</html>


        @yield('content')
