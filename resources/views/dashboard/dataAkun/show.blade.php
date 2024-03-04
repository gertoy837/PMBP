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
                <li class="breadcrumb-item active">Detail Data Akun {{ $data->name }}</li>
            </ol>
        </nav>
    </div>
@endsection
@section('konten')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="filter d-flex justify-content-between me-4 mx-4 mt-3">
                        <a class="icon" href="{{ route('dataAkun.index') }}"><button class="btn btn-outline-dark"><i
                                    class="bi bi-chevron-double-left"></i> Kembali</button></a>
                        <a class="icon" href="{{ route('dataAkun.edit', $data->id) }}"><button class="btn btn-outline-info"><i
                                    class="bi bi-pencil"></i> Edit</button></a>
                    </div>
                    <div class="card-body">
                        <p class="card-title fs-5 fw-bold">Data Akun</p>
                        <div class="row row-cols-3">
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">Nama</h5>
                                    <div class="img-thumbnail">
                                        <span class="p-2 "><?= $data['name'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">Username</h5>
                                    <div class="img-thumbnail">
                                        <span class="p-2 "><?= $data['username'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">Email</h5>
                                    <div class="img-thumbnail">
                                        <span class="p-2"><?= $data['email'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">Password</h5>
                                    <div class="img-thumbnail">
                                        <span class="p-2"><?= $data['password'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="mx-1 fw-bold">Role</h5>
                                    <div class="img-thumbnail">
                                        <span class="p-2">{{ $data->role }}</span>
                                    </div>
                                </div>
                            </div>
                            @if ($data->role == 'user')
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="mx-1 fw-bold">Santri</h5>
                                        <div class="img-thumbnail">
                                            <span class="p-2"><?= $data->santri->nama_lengkap ?></span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
