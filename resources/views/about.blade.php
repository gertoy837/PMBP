@extends('master.app')
@section('isi')
<li><a class="nav-link  scrollto" href="{{ route('welcome') }}">Home</a></li>
<li><a class="nav-link  scrollto" href="{{ route('about') }}">About</a></li>

@if (Route::has('login'))
    <ul class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        @auth
            <a href="{{ url('/dashboard') }}"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
            <li class="getstarted scrollto p-2 px-3" style="background-color: #39A7FF;">
                <a href="{{ route('login') }}"
                    class="font-semibold p-1 text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>
            </li>
            @if (Route::has('register'))
                <li class="getstarted scrollto p-2 mx-2 text-white">
                    <a href="{{ route('register') }}"
                        class="ml-4 p-1 text-white font-semibold text-white-600 hover:text-white-900 dark:text-white-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                </li>
            @endif
        @endauth
    </ul>
@endif
@endsection
@section('konten')
<div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('dist') }}/landing/assets/img/mahasantri-1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <div class="chakra-stack css-1qf0f51" style="font-size:2rem; margin-bottom:30rem;">
            <p class="chakra-text css-16an6oh">طَلَبُ الْعِلْمِ فَرِيْضَةٌ عَلَى كُلِّ مُسْلِمٍ</p>
            <p class="chakra-text css-10srhn9">"Menuntut ilmu itu wajib atas setiap Muslim" <br> (HR. Ibnu Majah no. 224, dari sahabat Anas bin Malik radhiyallahu' anhu,
              <br> dishahihkan Al Albani dalam Shahiih al-Jaami'ish Shaghiir no. 3913)
            </p>
            <div class="chakra-stack css-1f0wxn3">
              <button type="button" class="btn btn-outline-primary" style="margin-right:10px;"><a href="{{ route('welcome') }}">Info Pendaftaran</a></button> <button class="btn btn-outline-secondary" style="margin-left:10px;"><a href="{{ route('register') }}">Daftar Sekarang</a></button>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('dist') }}/landing/assets/img/Kunjungan-Kerjasama-dalam-Penyaluran-Tenaga-Kerja-ke-PT-Galeri-Teknologi-Bersama-scaled-2557x1097.jpg " class="d-block w-100" alt="...">

        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('dist') }}/landing/assets/img/Acara-Wisuda-dan-Tasyakuran-Mahasantri-Petik-Angkatan-9-Tahun-Akademik-2021_2022-scaled-2557x1097.jpg" class="d-block w-100" alt="...">

        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!-- End Hero -->

<main id="main">
  <section id="hero" style="" class="d-flex text- text-white  align-items-center">

    <div class="container">
      <div class="row">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold">Generasi Islami
            Berkompetensi TIK
          </h1>
          <p class="col-md-8 fs-4" style="color: grey;">Beasiswa Pendidikan Gratis yang diperuntukkan bagi dhuafa atau berkemampuan ekonomi terbatas. Pendidikan yang berbasis ruang lingkup Kepesantrenan yang mengutamakan akhlak dan adab dengan pembekalan Ilmu Teknologi Informasi dan Komunikasi</p>
          <a href="{{ route('register') }}" class="download-btn"><i class="bx bx-clipboard"></i> Daftar
            Sekarang</a>

        </div>
        <!-- <div class="chakra-stack css-j0u2ib"><div class="react-reveal" style="animation-fill-mode: both; animation-duration: 1000ms; animation-delay: 0ms; animation-iteration-count: 1; opacity: 1; animation-name: react-reveal-399603638175210-2;"><h2 class="chakra-heading css-1oc13p2">Generasi Islami <br><span class="chakra-text css-qpde3z">Berkompetensi TIK</span></h2></div><div class="react-reveal" style="animation-fill-mode: both; animation-duration: 1000ms; animation-delay: 0ms; animation-iteration-count: 1; opacity: 1; animation-name: react-reveal-399603638175210-2;"><p class="chakra-text css-1fn4xkd">Beasiswa Pendidikan Gratis yang diperuntukkan bagi dhuafa atau berkemampuan ekonomi terbatas. Pendidikan yang berbasis ruang lingkup Kepesantrenan yang mengutamakan akhlak dan adab dengan pembekalan Ilmu Teknologi Informasi dan Komunikasi</p></div><div class="chakra-stack css-3itztv"><a class="chakra-link chakra-button css-1sltrsz" href="https://pmb.petikjombang.com">Mendaftar</a><a class="chakra-link css-wjmlm8" to="/tentang-kami"><button type="button" class="chakra-button css-qt87yl">Baca Selengkapnya</button></a></div></div> -->
      </div>
      <div class="col-md-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">

      </div>
    </div>
  </section>

  <!-- ======= App Features Section ======= -->
  <section id="hero" style="background-color: #39A7FF;" class="d-flex text-center text-white  align-items-center">

    <div class="container">
      <div class="row">
        <h3>
          "Pencetak Mahasantri Berakhlak Mulia dan Ahli Teknologi."
        </h3>
      </div>
    </div>
  </section>
  <!-- End App Features Section -->

  <!-- ======= Details Section ======= -->
  <section id="features" class="features">
    <div class="container">
      <div class="card-group">
        <div class="card text-center border-0">
          <img src="{{ asset('dist') }}/landing/assets/img/debt-512.png" class=" text-center align-center " alt="..." style="width: 100px; height:100px; margin:10px auto">
          <div class="card-body">
            <h5 class="card-title">100% Bebas Biaya</h5>
            <p class="card-text">PeTIK adalah salah satu instansi pendidikan gratis terbaik yang ada di Indonesia</p>
          </div>

        </div>
        <div class="card text-center border-0">
          <img src="{{ asset('dist') }}/landing/assets/img/reading-2-512.png" class=" text-center align-center " alt="..." style="width: 100px; height:100px; margin:10px auto">
          <div class="card-body">
            <h5 class="card-title">Teknologi Up-To-Date</h5>
            <p class="card-text">PeTIK mampu menghadirkan fasilitas terbaik dan stack terupdate</p>
          </div>

        </div>
        <div class="card text-center border-0">
          <img src="{{ asset('dist') }}/landing/assets/img/mind_map-512.png" class=" text-center align-center " alt="..." style="width: 100px; height:100px; margin:10px auto">
          <div class="card-body">
            <h5 class="card-title">Relationship

            </h5>
            <p class="card-text">PeTIK adalah salah satu instansi pendidikan bawahan YBM PLN dan memiliki relasi dengan sejumlah Universitas dan Startup</p>
          </div>

        </div>
      </div>
      <!-- End Details Section -->
    </div>
  </section>
  <!-- ======= Gallery Section ======= -->
  <!-- End Gallery Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>VISI DAN MISI</h2>
