@extends('dashboard/template')
@section('navside')
    <li class="nav-item">
        <a class="nav-link rounded-3 collapsed" href="{{ route('dashboard') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
        <a class="nav-link rounded-3 collapsed" href="#">
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
                <li class="breadcrumb-item active">Edit Data Santri {{ $data->santri->nama_lengkap }}</li>
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
                    <div class="filter mx-4 mt-3">
                        <a class="icon" href="{{ route('dataWaliSantri.show', $data->id)}}"><button class="btn btn-outline-dark"><i
                                    class="bi bi-chevron-double-left"></i>
                                Kembali</button></a>
                    </div>
                    <div class="card-body">

                        <h5 class="card-title fs-3 fw-bold text-center mb-5">
                            <?= $data->santri['nama_lengkap'] ?>
                        </h5>


                        <!-- form mulai -->
                        <form action="{{ route('dataWaliSantri.update', $data->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') 
                            <p class="card-title fs-5 fw-bold">Data Wali Santri</p>
                            <div class="row row-cols-3">
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Nama Ayah</h5>
                                        <input type="text" name="nama_ayah" class="form-control" id=""
                                            value="<?= $data['nama_ayah'] ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Tempat Lahir</h5>
                                        <input type="text" name="tmp_lahir_a" class="form-control" id=""
                                            value="<?= $data['tmp_lahir_a'] ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Tanggal Lahir</h5>
                                        <input type="text" name="tgl_lahir_a" class="form-control" id=""
                                            value="<?= $data['tgl_lahir_a'] ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">No Hp Ayah</h5>
                                        <input type="text" name="no_hp_a" class="form-control" id=""
                                            value="<?= $data['no_hp_a'] ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Pekerjaan Ayah</h5>
                                        <select class="form-select" name="pkj_a">
                                            <option hidden></option>
                                            <option <?php echo $data['pkj_a'] == 1 ? 'selected' : ''; ?> value="1">Belum/ Tidak Bekerja</option>
                                            <option <?php echo $data['pkj_a'] == 2 ? 'selected' : ''; ?> value="2">Mengurus Rumah Tangga</option>
                                            <option <?php echo $data['pkj_a'] == 3 ? 'selected' : ''; ?> value="3">Pegawai Negeri Sipil</option>
                                            <option <?php echo $data['pkj_a'] == 4 ? 'selected' : ''; ?> value="4">TNI/ Polri</option>
                                            <option <?php echo $data['pkj_a'] == 5 ? 'selected' : ''; ?> value="5">Guru/ Dosen</option>
                                            <option <?php echo $data['pkj_a'] == 6 ? 'selected' : ''; ?> value="6">Karyawan Swasta</option>
                                            <option <?php echo $data['pkj_a'] == 7 ? 'selected' : ''; ?> value="7">Karyawan BUMN</option>
                                            <option <?php echo $data['pkj_a'] == 8 ? 'selected' : ''; ?> value="8">Profesional</option>
                                            <option <?php echo $data['pkj_a'] == 9 ? 'selected' : ''; ?> value="9">Wiraswasta</option>
                                            <option <?php echo $data['pkj_a'] == 10 ? 'selected' : ''; ?> value="10">Buruh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Penghasilan Ayah</h5>
                                        <select class="form-select" name="phs_a">
                                            <option hidden></option>
                                            <option <?php echo $data['phs_a'] == 1 ? 'selected' : ''; ?> value="1">-</option>
                                            <option <?php echo $data['phs_a'] == 2 ? 'selected' : ''; ?> value="2">
                                                < 2 Juta</option>
                                            <option <?php echo $data['phs_a'] == 3 ? 'selected' : ''; ?> value="3">2 - 5 Juta</option>
                                            <option <?php echo $data['phs_a'] == 4 ? 'selected' : ''; ?> value="4">5 - 10 Juta</option>
                                            <option <?php echo $data['phs_a'] == 5 ? 'selected' : ''; ?> value="5">> 10 Juta</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-cols-3 mt-3">
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Nama Ibu</h5>
                                        <input type="text" name="nama_ibu" class="form-control" id=""
                                            value="<?= $data['nama_ibu'] ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Tempat Lahir</h5>
                                        <input type="text" name="tmp_lahir_i" class="form-control" id=""
                                            value="<?= $data['tmp_lahir_i'] ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Tanggal Lahir</h5>
                                        <input type="text" name="tgl_lahir_i" class="form-control" id=""
                                            value="<?= $data['tgl_lahir_i'] ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">No Hp Ibu</h5>
                                        <input type="text" name="no_hp_i" class="form-control" id=""
                                            value="<?= $data['no_hp_i'] ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Pekerjaan Ibu</h5>
                                        <select class="form-select" name="pkj_i">
                                            <option hidden></option>
                                            <option <?php echo $data['pkj_i'] == 1 ? 'selected' : ''; ?> value="1">Belum/ Tidak Bekerja</option>
                                            <option <?php echo $data['pkj_i'] == 2 ? 'selected' : ''; ?> value="2">Mengurus Rumah Tangga</option>
                                            <option <?php echo $data['pkj_i'] == 3 ? 'selected' : ''; ?> value="3">Pegawai Negeri Sipil</option>
                                            <option <?php echo $data['pkj_i'] == 4 ? 'selected' : ''; ?> value="4">TNI/ Polri</option>
                                            <option <?php echo $data['pkj_i'] == 5 ? 'selected' : ''; ?> value="5">Guru/ Dosen</option>
                                            <option <?php echo $data['pkj_i'] == 6 ? 'selected' : ''; ?> value="6">Karyawan Swasta</option>
                                            <option <?php echo $data['pkj_i'] == 7 ? 'selected' : ''; ?> value="7">Karyawan BUMN</option>
                                            <option <?php echo $data['pkj_i'] == 8 ? 'selected' : ''; ?> value="8">Profesional</option>
                                            <option <?php echo $data['pkj_i'] == 9 ? 'selected' : ''; ?> value="9">Wiraswasta</option>
                                            <option <?php echo $data['pkj_i'] == 10 ? 'selected' : ''; ?> value="10">Buruh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Penghasilan Ibu</h5>
                                        <select class="form-select" name="phs_i">
                                            <option hidden></option>
                                            <option <?php echo $data['phs_i'] == 1 ? 'selected' : ''; ?> value="1">-</option>
                                            <option <?php echo $data['phs_i'] == 2 ? 'selected' : ''; ?> value="2">
                                                < 2 Juta</option>
                                            <option <?php echo $data['phs_i'] == 3 ? 'selected' : ''; ?> value="3">2 - 5 Juta</option>
                                            <option <?php echo $data['phs_i'] == 4 ? 'selected' : ''; ?> value="4">5 - 10 Juta</option>
                                            <option <?php echo $data['phs_i'] == 5 ? 'selected' : ''; ?> value="5">> 10 Juta</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">Alamat <i class="fa fa-location-dot"></i></h5>
                                    <textarea name="alamat" id="" cols="20" rows="5" class="form-control"><?= $data['alamat'] ?></textarea>
                                </div>
                            </div>
                            <button class="btn btn-outline-success float-end me-4 mt-3" name="simpan" type="submit"><i
                                    class="bi bi-save2"></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
