<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Santri;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AkunController extends Controller
{
    public $akun;
    public function __construct()
    {
        $this->akun = new User();
    }
    public function index()
    {
        $data = User::paginate(5);
        $no = 5 * ($data->currentPage() - 1);
        return view('dashboard/dataAkun/index', compact('data', 'no'));
    }

    public function create()
    {
        $santri = Santri::all();
        return view('dashboard/dataAkun/tambah', compact('santri'));
    }

    public function store(Request $request)
    {
        if (!$request->nama_lengkap) {
            $this->akun->name = $request->name;
            $this->akun->username = $request->username;
            $this->akun->email = $request->email;
            $this->akun->password = $request->password;
            $this->akun->role = $request->role;

            $this->akun->save();
        } else {
            $this->akun->name = $request->nama_lengkap;
            $this->akun->username = $request->username;
            $this->akun->email = $request->email;
            $this->akun->password = $request->password;
            $this->akun->role = $request->role;
    
            $this->akun->save();
        }
        Alert::success('Success Title', 'Data Berhasil Ditambahkan');
        return redirect()->route('dataAkun.index');
    }

    public function show($dataAkun)
    {
        $data = User::with('santri')->findOrFail($dataAkun);
        return view('dashboard/dataAkun/show', compact('data'));
    }

    public function edit($dataAkun)
    {
        $data = User::with('santri')->findOrFail($dataAkun);
        $santri = Santri::all();
        return view('dashboard/dataAkun/edit', compact('data', 'santri'));
    }

    public function update(Request $request, $dataAkun)
    {
        $akun = User::findOrFail($dataAkun);
        if (!$request->name) {
            $akun->name = $request->nama;
        } else {
            $akun->name = $request->name;
        }
        $akun->username = $request->username;
        $akun->email = $request->email;
        $akun->password = $request->password;
        $akun->role = $request->role;

        if ($akun->isDirty()) {
            $akun->save();
            Alert::success('Successfull', 'Data Berhasil di Ubah');
        } else {
            Alert::info('Info', 'Tidak ada perubahan data');
        }
        return redirect()->route('dataAkun.index');
    }

    public function destroy($dataAkun)
    {
        $hapus = User::findOrFail($dataAkun);
        $hapus->delete();
        Alert::success('Successfull', 'Data Berhasil di Hapus');
        return back();
    }
}
