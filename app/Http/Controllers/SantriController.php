<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\Wali_santri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SantriController extends Controller
{
    public $santri;
    public $wali_santri;
  
    public function __construct()
    {
        $this->santri = new Santri();
        $this->wali_santri = new Wali_santri();
    }
    public function index()
    {
        $data = Santri::paginate(5);
        $no = 5 * ($data->currentPage() - 1);
        return view('dashboard/dataSantri/index', compact('data', 'no'));
    }

    public function create()
    {
        return view('dashboard/dataSantri/tambah');
    }

    public function store(Request $request)
    {
        $gel = rand(1, 2);
        $kk = $request->kk;
        $kk1 = $kk->getClientOriginalName();
        $kk->move(public_path() . '/upload', $kk1);

        $foto = $request->foto;
        $foto1 = $foto->getClientOriginalName();
        $foto->move(public_path() . '/upload', $foto1);

        $ijazah = $request->ijazah;
        $ijazah1 = $ijazah->getClientOriginalName();
        $ijazah->move(public_path() . '/upload', $ijazah1);

        $rapot = $request->rapot;
        $rapot1 = $rapot->getClientOriginalName();
        $rapot->move(public_path() . '/upload', $rapot1);

        $this->santri->nik = $request->nik;
        $this->santri->nisn = $request->nisn;
        $this->santri->nama_lengkap = $request->nama;
        $this->santri->nama_panggil = $request->panggil;
        $this->santri->tmp_lahir = $request->tmp;
        $this->santri->tgl_lahir = $request->tgl;
        $this->santri->no_hp = $request->hp;
        $this->santri->gel_id = $gel;
        $this->santri->kk = $kk1;
        $this->santri->foto = $foto1;
        $this->santri->ijazah = $ijazah1;
        $this->santri->rapot = $rapot1;

        $this->santri->save();

        $this->wali_santri->nama_ayah = $request->nama_a;
        $this->wali_santri->tmp_lahir_a = $request->tmp_a;
        $this->wali_santri->tgl_lahir_a = $request->tgl_a;
        $this->wali_santri->no_hp_a = $request->no_hp_a;
        $this->wali_santri->pkj_a = $request->pkj_a;
        $this->wali_santri->phs_a = $request->phs_a;
        $this->wali_santri->nama_ibu = $request->nama_i;
        $this->wali_santri->tmp_lahir_i = $request->tmp_i;
        $this->wali_santri->tgl_lahir_i = $request->tgl_i;
        $this->wali_santri->no_hp_i = $request->no_hp_i;
        $this->wali_santri->pkj_i = $request->pkj_i;
        $this->wali_santri->phs_i = $request->phs_i;
        $this->wali_santri->alamat = $request->alamat;
        $this->wali_santri->santri_id =  $this->santri->id;

        $this->wali_santri->save();
        return redirect()->route('santri');
    }

    public function show($id)
    {
        $data = Santri::with('Wali_santri')->findOrFail($id);
        return view('dashboard/dataSantri/show', compact('data'));
    }

    public function edit($id)
    {
        $data = Santri::with('Wali_santri')->findOrFail($id);
        return view('dashboard/dataSantri/edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $santri = Santri::with('Wali_santri')->findOrFail($id);

        // $rules = [
        //     'judul' => 'required|min:3',
        //     'penulis' => 'required',
        //     'kategori' => 'required',
        //     'sampul' => 'mimes:jpg,png|max:201'
        // ];
        // $message = [
        //     'required' => ':attribute gak boleh kosong masseh',
        //     'max' => ':attribute ukuran/jumlah tidak sesuai',
        //     'min' => ':attribute terlalu pendek',
        //     'mimes' => 'ekstensi file tidak didukung, silakan gunakan (.jpg/.png)',
        // ];

        // $this->validate($request, $rules, $message);

        if (!$request->foto && !$request->kk && !$request->izajah && !$request->rapot) {

            $santri->nik = $request->nik;
            $santri->nisn = $request->nisn;
            $santri->nama_lengkap = $request->nama_lengkap;
            $santri->nama_panggil = $request->nama_panggil;
            $santri->tmp_lahir = $request->tmp_lahir;
            $santri->tgl_lahir = $request->tgl_lahir;
            $santri->no_hp = $request->no;

            $santri->save();

            $santri->wali_santri->nama_ayah = $request->nama_ayah;
            $santri->wali_santri->tmp_lahir_a = $request->tmp_lahir_a;
            $santri->wali_santri->tgl_lahir_a = $request->tgl_lahir_a;
            $santri->wali_santri->no_hp_a = $request->no_hp_a;
            $santri->wali_santri->pkj_a = $request->pkj_a;
            $santri->wali_santri->phs_a = $request->phs_a;
            $santri->wali_santri->nama_ibu = $request->nama_ibu;
            $santri->wali_santri->tmp_lahir_i = $request->tmp_lahir_i;
            $santri->wali_santri->tgl_lahir_i = $request->tgl_lahir_i;
            $santri->wali_santri->no_hp_i = $request->no_hp_i;
            $santri->wali_santri->pkj_i = $request->pkj_i;
            $santri->wali_santri->phs_i = $request->phs_i;
            $santri->wali_santri->alamat = $request->alamat;

            $santri->wali_santri->save();

            return redirect()->route('santri');
        }
        if ($request->foto && $request->kk && $request->izajah && $request->rapot) {
        }

        $kk = $request->kk;
        $kk1 = $kk->getClientOriginalName();
        $kk->move(public_path() . '/upload', $kk1);

        $foto = $request->foto;
        $foto1 = $foto->getClientOriginalName();
        $foto->move(public_path() . '/upload', $foto1);

        $ijazah = $request->ijazah;
        $ijazah1 = $ijazah->getClientOriginalName();
        $ijazah->move(public_path() . '/upload', $ijazah1);

        $rapot = $request->rapot;
        $rapot1 = $rapot->getClientOriginalName();
        $rapot->move(public_path() . '/upload', $rapot1);

        $santri->nik = $request->nik;
        $santri->nisn = $request->nisn;
        $santri->nama_lengkap = $request->nama_lengkap;
        $santri->nama_panggil = $request->nama_panggil;
        $santri->tmp_lahir = $request->tmp_lahir;
        $santri->tgl_lahir = $request->tgl_lahir;
        $santri->no_hp = $request->no;
        $santri->kk = $kk1;
        $santri->foto = $foto1;
        $santri->ijazah = $ijazah1;
        $santri->rapot = $rapot1;

        $santri->save();

        $santri->wali_santri->nama_ayah = $request->nama_ayah;
        $santri->wali_santri->tmp_lahir_a = $request->tmp_lahir_a;
        $santri->wali_santri->tgl_lahir_a = $request->tgl_lahir_a;
        $santri->wali_santri->no_hp_a = $request->no_hp_a;
        $santri->wali_santri->pkj_a = $request->pkj_a;
        $santri->wali_santri->phs_a = $request->phs_a;
        $santri->wali_santri->nama_ibu = $request->nama_ibu;
        $santri->wali_santri->tmp_lahir_i = $request->tmp_lahir_i;
        $santri->wali_santri->tgl_lahir_i = $request->tgl_lahir_i;
        $santri->wali_santri->no_hp_i = $request->no_hp_i;
        $santri->wali_santri->pkj_i = $request->pkj_i;
        $santri->wali_santri->phs_i = $request->phs_i;
        $santri->wali_santri->alamat = $request->alamat;

        $santri->wali_santri->save();

        return redirect()->route('santri');
    }

    public function destroy($id)
    {
        $hapus = Santri::with('Wali_santri')->findOrFail($id);
        $path = 'upload/' . $hapus->kk;
        $path1 = 'upload/' . $hapus->foto;
        $path2 = 'upload/' . $hapus->ijazah;
        $path3 = 'upload/' . $hapus->rapot;
        if (File::exists($path) && File::delete($path1) && File::delete($path2) && File::delete($path3)) {
            File::delete($path);
            File::delete($path1);
            File::delete($path2);
            File::delete($path3);
        }
        $hapus->wali_santri->delete();
        $hapus->delete();
        return back();
    }
}
