@extends('dashboard/template')
@section('navside')
    <li class="nav-item">
        <a class="nav-link rounded-3 collapsed" href="{{ route('dashboard') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
        <a class="nav-link rounded-3 collapsed" href="{{ route('dataAkun.index') }}">
            <i class="bi bi-layout-text-window-reverse"></i><span>Data Akun</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link rounded-3 collapsed" href="{{ route('santri') }}">
            <i class="bi bi-layout-text-window-reverse"></i><span>Data Santri</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link rounded-3 " href="{{ route('dataWaliSantri.index') }}">
            <i class="bi bi-layout-text-window-reverse"></i><span>Data Wali Santri</span>
        </a>
    </li>
@endsection
@section('nav')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('santri') }}">Data Santri</a></li>
                <li class="breadcrumb-item active">Detail Data {{ $data->santri->nama_lengkap }}</li>
            </ol>
        </nav>
    </div>
@endsection
@php
$rapot = $data->santri->rapot;
$kk = $data->santri->kk;
$ijazah = $data->santri->ijazah;
$foto = $data->santri->foto;
@endphp
@section('konten')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="filter d-flex justify-content-between me-4 mx-4 mt-3">
                        <a class="icon" href="{{ route('dataWaliSantri.index') }}"><button class="btn btn-outline-dark"><i
                                    class="bi bi-chevron-double-left"></i> Kembali</button></a>
                        <a class="icon" href="{{ route('dataWaliSantri.edit', $data->id) }}"><button class="btn btn-outline-info"><i
                                    class="bi bi-pencil"></i> Edit</button></a>
                    </div>
                    <div class="card-body">
                        <img src="{{ asset("upload/$foto") }}"
                        class="rounded-circle mx-auto d-block object-fit-cover img-thumbnail mt-5 mb-4"
                        style="width: 15%;" alt="...">
                        <h5 class="card-title fs-3 fw-bold text-center mb-5"><?= $data->santri->nama_lengkap ?></h5>
                        <p class="card-title fs-5 fw-bold">Data Wali Santri</p>
                        <div class="row row-cols-3">
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">Nama Ayah</h5>
                                    <div class="img-thumbnail">
                                        <span class="p-2"><?= $data['nama_ayah'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">Tempat Tanggal Lahir</h5>
                                    <div class="img-thumbnail">
                                        <span class="p-2"><?= $data['tmp_lahir_a'], ', ', $data['tgl_lahir_a'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">No Hp Ayah</h5>
                                    <div class="img-thumbnail">
                                        <span class="p-2"><?= $data['no_hp_a'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">Pekerjaan Ayah</h5>
                                    <div class="img-thumbnail">
                                        <span class="p-2">
                                            <?php
                                            if ($data['pkj_a'] == 1) {
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
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">Penghasilan Ayah</h5>
                                    <div class="img-thumbnail">
                                        <span class="p-2">
                                            <?php
                                            if ($data['phs_a'] == 1) {
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
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-3 mt-3">
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">Nama Ibu</h5>
                                    <div class="img-thumbnail">
                                        <span class="p-2"><?= $data['nama_ibu'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">Tempat Tanggal Lahir</h5>
                                    <div class="img-thumbnail">
                                        <span class="p-2"><?= $data['tmp_lahir_i'], ', ', $data['tgl_lahir_i'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">No Hp Ibu</h5>
                                    <div class="img-thumbnail">
                                        <span class="p-2"><?= $data['no_hp_i'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">Pekerjaan Ibu</h5>
                                    <div class="img-thumbnail">
                                        <span class="p-2">
                                            <?php
                                            if ($data['pkj_i'] == 1) {
                                                echo 'Belum/ Tidak Bekerja';
                                            } elseif ($data['pkj_i'] == 2) {
                                                echo 'Mengurus Rumah Tangga';
                                            } elseif ($data['pkj_i'] == 3) {
                                                echo 'Pegawai Negeri Sipil';
                                            } elseif ($data['pkj_i'] == 4) {
                                                echo 'TNI/ Polri';
                                            } elseif ($data['pkj_i'] == 5) {
                                                echo 'Guru/ Dosen';
                                            } elseif ($data['pkj_i'] == 6) {
                                                echo 'Karyawan Swasta';
                                            } elseif ($data['pkj_i'] == 7) {
                                                echo 'Karyawan BUMN';
                                            } elseif ($data['pkj_i'] == 8) {
                                                echo 'Profesional';
                                            } elseif ($data['pkj_i'] == 9) {
                                                echo 'Wiraswasta';
                                            } else {
                                                echo 'Buruh';
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">Penghasilan Ibu</h5>
                                    <div class="img-thumbnail">
                                        <span class="p-2">
                                            <?php
                                            if ($data['phs_i'] == 1) {
                                                echo '-';
                                            } elseif ($data['phs_i'] == 2) {
                                                echo '< 2 Juta';
                                            } elseif ($data['phs_i'] == 3) {
                                                echo '2 - 5 Juta';
                                            } elseif ($data['phs_i'] == 4) {
                                                echo '5 - 10 Juta';
                                            } else {
                                                echo '> 10 Juta';
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h5 class="mx-1 fw-bold">Alamat</h5>
                                <div class="img-thumbnail">
                                    <span class="p-2"><?= $data['alamat'] ?></span>
                                </div>
                            </div>
                        </div>
                        <p class="card-title fs-5 fw-bold">Data Santri</p>
                        <div class="row row-cols-3">
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">NIK</h5>
                                    <div class="img-thumbnail">
                                        <span class="p-2 "><?= $data->santri->nik ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">NISN</h5>
                                    <div class="img-thumbnail">
                                        <span class="p-2"><?= $data->santri->nisn ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">Nama Lengkap</h5>
                                    <div class="img-thumbnail">
                                        <span class="p-2"><?= $data->santri->nama_lengkap ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">Nama Panggilan</h5>
                                    <div class="img-thumbnail">
                                        <span class="p-2"><?= $data->santri->nama_panggil ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">Tempat Tanggal Lahir</h5>
                                    <div class="img-thumbnail">
                                        <span
                                            class="p-2"><?= $data->santri->tmp_lahir, ', ', $data->santri->tgl_lahir ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">No Hp</h5>
                                    <div class="img-thumbnail">
                                        <span class="p-2"><?= $data->santri->no_hp ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-title fs-5 fw-bold">Berkas Santri</p>
                        <div class="row row-cols-3">
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="fw-bold">Kartu Keluarga :</h5>
                                    <img src="{{ asset("upload/$kk") }}" class="img-thumbnail" width="50%"
                                        alt="...">
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="fw-bold">Ijazah :</h5>
                                    <img src="{{ asset("upload/$ijazah") }}" class="img-thumbnail"
                                        width="50%" alt="...">
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="fw-bold">Rapot :</h5>
                                    <img src="{{ asset("upload/$rapot") }}" class="img-thumbnail"
                                        width="50%" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
