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
        <a class="nav-link rounded-3" href="{{ route('dataWaliSantri.index') }}">
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
                            <a href="{{ route('dataWaliSantri.create') }}"><button class="btn btn-outline-primary">Tambah</button></a>
                        </div>
                        <h5 class="card-title">Data Wali Santri</h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Ayah</th>
                                    <th>Tempat Tanggal Lahir</th>
                                    <th>No Hp</th>
                                    <th>Nama Ibu</th>
                                    <th>Tempat Tanggal Lahir</th>
                                    <th>No Hp</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $ws)
                                    <tr>
                                        <td><?= ++$no ?></td>
                                        <td><?= $ws['nama_ayah'] ?></td>
                                        <td><?= $ws['tmp_lahir_a'], ', ', $ws['tgl_lahir_a'] ?></td>
                                        <td><?= $ws['no_hp_a'] ?></td>
                                        <td><?= $ws['nama_ibu'] ?></td>
                                        <td><?= $ws['tmp_lahir_i'], ', ', $ws['tgl_lahir_i'] ?></td>
                                        <td><?= $ws['no_hp_i'] ?></td>
                                        <td>
                                            <div class="filter">
                                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                        class="bi bi-three-dots"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow border">

                                                    <li><a class="dropdown-item"
                                                            href="{{ route('dataWaliSantri.show', $ws->id) }}">Detail</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('dataWaliSantri.edit', $ws->id) }}">Edit</a></li>
                                                    <li>
                                                        <form action="{{ route('dataWaliSantri.destroy', $ws->id) }}"
                                                            class="d-inline" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit"
                                                                onclick="return confirm('Apakah mau di hapus?')"
                                                                class="dropdown-item">Hapus</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
