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
                <h1><a href="{{url('/')}}">
                        <img src="{{ asset('dist') }}/landing/assets/img/lgPetik-removebg-preview.png" alt="">
                    </a></h1>
            </div>

            <nav id="navbar" class="navbar ">
                <ul class="">

                    <li><a class="nav-link  scrollto" href="#">Home</a></li>
                    <li><a class="nav-link  scrollto" href="#">About</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

                    <li class="dropdown"><a href="#"><span> More Info</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link  scrollto" href="#features">Syarat dan Ketentuan</a></li>
                            <li><a class="nav-link  scrollto" href="#lampiran">lampiran berkas</a></li>
                            <li><a class="nav-link  scrollto" href="#alur">Alur Pendaftaran</a></li>
                            <li><a class="nav-link  scrollto" href="#formulir">Formulir Pendaftaran</a></li>
                            <li><a class="nav-link  scrollto" href="#pricing">Seleksi Tes</a></li>
                        </ul>
                    </li>
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
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->





    <div class="container" style="margin-top: 6rem; margin-bottom:3rem;">
        {{-- breadcum --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>

            </ol>
        </nav>

        <hr>


        {{-- main --}}

        <div class="row">
            <div class="col-md-4">
                <div class="card" style="border: none;">{{--style="border: none;
                    "--}}
                    <div class="card-body rounded">
                        {{-- foto santri --}}
                        {{-- {{asset('upload'). '/'. $data->foto}} --}}
                        <img src="{{asset('upload'). '/'. $data->foto}}" width="150px" height="150px" alt=""
                            class="mx-auto d-block rounded-circle mb-3" style="box-shadow: 1px 1px 10px">
                        <h3 class="text-center"></h3>
                        <p class="text-center mb-0 fw-bold">{{$data->nama_panggil}}</p>
                        <p class="text-center mb-0">{{$data->tmp_lahir}}</p>
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
                                        <img src="{{asset('upload'). '/'. $data->foto}}" width="150px" height="150px"
                                            alt="" class="mx-auto d-block rounded mb-3">
                                        <p class="text-muted text-center">Foto Ijasah</p>
                                        {{-- foto kk --}}
                                        <img src="{{asset('upload'). '/'. $data->foto}}" width="150px" height="150px"
                                            alt="" class="mx-auto d-block rounded mb-3">
                                        <p class="text-muted text-center">Foto KK </p>
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
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="{{url('/')}}">
                                            <button class="btn btn-outline-primary float-end"><i
                                                    class="fa-solid fa-chevron-left me-2">
                                                </i>Back</button>
                                    </td>
                                    </a>
                                </tr>
                                <tr>
                                    <th>Nik :</th>
                                    <td>{{$data->nik}} </td>
                                    <td></td>

                                </tr>
                                <tr>
                                    <th>Nisn :</th>
                                    <td> {{$data->nisn}}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Nama Lengkap :</th>
                                    <td> {{$data->nama_lengkap}}</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th>Nama Ayah :</th>
                                    <td>
                                        {{ $data->wali_santri->first()->nama_ayah }}
                                    </td>
                                    <td></td>




                                </tr>
                                <tr>
                                    <th>Nama Ibu :</th>
                                    <td> {{ $data->wali_santri->first()->nama_ibu }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Tanggal-Lahir :</th>
                                    <td> {{$data->tgl_lahir}}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>No hp :</th>
                                    <td> {{$data->no_hp}}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Alamat :</th>
                                    <td>{{ $data->wali_santri->first()->alamat }} </td>
                                    <td></td>
                                </tr>

                            </table>
                        </div>
                        {{-- data wali santri --}}
                        <div class="accordion border-none" id="accordionExample">
                            <div class="accordion-item border-none">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <b> Data Wali Santri</b>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="border-none accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tr>
                                                    <th>Nama Ayah :</th>
                                                    <td>{{$data->wali_santri->first()->nama_ayah}} </td>
                                                </tr>
                                                <tr>
                                                    <th>Tempat Tanggal lahir ayah :</th>
                                                    <td> {{$data->wali_santri->first()->tmp_lahir_a}},
                                                        {{$data->wali_santri->first()->tgl_lahir_a}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Telp Ayah :</th>
                                                    <td> {{$data->wali_santri->first()->no_hp_a}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Pekerjaan Ayah :</th>
                                                    <td>
                                                        {{ $data->wali_santri->first()->pkj_a }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Penghasilan Ayah :</th>
                                                    <td> {{ $data->wali_santri->first()->phs_a }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Nama Ibu :</th>
                                                    <td> {{$data->wali_santri->first()->nama_ibu}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Tempat Tanggal lahir Ibu :</th>
                                                    <td> {{$data->wali_santri->first()->tmp_lahir_i}},
                                                        {{$data->wali_santri->first()->tgl_lahir_i}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Telp Ibu :</th>
                                                    <td> {{$data->wali_santri->first()->no_hp_i}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Pekerjaan Ibu :</th>
                                                    <td>
                                                        {{ $data->wali_santri->first()->pkj_i }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Penghasilan Ibu :</th>
                                                    <td> {{ $data->wali_santri->first()->phs_i }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Alamat :</th>
                                                    <td>{{ $data->wali_santri->first()->alamat}} </td>
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
                            <p align="left" class="text-dark"><i class="fa fa-phone-square" aria-hidden="true"></i>
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