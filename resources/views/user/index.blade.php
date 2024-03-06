<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PMBP - Petik</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="img/logopetik.jpeg" rel="icon">
    <link href="{{ asset('dist') }}/landing/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('dist') }}/landing/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('dist') }}/landing/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('dist') }}/landing/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('dist') }}/landing/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('dist') }}/landing/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('dist') }}/landing/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Template Main CSS File -->
    <link href="{{ asset('dist') }}/landing/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
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
                    <li><a class="nav-link  scrollto" href="{{ route('about') }}">About</a></li>
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
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up">
                    <div>
                        <h1 class="fw-bold" style="color: #5588A3;">PMBP - PeTIK</h1>
                        <h2>Penerimaan Mahasantri Baru Tahun Agkatan 2023/2024</h2>
                        <a href="#" class="download-btn"><i class="bx bxl-play-store"></i> Google Play</a>
                        <a href="#" class="download-btn"><i class="bx bxl-apple"></i> App Store</a>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img"
                    data-aos="fade-up">
                    <img src="{{ asset('dist') }}/landing/assets/img/hero-img.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= App Features Section ======= -->
        <section id="" style="background-color: #39A7FF;"
            class="d-flex text-center text-white  align-items-center mt-0">
            <div class="container mt-0">
                <h3>
                    "Pencetak Mahasantri Berakhlak Mulia dan Ahli Teknologi."
                </h3>
            </div>
        </section>
        <!-- End App Features Section -->

        <section>
            <div class="container">
                <h2 class="fw-bold">VISI</h2>
                <p class="fw-semibold">Menjadi lembaga pendidikan unggul dalam membentuk tenaga terampil di bidang
                    teknologi informasi dan komunikasi yang berkarakter mulia melalui pembangunan kemandirian yang
                    bernilai tambah.</p>
                <br>
                <h2 class="fw-bold">MISI</h2>
                <ul class="fw-semibold">
                    <li>Menjalankan metode pembelajaran berbasis pendidikan pesantren.</li>
                    <li>Menyelenggarakan pendidikan vokasi dengan kurikulum yang relevan dengan industri dan dunia kerja
                        (IDUKA).</li>
                    <li>Menyiapkan dan mengembangkan sumberdaya insani yang menguasai teknologi informasi dan komunikasi
                        yang memiliki sikap kerja positif dan penguasaan interaksi yang kondusif.</li>
                    <li>Mengikuti tren teknologi media pembelajaran.</li>
                    <li>Membangun model komunikasi lintas potensi daerah yang dapat meningkatkan kesejahteraan
                        masyarakat, khususnya dalam memanfaatkan teknologi informasi dan komunikasi serta syiar Islam.
                    </li>
                </ul>
                <br>
                <h2 class="fw-bold">TUJUAN</h2>
                <ul class="fw-semibold">
                    <li>Mencetak peserta didik menjadi generasi yang berwawasan ilmu-ilmu keislaman dan ketaatan dalam
                        beribadah.</li>
                    <li>Mencetak peserta didik menguasai keterampilan teknologi informasi dan komunikasi yang sesuai
                        dengan kebutuhan IDUKA.</li>
                    <li>Mencetak peserta didik memiliki keterampilan dan jiwa kewirausahaan.</li>
                    <li>Mencetak tenaga profesional dibidang teknologi informasi dan komunikasi yang religius,
                        berintegritas, gemar bekerjasama, berinisiatif, disiplin, percaya diri dan berani dalam
                        menegakan kebaikan.</li>
                    <li>Membangun hubungan yang baik dengan para pemangu kepentingan sebagai bentuk keterbukaan dan
                        pertanggung jawaban.</li>
                    <li>Menggunakan perangkat keras dan perangkat lunak yang mutakhir pada proses kegiatan belajar dan
                        mengajar dalam memperbaharui pengetahuan dan keterampilannya.</li>
                    <li>Membentuk kader-kader pembangunan yang peduli, sadar dan bertanggung jawab atas peningkatan
                        pembangunan kesejahteraan masyarakat sekitarnya.</li>
                    <li>Membentuk kader-kader pembangunan yang peduli, sadar dan bertanggung jawab atas peningkatan
                        pembangunan kesejahteraan masyarakat sekitarnya.</li>
                </ul>
                <br>
                <h2 class="fw-bold">MOTO</h2>
                <h4>Creates Future Skilled Professionals</h4>
            </div>
        </section>

        <section id="features" class="features">
            <div class="container">
                <section id="lampiran" class="lampiran">
                    <div class="row content">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fw-bold " type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
                                        aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        Berapa Jumlah Santri Dalam 1 Kamar ?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <p>Jumlah santri dalam satu kamar ± 30 orang.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        Apa Tujuan Orang Masuk Pesantren?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        Melalui pondok pesantren, anak-anak dapat mengembangkan karakter yang kuat,
                                        mengasah pemahaman agama yang mendalam, dan mempersiapkan diri mereka untuk
                                        menghadapi tantangan dunia dengan keyakinan yang teguh.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                        Apa Saja yang dipelajari di Pesantren PeTIK?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        Materi yang diajarkan dalam pesantren meliputi berbagai disiplin ilmu
                                        pengetahuan agama, meliputi: tauhid (teologi), tasawuf (sufisme) dan akhlak,
                                        fiqh (hukum Islam). Dan meliputi ilmu Teknologi Informasi dan Komunikasi,
                                        meliputi : Ilmu Komputer yang identik dengan computer programming, sistem
                                        informasi, sistem komputer, teknik Komputer, dan teknologi informasi.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                        Berapa Lama Waktu Mondok di Pesantren PeTIK?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        Berapa Lama Mondok Di Pesantren PeTIK? Masa pendidikan di Pesantren PeTIK selama
                                        1 Tahun. Mahasantri diwajibkan mukim diasrama.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                        Berapa Biaya Masuk ke Pesantren PeTIK
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        Pesantren PeTIK merupakan pesantren berbasis IT di kota Depok Provinsi Jawa
                                        Barat. Pesantren ini 100% gratis.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix"
                                        aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                        Apa Saja Fasilitas Sarana dan Prasarana di Pesantren PeTIK
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <ol><b>Fasilitas Sarana dan Prasarana di Pesantren PeTIK</b>
                                            <li>Lab Komputer Full Ac</li>
                                            <li>Asrama</li>
                                            <li>Kantin</li>
                                            <li>Musholla</li>
                                            <li>Uang Saku</li>
                                            <li>Komputer</li>
                                            <li>Modul Pembelajaran</li>
                                            <li>Tenaga Pendidik Ahli</li>
                                            <li>Tim Pengasuh 24 Jam</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-41b3728 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="41b3728" data-element_type="section" style="padding-top: 10rem;">
                            <h1 class="pb-2 text-center">SEBARAN PENERIMA MANFAAAT</h1>
                            <h5 class="text-center pb-5">Pesantren Teknologi Informasi dan Komunikasi total penerima
                                manfaat 280 Mahasantri</h5>
                            <img width="100%"
                                src="https://petik.or.id/wp-content/uploads/2022/08/peta-indonesia-1024x439.png"
                                class="" alt="...">
                        </section>
                    </div>
                </section>
            </div>
        </section>
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Galeri</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>
                <div class="testimonials-slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card p-4 m-5" id="card">
                                <div class="card-body">
                                    <img src="{{ asset('dist') }}/landing/assets/img/403917841_307798108827028_6501409220785521253_n.jpg" class=""
                                        width="100%" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card p-4 m-5" id="card">
                                <div class="card-body">
                                    <img src="{{ asset('dist') }}/landing/assets/img/399971688_357005633460397_2188587451690889041_n.jpg" alt=""
                                        width="100%">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card p-4 m-5" id="card">
                                <div class="card-body">
                                    <img src="{{ asset('dist') }}/landing/assets/img/403942353_183336518190317_9154626841568724152_n.jpg" width="100%"
                                        alt="">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card p-4 m-5" id="card">
                                <div class="card-body">
                                    <img src="{{ asset('dist') }}/landing/assets/img/414859918_883468087114405_1157832047880484076_n.jpg" width="100%"
                                        alt="">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card p-4 m-5" id="card">
                                <div class="card-body">
                                    <img src="{{ asset('dist') }}/landing/assets/img/416721034_886677606793453_321291928532502599_n.jpg" width="100%"
                                        alt="">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card p-4 m-5" id="card">
                                <div class="card-body">
                                    <img src="{{ asset('dist') }}/landing/assets/img/400614231_850400097087871_3123183139783660865_n.jpg" width="100%"
                                        alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials" class="testimonials">
            <div class="container " data-aos="fade-up">

                <div class="section-title">
                    <h2>Berita PeTIK</h2>
                    <p>Memuat Informasi Kabar dan Informasi Kegiatan Pesantren Teknologi Informasi dan Komunikasi.
                        Pesantren PeTIK Adalah Lembaga Pendidikan Vokasi Dan Merupakan Lembaga Pendidikan Non-Formal
                        Teknik Informatika (Satu Tahun, Setingkat Kurikulum). Memiliki Program Kuliah IT Gratis Dan
                        Pesantren Gratis Menjadi Pesantren Terbaik Lulusan SMA/SMK Sederajat Untuk Mendapatkan Kuliah
                        Gratis Dibidang IT.</p>
                </div>

                <div class="testimonials-slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card my-5" style="width: 100%;">
                                <img src="https://petik.or.id/wp-content/uploads/2023/01/DSCN6405-1.jpg"
                                    class="card-img-top" width="" alt="...">
                                <div class="card-body">
                                    <a
                                        href="https://petik.or.id/2023/01/12/beasiswa-pesantren-gratis-it-di-kota-depok/">
                                        <h5 class="card-title fw-bold">Pesantren Gratis IT di Depok</h5>
                                    </a>
                                    <p class="card-text">Belajar IT sambil nyantri di Pesantren Teknologi Informasi dan
                                        Komunikasi (Pesantren PeTIK) yang beralamat di Jalan Mandor Basar No 54 Rt
                                        01/01. Kelurahan Rangkapan Jaya Kec Pancoran Mas Kota Depok Jawa Barat. Membuka
                                        Pendaftaran Mahasantri Baru Tahun 2023 berikut syaratnya : Laki-laki, muslim
                                        berakhlak baik lulusan SMA Sederajat lulusan tahun 2020, 2021, 2022... <br><br>
                                        <a
                                            href="https://petik.or.id/2023/01/12/beasiswa-pesantren-gratis-it-di-kota-depok/"><button
                                                class="btn btn-secondary">Read More</button></a>
                                    </p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 second
                                            ago</small></p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card my-5" style="width: 100%;">
                                <img src="https://petik.or.id/wp-content/uploads/2022/08/Acara-Wisuda-dan-Tasyakuran-Mahasantri-Petik-Angkatan-9-Tahun-Akademik-2021_2022-scaled-2557x1097.jpg"
                                    class="card-img-top" width="" alt="...">
                                <div class="card-body">
                                    <a
                                        href="https://petik.or.id/2023/01/13/profil-pesantren-teknologi-informasi-dan-komunikasi-pesantren-petik/">
                                        <h5 class="card-title fw-bold">Profil Pesantren Teknologi Informasi dan
                                            Komunikasi (Pesantren PeTIK)</h5>
                                    </a>
                                    <p class="card-text">Tentang Pesantren PeTIK Pesantren Teknologi Informasi dan
                                        Komunikasi bermula dari keberadaan Lembaga Amil Zakat Infaq dan Shodaqoh PT PLN
                                        (Persero) Kantor Pusat (LAZIS PT PLN (Persero) Kantor Pusat) yang dibentuk
                                        berdasarkan Keputusan Direksi Nomor 132.K/DIR/2006 Tanggal 11 September 2006
                                        untuk mengelola dana zakat, infaq/ shodaqoh pegawai PLN Pusat. Awal Kehadiran
                                        Berawal dari asa... <br><br>
                                        <a
                                            href="https://petik.or.id/2023/01/13/profil-pesantren-teknologi-informasi-dan-komunikasi-pesantren-petik/"><button
                                                class="btn btn-secondary btn-sm">Read More </button></a>
                                    </p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card my-5" style="width: 100%;">
                                <img src="{{ asset('dist') }}/landing/assets/img/petik.png" class="card-img-top" width="" alt="...">
                                <div class="card-body">
                                    <a
                                        href="https://petik.or.id/2022/11/14/sejarah-pesantren-teknologi-informasi-dan-komunikasi/">
                                        <h5 class="card-title fw-bold">Sejarah Pesantren Teknologi Informasi dan
                                            Komunikasi YBM PLN</h5>
                                    </a>
                                    <p class="card-text">Pesantren Teknologi Informasi dan Komunikasi bermula dari
                                        keberadaan Yayasan Lembaga Amil Zakat Infaq dan Shodaqoh PLN (Yayasan LAZIS PLN)
                                        yang sekarang berubah nama menjadi Yayasan Baitul Maal PLN (YBM PLN). <br><br>
                                        <a
                                            href="https://petik.or.id/2022/11/14/sejarah-pesantren-teknologi-informasi-dan-komunikasi/"><button
                                                class="btn btn-secondary btn-sm">Read More</button></a>
                                    </p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card my-5" style="width: 100%;">
                                <img src="{{ asset('dist') }}/landing/assets/img/Frame 2.png" class="card-img-top" width="" alt="...">
                                <div class="card-body">
                                    <a
                                        href="https://petik.or.id/2023/05/04/pengumuman-seleksi-berkas-pmbt-pesantren-petik-gelombang-2-tahun-2023/">
                                        <h5 class="card-title fw-bold">Pengumuman Seleksi Berkas PMB PeTIK</h5>
                                    </a>
                                    <p class="card-text">Assalamu’alaikum warohmatullahi wabarokaatuh. Puji syukur
                                        dipanjatkan kehadirat Allah SWT. Semoga Allah meridhoi dan memberkahi aktifitas
                                        kita sehari-hari. Aamiin. Bersama ini disampaikan hasil kelulusan Seleksi Berkas
                                        Penerimaan Mahasantri Baru PeTIK (PMBT) Gelombang 2 Tahun 2023. Data nama calon
                                        mahasantri terlampir. Bagi yang telah dinyatakan lulus seleksi berkas, maka akan
                                        mengikuti tes seleksi berikutnya...<br><br>
                                        <a
                                            href="https://petik.or.id/2023/05/04/pengumuman-seleksi-berkas-pmbt-pesantren-petik-gelombang-2-tahun-2023/"><button
                                                class="btn btn-secondary btn-sm">Read More</button></a>
                                    </p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                            ago</small></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class=" text-center py-3">
            <div class="container">
                <div class="row"><br>

                    <div class="col-lg-4 mb-2  mb-lg-0 text-left" style="text-align:left">
                        <img class="navbar-brand " src="{{ asset('dist') }}/landing/assets//img/lgPetik-removebg-preview.png" height="100px"
                            width="250px" bgcolor="dark" style="text-align: left;">

                        <div class="mt-3">
                            <p align="left" class="text-dark"><i class="fa fa-envelope" aria-hidden="true"></i>
                                Email <br> pmb.petik@gmail.com</p>
                            <p align="left" class="text-dark"><i class="fa fa-phone-square"
                                    aria-hidden="true"></i> Nomor Telepon <br>0813-9396-3363</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-5 mt-4 mb-lg-0">
                        <h4 class="text-center text-dark font-alt mb-4">Media Sosial</h4>
                        <div class="flex-row ml-6col-md-8 col-md-offset-2 mb-3">
                            <a href="https://petik.com" target="_blank"><i
                                    class="fa-solid fa-earth-asia fa-2x"></i></a>&nbsp;&nbsp;

                            <a href="https://www.instagram.com/petik_/" target="_blank"><i
                                    class="fa-brands fa-instagram fa-2x"></i></a>&nbsp;&nbsp;
                            <a href="https://www.youtube.com/@petik4973" target="_blank"><i
                                    class="fa-brands fa-youtube fa-2x"></i></a>&nbsp;&nbsp;
                            <a href="https://www.facebook.com/petikII/" target="_blank"><i
                                    class="fa-brands fa-facebook-f fa-2x"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-5 mt-4 mb-lg-0">
                        <h4 class="text-left text-dark font-alt mb-4" style="text-align: left;">Lokasi Tempat</h4>

                        <p class=" mb-0 text-dark " style="text-align: left;">
                            PeTIK - YBM PLN<br> Jl. Mandor Basar No.54, Rangkapan Jaya, <br>Kec. Pancoran Mas, Kota
                            Depok, Jawa Barat 16434

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: #39A7FF;" class="p-3">
            <p class="text-center" style="margin: auto; color:white"> &copy; 2024 Copyright hak cipta dilindungi oleh
                Undang-undang</p>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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
