<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PMBP - Petik</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="{{ asset('dist') }}/landing/assets/img/logopetik.jpeg" rel="icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('dist') }}/landing/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('dist') }}/landing/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('dist') }}/landing/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('dist') }}/landing/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('dist') }}/landing/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('dist') }}/landing/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('dist') }}/landing/assets/css/style.css" rel="stylesheet">
</head>

<body style="background-color: #B4D4FF">

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top  header-transparent " style="background-color: #87C4FF;">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="{{ url('/') }}">
                        <img src="{{ asset('dist') }}/landing/assets/img/lgPetik-removebg-preview.png" alt="">
                    </a></h1>
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





    <div class="container" style="margin-top: 6rem; margin-bottom:3rem;">
        {{-- breadcum --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex">
                <li class="breadcrumb-item"><a href="{{ route('awal') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>

            </ol>
        </nav>

        <hr>


        {{-- main --}}

        <div class="row">
            <div class="col-md-4">
                <div class="card" style="border: none;">{{-- style="border: none;
                    " --}}
                    <div class="card-body rounded">
                        <img src="{{ asset('upload') . '/' . $data->santri->foto }}" width="150px" height="150px"
                            alt="" class="mx-auto d-block rounded-circle mb-3" style="box-shadow: 1px 1px 10px">
                        <h3 class="text-center"></h3>
                        <p class="text-center mb-0 fw-bold">{{ $data->santri->nama_panggil }}</p>
                        <p class="text-center mb-0">{{ $data->santri->tmp_lahir }}</p>
                        <p class="text-center text-muted">- Santri 2023-2024 - </p>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="accordion accordion-flush " id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        <b> Data Gambar</b>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">

                                        {{-- foto ijazah --}}
                                        <img src="{{ asset('upload') . '/' . $data->santri->ijazah }}" width="150px"
                                            height="150px" alt="" class="mx-auto d-block rounded mb-3">
                                        <p class="text-muted text-center">Foto Ijasah</p>
                                        {{-- foto kk --}}
                                        <img src="{{ asset('upload') . '/' . $data->santri->kk }}" width="150px"
                                            height="150px" alt="" class="mx-auto d-block rounded mb-3">
                                        <p class="text-muted text-center">Foto KK </p>
                                        <img src="{{ asset('upload') . '/' . $data->santri->rapot }}" width="150px"
                                            height="150px" alt="" class="mx-auto d-block rounded mb-3">
                                        <p class="text-muted text-center">Foto Rapot </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card" style="border: none;">
                    <div class="card-body rounded">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nik</th>
                                    <td>: {{ $data->santri->nik }} </td>
                                    <td></td>

                                </tr>
                                <tr>
                                    <th>Nisn</th>
                                    <td>: {{ $data->santri->nisn }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <td>: {{ $data->santri->nama_lengkap }}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th>Nama Ayah</th>
                                    <td>: {{ $data->santri->wali_santri->nama_ayah }}</td>
                                    <td></td>




                                </tr>
                                <tr>
                                    <th>Nama Ibu</th>
                                    <td>: {{ $data->santri->wali_santri->nama_ibu }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Tanggal-Lahir</th>
                                    <td>: {{ $data->santri->tgl_lahir }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>No hp</th>
                                    <td>: {{ $data->santri->no_hp }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>: {{ $data->santri->wali_santri->alamat }} </td>
                                    <td></td>
                                </tr>

                            </table>
                        </div>
                        <div class="accordion border-none" id="accordionExample">
                            <div class="accordion-item border-none">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        <b> Data Wali Santri</b>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="border-none accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tr>
                                                    <th>Nama Ayah</th>
                                                    <td>: {{ $data->santri->wali_santri->nama_ayah }} </td>
                                                </tr>
                                                <tr>
                                                    <th>Tempat Tanggal lahir ayah</th>
                                                    <td>: {{ $data->santri->wali_santri->tmp_lahir_a }},
                                                        {{ $data->santri->wali_santri->tgl_lahir_a }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Telp Ayah</th>
                                                    <td>: {{ $data->santri->wali_santri->no_hp_a }}</td>
                                                </tr>

                                                <tr>
                                                    <th>Pekerjaan Ayah</th>
                                                    <td>:
                                                        <?php
                                                        if ($data->santri->wali_santri['pkj_a'] == 1) {
                                                            echo 'Belum/ Tidak Bekerja';
                                                        } elseif ($data['pkj_a'] == 2) {
                                                            echo 'Mengurus Rumah Tangga';
                                                        } elseif ($data['pkj_a'] == 3) {
                                                            echo 'Pegawai Negeri Sipil';
                                                        } elseif ($data['pkj_a'] == 4) {
                                                            echo 'TNI/ Polri';
                                                        } elseif ($data['pkj_a'] == 5) {
                                                            echo 'Guru/ Dosen';
                                                        } elseif ($data['pkj_a'] == 6) {
                                                            echo 'Karyawan Swasta';
                                                        } elseif ($data['pkj_a'] == 7) {
                                                            echo 'Karyawan BUMN';
                                                        } elseif ($data['pkj_a'] == 8) {
                                                            echo 'Profesional';
                                                        } elseif ($data['pkj_a'] == 9) {
                                                            echo 'Wiraswasta';
                                                        } else {
                                                            echo 'Buruh';
                                                        }
                                                        ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Penghasilan Ayah</th>
                                                    <td>: <?php
                                                        if ($data->santri->wali_santri['phs_a'] == 1) {
                                                            echo '-';
                                                        } elseif ($data['phs_a'] == 2) {
                                                            echo '< 2 Juta';
                                                        } elseif ($data['phs_a'] == 3) {
                                                            echo '2 - 5 Juta';
                                                        } elseif ($data['phs_a'] == 4) {
                                                            echo '5 - 10 Juta';
                                                        } else {
                                                            echo '> 10 Juta';
                                                        }
                                                        ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Nama Ibu</th>
                                                    <td>: {{ $data->santri->wali_santri->nama_ibu }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Tempat Tanggal lahir Ibu</th>
                                                    <td>: {{ $data->santri->wali_santri->tmp_lahir_i }},
                                                        {{ $data->santri->wali_santri->tgl_lahir_i }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Telp Ibu</th>
                                                    <td>: {{ $data->santri->wali_santri->no_hp_i }}</td>
                                                </tr>

                                                <tr>
                                                    <th>Pekerjaan Ibu</th>
                                                    <td>:  <?php
                                                        if ($data->santri->wali_santri['pkj_i'] == 1) {
                                                            echo 'Belum/ Tidak Bekerja';
                                                        } elseif ($data['pkj_a'] == 2) {
                                                            echo 'Mengurus Rumah Tangga';
                                                        } elseif ($data['pkj_a'] == 3) {
                                                            echo 'Pegawai Negeri Sipil';
                                                        } elseif ($data['pkj_a'] == 4) {
                                                            echo 'TNI/ Polri';
                                                        } elseif ($data['pkj_a'] == 5) {
                                                            echo 'Guru/ Dosen';
                                                        } elseif ($data['pkj_a'] == 6) {
                                                            echo 'Karyawan Swasta';
                                                        } elseif ($data['pkj_a'] == 7) {
                                                            echo 'Karyawan BUMN';
                                                        } elseif ($data['pkj_a'] == 8) {
                                                            echo 'Profesional';
                                                        } elseif ($data['pkj_a'] == 9) {
                                                            echo 'Wiraswasta';
                                                        } else {
                                                            echo 'Buruh';
                                                        }
                                                        ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Penghasilan Ibu</th>
                                                    <td>: <?php
                                                        if ($data->santri->wali_santri['phs_i'] == 1) {
                                                            echo '-';
                                                        } elseif ($data['phs_a'] == 2) {
                                                            echo '< 2 Juta';
                                                        } elseif ($data['phs_a'] == 3) {
                                                            echo '2 - 5 Juta';
                                                        } elseif ($data['phs_a'] == 4) {
                                                            echo '5 - 10 Juta';
                                                        } else {
                                                            echo '> 10 Juta';
                                                        }
                                                        ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Alamat</th>
                                                    <td>: {{ $data->santri->wali_santri->alamat }} </td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class=" text-center py-3">
            <div class="container">
                <div class="row"><br>

                    <div class="col-lg-4 mb-2  mb-lg-0 text-left" style="text-align:left">
                        <img class="navbar-brand "
                            src="{{ asset('dist') }}/landing/assets/img/lgPetik-removebg-preview.png" height="100px"
                            width="250px" bgcolor="dark" style="text-align: left;">

                        <div class="mt-3">
                            <p align="left" class="text-dark"><i class="fa fa-envelope" aria-hidden="true"></i>
                                Email <br> pmb.petik@gmail.com</p>
                            <p align="left" class="text-dark"><i class="fa fa-phone-square"
                                    aria-hidden="true"></i>
                                Nomor Telepon <br>0813-9396-3363</p>
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

    <script src="{{ asset('dist') }}/landing/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('dist') }}/landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dist') }}/landing/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('dist') }}/landing/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('dist') }}/landing/assets/js/main.js"></script>
</body>

</html>
