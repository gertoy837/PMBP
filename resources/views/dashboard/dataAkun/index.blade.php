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
        <a class="nav-link rounded-3 collapsed" href="{{ route('dataWaliSantri.index')}}">
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
                <li class="breadcrumb-item active">Data Akun</li>
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
                            <a href="{{ route('dataAkun.create')}}"><button class="btn btn-outline-primary">Tambah</button></a>
                        </div>
                        <h5 class="card-title">Data Akun</h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Dibuat</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $log)
                                    <tr>
                                        <td><?= ++$no ?></td>
                                        <td><?= $log['name'] ?></td>
                                        <td><?= $log['username'] ?></td>
                                        <td><?= $log['email'] ?></td>
                                        <td><?= $log['role'] ?></td>
                                        <td>{{ $log->created_at->diffForHumans() }}</td>
                                        <td>
                                            <div class="filter">
                                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                        class="bi bi-three-dots"></i></a>
                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow border">

                                                    <li><a class="dropdown-item"
                                                            href="{{ route('dataAkun.show', $log->id) }}">Detail</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('dataAkun.edit', $log->id) }}">Edit</a></li>
                                                    <li><form action="{{ route('dataAkun.destroy', $log->id) }}" class="d-inline"
                                                        method="POST">
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
                        <!-- End Table with stripped rows -->
                        {!! $data->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
