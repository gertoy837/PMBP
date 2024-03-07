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
                <li class="breadcrumb-item active">Data Santri</li>
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
                            <a href="{{ route('tambah') }}"><button class="btn btn-outline-primary">Tambah</button></a>
                        </div>
                        <h5 class="card-title">Data Santri</h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Tempat Tanggal Lahir</th>
                                    <th>No Hp</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $san)
                                    <tr>
                                        <td><?= ++$no ?></td>
                                        <td><?= $san['nisn'] ?></td>
                                        <td><?= $san['nik'] ?></td>
                                        <td><?= $san['nama_lengkap'] ?></td>
                                        <td><?= $san['tmp_lahir'], ', ', $san['tgl_lahir'] ?></td>
                                        <td><?= $san['no_hp'] ?></td>
                                        <td>
                                            <div class="filter">
                                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                        class="bi bi-three-dots"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow border">

                                                    <li><a class="dropdown-item"
                                                            href="{{ route('detail', $san->id) }}">Detail</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('edit', $san->id) }}">Edit</a></li>
                                                    <li>
                                                        <form action="{{ route('destroy', $san->id) }}" class="d-inline"
                                                            onclick="confirmDelete(event)" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="dropdown-item">Hapus</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $data->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
