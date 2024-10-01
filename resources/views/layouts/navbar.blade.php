{{--header--}}
{{--header--}}
<nav class="navbar navbar-expand-lg bg-success fixed-top">
<div class="container">
    <a class="navbar-brand" href="#">
    <img src="{{ asset('assets/images/logo2.jpeg')}}" height="55" width="55" alt="" class="logo">

    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <span class="text-white fw-bold me-3" style="margin-top: 0;">SMKN 1 NEGRI <br> RAO SELATAN</span>

          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Beranda</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Tentang kami
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="action2">Visi Misi</a></li>
                <li><a class="dropdown-item" href="action1">Sambutan kepala sekolah</a></li>
                <li><a class="dropdown-item" href="action3">Struktur organisasi</a></li>
              </ul>
            </li>

          <li class="nav-item">
            <a class="nav-link active" href="#">Pengumuman</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Akademik
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="jurusan">Jurusan</a></li>
              <li><a class="dropdown-item" href="action1">Ekstrakurikuler</a></li>
            <li><a class="dropdown-item" href="action3">Prestasi siswa</a></li>
            </ul>
          </li>


          <li class="nav-item">
            <a class="nav-link active" href='/galeri'>Contact</a>
          </li>

        </ul>



      </ul>
      </ul>
      <div class="d-flex">
          @auth
          <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="btn btn-dark">Logout</button>
          </form>
          @else
          <a href="{{ route('login') }}" class="btn btn-danger">Login</a>
          @endauth
      </div>

    </div>
  </div>
  <style>
    .nav-link {
        font-size: 15px;
        font-family: poppins;

    }
    </style>

</nav>
