@extends('master.app')
@section('isi')
    <li><a class="nav-link  scrollto" href="{{ route('welcome') }}">Home</a></li>
    <li><a class="nav-link  scrollto" href="{{ route('about1') }}">About</a></li>

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
    <main id="main">
        <section class="p-0">
            <div class="row">
                <aside
                    style="
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
                        <p class="chakra-text css-10srhn9 fw-bold">"Menuntut ilmu itu wajib atas setiap Muslim" <br> (HR.
                            Ibnu Majah no. 224, dari sahabat Anas bin Malik radhiyallahu' anhu,
                            <br> dishahihkan Al Albani dalam Shahiih al-Jaami'ish Shaghiir no. 3913)
                        </p>
                    </div>
                </aside>
            </div>
        </section>
        <!-- End Hero -->
        <section id="hero" style="background-color: #39A7FF;"
            class="d-flex text-center text-white  align-items-center">
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
                        <img src="{{ asset('dist') }}/landing/assets/img/debt-512.png" class=" text-center align-center "
                            alt="..." style="width: 100px; height:100px; margin:10px auto">
                        <div class="card-body">
                            <h5 class="card-title">100% Bebas Biaya</h5>
                            <p class="card-text">PeTIK adalah salah satu instansi pendidikan gratis terbaik yang ada di
                                Indonesia</p>
                        </div>

                    </div>
                    <div class="card text-center border-0">
                        <img src="{{ asset('dist') }}/landing/assets/img/reading-2-512.png"
                            class=" text-center align-center " alt="..."
                            style="width: 100px; height:100px; margin:10px auto">
                        <div class="card-body">
                            <h5 class="card-title">Teknologi Up-To-Date</h5>
                            <p class="card-text">PeTIK mampu menghadirkan fasilitas terbaik dan stack terupdate</p>
                        </div>

                    </div>
                    <div class="card text-center border-0">
                        <img src="{{ asset('dist') }}/landing/assets/img/mind_map-512.png"
                            class=" text-center align-center " alt="..."
                            style="width: 100px; height:100px; margin:10px auto">
                        <div class="card-body">
                            <h5 class="card-title">Relationship

                            </h5>
                            <p class="card-text">PeTIK adalah salah satu instansi pendidikan bawahan YBM PLN dan memiliki
                                relasi dengan sejumlah Universitas dan Startup</p>
                        </div>

                    </div>
                </div>
                <!-- End Details Section -->
            </div>
        </section>
        <!-- ======= Gallery Section ======= -->

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
                                <div class="text-center"><img src="{{ asset('dist') }}/landing/assets/img/bullish-512.png"
                                        style="width: 100px; height:100px;" alt=""></div>
                                <div class="card-body">
                                    <h5 class="card-title text-center">Center of Learning</h5>
                                    <p class="card-text text-center">Pusat pembelajaran khususnya Ilmu Teknologi Informasi
                                        dan Komunikasi</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="card border-info m-3">
                                <div class="text-center"><img
                                        src="{{ asset('dist') }}/landing/assets/img/customer_support-1-512.png"
                                        style="width: 100px; height:100px;" alt=""></div>
                                <div class="card-body">
                                    <h5 class="card-title text-center">Technopreneur</h5>
                                    <p class="card-text text-center">Instansi pengembangan perangkat lunak sesuai dengan
                                        target kebutuhan pasar</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="card border-info m-3">
                                <div class="text-center"><img
                                        src="{{ asset('dist') }}/landing/assets/img/graduation_cap-512.png"
                                        style="width: 100px; height:100px;" alt=""></div>
                                <div class="card-body">
                                    <h5 class="card-title text-center">Pesantren</h5>
                                    <p class="card-text text-center">Lembaga pendidikan vokasi ilmu teknologi yang didukung
                                        oleh pendidikan agama</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="card border-info m-3">
                                <div class="text-center"><img
                                        src="{{ asset('dist') }}/landing/assets/img/electronics-1-512.png"
                                        style="width: 100px; height:100px;" alt=""></div>
                                <div class="card-body">
                                    <h5 class="card-title text-center">Social Media</h5>
                                    <p class="card-text text-center">Instansi professional modern dengan podcaster, youtube,
                                        wordpress dan sosial media lainnya</p>
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
                    <iframe text-align="center" width="100%" height="500px"
                        src="https://www.youtube-nocookie.com/embed/PRcQpTdLmjg?si=BJdXk7TPBbLa_FBy"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
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
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4504.287967701885!2d106.7778979482661!3d-6.388358101363431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e92c0df5da9d%3A0x8499222ee6779470!2sPeTIK%20(Pesantren%20Teknologi%20Informasi%20dan%20Komunikasi)%20Program%20Kuliah%20IT%20Gratis%20Binaan%20YBM%20PLN!5e0!3m2!1sid!2sid!4v1704857700718!5m2!1sid!2sid"
                                width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
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