<p>Berikut rangkuman visi dan misi PeTIK</p>
      </div>
      <div class="clas" style="display: flex; flex-direction:row; ">
        <div class="card border-info " style="max-width: 18rem; margin-right: 50px;">
          <div class="text-center"><img src="{{ asset('dist') }}/landing/assets/img/bullish-512.png" style="width: 100px; height:100px;" alt=""></div>
          <div class="card-body">
            <h5 class="card-title text-center">Center of Learning</h5>
            <p class="card-text text-center">Pusat pembelajaran khususnya Ilmu Teknologi Informasi dan Komunikasi</p>
          </div>
        </div>

        <div class="card border-info " style="max-width: 18rem; margin-right: 50px;">
          <div class="text-center"><img src="{{ asset('dist') }}/landing/assets/img/customer_support-1-512.png" style="width: 100px; height:100px;" alt=""></div>
          <div class="card-body">
            <h5 class="card-title text-center">Technopreneur</h5>
            <p class="card-text text-center">Instansi pengembangan perangkat lunak sesuai dengan target kebutuhan pasar</p>
          </div>
        </div>

        <div class="card border-info " style="max-width: 18rem; margin-right: 50px;">
          <div class="text-center"><img src="{{ asset('dist') }}/landing/assets/img/graduation_cap-512.png" style="width: 100px; height:100px;" alt=""></div>
          <div class="card-body">
            <h5 class="card-title text-center">Pesantren</h5>
            <p class="card-text text-center">Lembaga pendidikan vokasi ilmu teknologi yang didukung oleh pendidikan agama</p>
          </div>
        </div>

        <div class="card border-info " style="max-width: 18rem; margin-right: 50px;">
          <div class="text-center"><img src="{{ asset('dist') }}/landing/assets/img/electronics-1-512.png" style="width: 100px; height:100px;" alt=""></div>
          <div class="card-body">
            <h5 class="card-title text-center">Social Media</h5>
            <p class="card-text text-center">Instansi professional modern dengan podcaster, youtube, wordpress dan sosial media lainnya</p>
          </div>
        </div>

      
        </div>
      </div>
    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing" style="text-align:center">
  <iframe text-align="center" width="50%" height="500px" src="https://www.youtube-nocookie.com/embed/PRcQpTdLmjg?si=BJdXk7TPBbLa_FBy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>    </section><!-- End Pricing Section -->

  <!-- ======= Frequently Asked Questions Section ======= -->

  <!-- End Frequently Asked Questions Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Contact</h2>
        <p>
          Kami membantu pesantren mengelola inventaris dengan lebih baik,
          efektif, dan efisien. Dengan sistem informasi inventaris pesantren
          dari kami, pesantren dapat mencapai tujuan inventaris dengan
          lebih mudah dan cepat. Hubungi kami sekarang untuk konsultasi
          gratis dan dapatkan solusi inventaris yang tepat untuk pesantren
          Anda.
        </p>
      </div>

      <div class="row">
        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info" style="text-align:left;">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>
                Kp. Panyaweuyan RT. 03/01 Desa. Ciherang Kec. Pacet Kab.
                Cianjur JAWA BARAT
              </p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>dikamahardika837@gmail.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+62 89507392244</p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4504.287967701885!2d106.7778979482661!3d-6.388358101363431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e92c0df5da9d%3A0x8499222ee6779470!2sPeTIK%20(Pesantren%20Teknologi%20Informasi%20dan%20Komunikasi)%20Program%20Kuliah%20IT%20Gratis%20Binaan%20YBM%20PLN!5e0!3m2!1sid!2sid!4v1704857700718!5m2!1sid!2sid" width="460" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form class="email-form" style="border-top: 3px solid #39A7FF; border-bottom: 3px solid #39A7FF;">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" id="name" required />
              </div>
              <div class="form-group col-md-6">
                <label for="name">Email</label>
                <input type="email" class="form-control" name="email" id="email" required />
              </div>
            </div>
            <div class="form-group">
              <label for="name">subjek</label>
              <input type="text" class="form-control" name="subject" id="subject" required />
            </div>
            <div class="form-group">
              <label for="name">Pesan</label>
              <textarea class="form-control" name="message" rows="10" required></textarea>
            </div>
            <div class="text-center">
              <button type="submit" style="background-color:#39A7FF">Kirim</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  

</main>
@endsection