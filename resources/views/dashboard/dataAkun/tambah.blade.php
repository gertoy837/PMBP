@extends('dashboard/template')
@section('navside')
    <li class="nav-item">
        <a class="nav-link rounded-3 collapsed" href="{{ route('dashboard') }}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
        <a class="nav-link rounded-3 " href="{{ route('dataAkun.index') }}">
            <i class="bi bi-layout-text-window-reverse"></i><span>Data Akun</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link rounded-3 collapsed" href="{{ route('santri') }}">
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
                <li class="breadcrumb-item"><a href="{{ route('dataAkun.index') }}">Data Akun</a></li>
                <li class="breadcrumb-item active">Tambah Data Akun</li>
            </ol>
        </nav>
    </div>
@endsection
@section('konten')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="filter mx-4 mt-3">
                        <a class="icon" href="{{ route('dataAkun.index') }}"><button class="btn btn-outline-dark"><i
                                    class="bi bi-chevron-double-left"></i> Kembali</button></a>
                    </div>
                    <div class="card-body">
                        <p class="card-title fs-5 fw-bold">Data Akun</p>

                        <!-- form mulai -->
                        <form action="{{ route('dataAkun.store')}}" method="post">
                            @csrf
                            <div class="row row-cols-3">
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">name</h5>
                                        <input type="text" name="name" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Username</h5>
                                        <input type="text" name="username" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Email</h5>
                                        <input type="email" name="email" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Password</h5>
                                        <input type="text" name="password" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Role</h5>
                                        <select class="form-select" name="role">
                                            <option hidden></option>
                                            <option value="admin">admin</option>
                                            <option value="user">user</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Santri</h5>
                                        <select class="form-select" name="nama_lengkap">
                                            <option hidden></option>
                                            @foreach ($santri as $san)
                                                <option value="<?= $san['nama_lengkap'] ?>"><?= $san['nama_lengkap'] ?>
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-outline-success float-end me-4 mt-3" name="simpan"><i
                                    class="bi bi-save2"></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
