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
        <a class="nav-link rounded-3 " href="{{ route('santri') }}">
            <i class="bi bi-layout-text-window-reverse"></i><span>Data Santri</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link rounded-3 collapsed" href="{{ route('dataWaliSantri.index') }}">
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
                <li class="breadcrumb-item"><a href="{{ route('santri') }}">Data santri</a></li>
                <li class="breadcrumb-item active">Tambah Data Santri</li>
            </ol>
        </nav>
    </div>
@endsection
@section('konten')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="float-end me-2 mt-4">
                            <a href="{{ route('santri') }}"><button class="btn btn-dark">Kembali</button></a>
                        </div>
                        <p class="card-title fs-5 fw-bold">Data Santri</p>
                        <!-- form mulai -->
                        <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row row-cols-3">
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">NIK</h5>
                                        <input type="text" name="nik" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">NISN</h5>
                                        <input type="text" name="nisn" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Nama Lengkap</h5>
                                        <input type="text" name="nama" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Nama Panggilan</h5>
                                        <input type="text" name="panggil" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Tempat Lahir</h5>
                                        <input type="text" name="tmp" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Tanggal Lahir</h5>
                                        <input type="date" name="tgl" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">No Hp</h5>
                                        <input type="text" name="hp" class="form-control" id="">
                                    </div>
                                </div>
                            </div>
                            <p class="card-title fs-5 fw-bold">Data Wali Santri</p>
                            <div class="row row-cols-3">

                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Nama Ayah</h5>
                                        <input type="text" name="nama_a" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Tempat Lahir</h5>
                                        <input type="text" name="tmp_a" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Tanggal Lahir</h5>
                                        <input type="date" name="tgl_a" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">No Hp Ayah</h5>
                                        <input type="text" name="no_hp_a" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Pekerjaan Ayah</h5>
                                        <select class="form-select" name="pkj_a">
                                            <option hidden></option>
                                            <option value="1">Belum/ Tidak Bekerja</option>
                                            <option value="2">Mengurus Rumah Tangga</option>
                                            <option value="3">Pegawai Negeri Sipil</option>
                                            <option value="4">TNI/ Polri</option>
                                            <option value="5">Guru/ Dosen</option>
                                            <option value="6">Karyawan Swasta</option>
                                            <option value="7">Karyawan BUMN</option>
                                            <option value="8">Profesional</option>
                                            <option value="9">Wiraswasta</option>
                                            <option value="10">Buruh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Penghasilan Ayah</h5>
                                        <select class="form-select" name="phs_a">
                                            <option hidden></option>
                                            <option value="1">-</option>
                                            <option value="2">
                                                < 2 Juta</option>
                                            <option value="3">2 - 5 Juta</option>
                                            <option value="4">5 - 10 Juta</option>
                                            <option value="5">> 10 Juta</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-cols-3 mt-3">
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Nama Ibu</h5>
                                        <input type="text" name="nama_i" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Tempat Lahir</h5>
                                        <input type="text" name="tmp_i" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Tanggal Lahir</h5>
                                        <input type="date" name="tgl_i" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">No Hp Ibu</h5>
                                        <input type="text" name="no_hp_i" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Pekerjaan Ibu</h5>
                                        <select class="form-select" name="pkj_i">
                                            <option hidden></option>
                                            <option value="1">Belum/ Tidak Bekerja</option>
                                            <option value="2">Mengurus Rumah Tangga</option>
                                            <option value="3">Pegawai Negeri Sipil</option>
                                            <option value="4">TNI/ Polri</option>
                                            <option value="5">Guru/ Dosen</option>
                                            <option value="6">Karyawan Swasta</option>
                                            <option value="7">Karyawan BUMN</option>
                                            <option value="8">Profesional</option>
                                            <option value="9">Wiraswasta</option>
                                            <option value="10">Buruh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Penghasilan Ibu</h5>
                                        <select class="form-select" name="phs_i">
                                            <option hidden></option>
                                            <option value="1">-</option>
                                            <option value="2">
                                                < 2 Juta</option>
                                            <option value="3">2 - 5 Juta</option>
                                            <option value="4">5 - 10 Juta</option>
                                            <option value="5">> 10 Juta</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Alamat <i class="fa fa-location-dot"></i></h5>
                                        <textarea name="alamat" id="" cols="20" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <p class="card-title fs-5 fw-bold">Berkas Santri</p>
                            <div class="row row-cols-4">
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="fw-bold">Kartu Keluarga :</h5>
                                        <input type="file" name="kk" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="fw-bold">Foto :</h5>
                                        <input type="file" name="foto" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="fw-bold">Ijazah :</h5>
                                        <input type="file" name="ijazah" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="fw-bold">Rapot :</h5>
                                        <input type="file" name="rapot" class="form-control" id="">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-outline-success float-end me-4 mt-3" type="submit" name="simpan"><i
                                    class="bi bi-save2"></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
