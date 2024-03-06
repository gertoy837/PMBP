<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PMBP - PeTIK</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/logopetik.jpeg" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@700&family=Nunito&family=Oxygen:wght@700&family=Tilt+Neon&display=swap" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="{{ asset('dist') }}/landing/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('dist') }}/landing/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('dist') }}/landing/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('dist') }}/landing/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('dist') }}/landing/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('dist') }}/landing/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Template Main CSS File -->
  <link href="{{ asset('dist') }}/landing/assets/css/style.css" rel="stylesheet">

</head>

<body>
    <header id="header" class="fixed-top  header-transparent " style="background-color: #87C4FF;">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo">
                <h1><a href="{{ route('awal')}}"><img
                            src="{{ asset('dist') }}/landing/assets/img/lgPetik-removebg-preview.png"
                            alt=""></a></h1>
            </div>
            <nav id="navbar" class="navbar ">
                <ul>

                    <li><a class="nav-link  scrollto" href="{{ route('awal') }}">Home</a></li>
                    <li><a class="nav-link  scrollto" href="#">About</a></li>
                    <li class="dropdown"><a href="#">
                            <span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i>
                            <img src="{{ asset('dist/dashboard/assets/img/profile-img.jpg') }}" alt=""
                                width="35px" height="35px" style="margin-left: 5px; border-radius:50%"></a>
                        <ul>

                            <li>
                                <a class="nav-link  scrollto" href="{{ route('user', Auth::user()->id) }}">My
                                    Profile</a>
                            </li>
                            <li>
                                <form method="POST" class="dropdown-item d-flex align-items-center"
                                    action="{{ route('logout') }}">
                                    @csrf
                                    <a class="nav-link scrollto">
                                        <div :href="route('logout')" style="cursor: pointer"
                                            onclick="event.preventDefault();
                                          this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </div>
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header>

      <main id="main">
        <section class="p-0">
          <div class="row">
            <aside style="
                background-image: linear-gradient(
                    270deg,
                    rgb(20, 20, 20),
                    rgba(255, 255, 255, 0)
                  ),
                  url({{ asset('dist') }}/landing/assets/img/mahasantri-1.jpg);
                background-size: cover;
                height: 500px;
              ">
              <div class="title-aside">
                <p class="chakra-text css-16an6oh fs-3 mt-5">طَلَبُ الْعِلْمِ فَرِيْضَةٌ عَلَى كُلِّ مُسْلِمٍ</p>
                <p class="chakra-text css-10srhn9 fw-bold">"Menuntut ilmu itu wajib atas setiap Muslim" <br> (HR. Ibnu Majah no. 224, dari sahabat Anas bin Malik radhiyallahu' anhu,
                  <br> dishahihkan Al Albani dalam Shahiih al-Jaami'ish Shaghiir no. 3913)
                </p>
              </div>
            </aside>
          </div>
        </section>
        <!-- End Hero -->


        <section id="hero" style="background-color: #39A7FF;" class="d-flex text-center text-white  align-items-center">
          <div class="container">
            <div class="row">
              <h3>
                "Pencetak Mahasantri Berakhlak Mulia dan Ahli Teknologi."
              </h3>
            </div>
          </div>
        </section>

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
              <p>Berikut rangkuman visi dan misi PeTIK </p>
            </div>
            <div class="d-flex">
              <div class="row">
                <div class="col-md">
                  <div class="card border-info m-3">
                    <div class="text-center"><img src="{{ asset('dist') }}/landing/assets/img/bullish-512.png" style="width: 100px; height:100px;" alt=""></div>
                    <div class="card-body">
                      <h5 class="card-title text-center">Center of Learning</h5>
                      <p class="card-text text-center">Pusat pembelajaran khususnya Ilmu Teknologi Informasi dan Komunikasi</p>
                    </div>
                  </div>
                </div>


                <div class="col-md">
                  <div class="card border-info m-3">
                    <div class="text-center"><img src="{{ asset('dist') }}/landing/assets/img/customer_support-1-512.png" style="width: 100px; height:100px;" alt=""></div>
                    <div class="card-body">
                      <h5 class="card-title text-center">Technopreneur</h5>
                      <p class="card-text text-center">Instansi pengembangan perangkat lunak sesuai dengan target kebutuhan pasar</p>
                    </div>
                  </div>
                </div>


                <div class="col-md">
                  <div class="card border-info m-3">
                    <div class="text-center"><img src="{{ asset('dist') }}/landing/assets/img/graduation_cap-512.png" style="width: 100px; height:100px;" alt=""></div>
                    <div class="card-body">
                      <h5 class="card-title text-center">Pesantren</h5>
                      <p class="card-text text-center">Lembaga pendidikan vokasi ilmu teknologi yang didukung oleh pendidikan agama</p>
                    </div>
                  </div>
                </div>


                <div class="col-md">
                  <div class="card border-info m-3">
                    <div class="text-center"><img src="{{ asset('dist') }}/landing/assets/img/electronics-1-512.png" style="width: 100px; height:100px;" alt=""></div>
                    <div class="card-body">
                      <h5 class="card-title text-center">Social Media</h5>
                      <p class="card-text text-center">Instansi professional modern dengan podcaster, youtube, wordpress dan sosial media lainnya</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing" style="text-align:center">
          <div class="container">
            <div class="card">
              <iframe text-align="center" width="100%" height="500px" src="https://www.youtube-nocookie.com/embed/PRcQpTdLmjg?si=BJdXk7TPBbLa_FBy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
        </section><!-- End Pricing Section -->

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
                      Jl. Mandor Basar No.54, Rangkapan Jaya, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16434
                    </p>
                  </div>

                  <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>pmb.petik@gmail.com</p>
                  </div>

                  <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p>+62 88564723915</p>
                  </div>

                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4504.287967701885!2d106.7778979482661!3d-6.388358101363431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e92c0df5da9d%3A0x8499222ee6779470!2sPeTIK%20(Pesantren%20Teknologi%20Informasi%20dan%20Komunikasi)%20Program%20Kuliah%20IT%20Gratis%20Binaan%20YBM%20PLN!5e0!3m2!1sid!2sid!4v1704857700718!5m2!1sid!2sid" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

      </main><!-- End #main -->

      <!-- ======= Footer ======= -->
      <footer id="footer">

        <footer class=" text-center py-3">
          <div class="container">
            <div class="row"><br>

              <div class="col-lg-4 mb-2  mb-lg-0 text-left" style="text-align:left">
                <img class="navbar-brand " src="{{ asset('dist') }}/landing/assets/img/lgPetik-removebg-preview.png" height="100px" width="250px" bgcolor="dark" style="text-align: left;">

                <div class="mt-3">
                  <p align="left" class="text-dark"><i class="fa fa-envelope" aria-hidden="true"></i> Email <br> pmb.petik@gmail.com</p>
                  <p align="left" class="text-dark"><i class="fa fa-phone-square" aria-hidden="true"></i> Nomor Telepon <br>0813-9396-3363</p>
                </div>
              </div>

              <div class="col-lg-4 mb-5 mt-4 mb-lg-0">
                <h4 class="text-center text-dark font-alt mb-4">Media Sosial</h4>
                <div class="flex-row ml-6col-md-8 col-md-offset-2 mb-3">
                  <a href="https://petik.com" target="_blank"><i class="fa-solid fa-earth-asia fa-2x"></i></a>&nbsp;&nbsp;

                  <a href="https://www.instagram.com/petik_/" target="_blank"><i class="fa-brands fa-instagram fa-2x"></i></a>&nbsp;&nbsp;
                  <a href="https://www.youtube.com/@petik4973" target="_blank"><i class="fa-brands fa-youtube fa-2x"></i></a>&nbsp;&nbsp;
                  <a href="https://www.facebook.com/petikII/" target="_blank"><i class="fa-brands fa-facebook-f fa-2x"></i></a>
                </div>
              </div>

              <div class="col-lg-4 mb-5 mt-4 mb-lg-0">
                <h4 class="text-left text-dark font-alt mb-4" style="text-align: left;">Lokasi Tempat</h4>

                <p class=" mb-0 text-dark " style="text-align: left;">
                  PeTIK - YBM PLN<br> Jl. Mandor Basar No.54, Rangkapan Jaya, <br>Kec. Pancoran Mas, Kota Depok, Jawa Barat 16434

                </p>
              </div>
            </div>
          </div>
        </footer>
      </footer><!-- End Footer -->
      <footer style="background-color: #39A7FF;" class="p-3">
        <p class="text-center" style="margin: auto; color:white"> &copy; 2024 Copyright hak cipta dilindungi oleh Undang-undang</p>
      </footer>

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <!-- Vendor JS Files -->
      <script src="{{ asset('dist') }}/landing/assets/vendor/aos/aos.js"></script>
      <script src="{{ asset('dist') }}/landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="{{ asset('dist') }}/landing/assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="{{ asset('dist') }}/landing/assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="{{ asset('dist') }}/landing/assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="{{ asset('dist') }}/landing/assets/vendor/php-email-form/validate.js"></script>

      <!-- Template Main JS File -->
      <script src="{{ asset('dist') }}/landing/assets/js/main.js"></script>

</body>

</html>