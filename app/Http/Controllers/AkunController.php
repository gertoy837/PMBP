<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Santri;
use Illuminate\Http\Request;

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

        $akun->name = $request->name;
        $akun->username = $request->username;
        $akun->email = $request->email;
        $akun->password = $request->password;
        $akun->role = $request->role;

        $akun->save();
        return redirect()->route('dataAkun.index');
    }

    public function destroy($dataAkun)
    {
        $hapus = User::findOrFail($dataAkun);
        $hapus->delete();
        return back();
    }
}
