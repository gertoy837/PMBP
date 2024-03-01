<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    public $santri;
    public function __construct()
    {
        $this->santri = new Santri();
    }
    public function index()
    {
        $data = Santri::paginate(5);
        $no = 5 * ($data->currentPage() - 1); 
        return view('dashboard/dataSantri/index', compact('data', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Santri::with('Wali_santri')->findOrFail($id);
        return view('dashboard/dataSantri/show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Santri::with('Wali_santri')->findOrFail($id);
        return view('dashboard/dataSantri/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $update = Santri::findOrFail($id);
        $rules = [
            'judul' => 'required|min:3',
            'penulis' => 'required',
            'kategori' => 'required',
            'sampul' => 'mimes:jpg,png|max:201'
        ];
        $message = [
            'required' => ':attribute gak boleh kosong masseh',
            'max' => ':attribute ukuran/jumlah tidak sesuai',
            'min' => ':attribute terlalu pendek',
            'mimes' => 'ekstensi file tidak didukung, silakan gunakan (.jpg/.png)',
        ];

        $this->validate($request, $rules, $message);

        // gimana kalau gambarnya kosong
        if (!$request->foto && !$request->kk && !$request->izajah && !$request->rapot) {
            $update->nik = $request->nik;
            $update->nisn = $request->nisn;
            $update->nama_lengkap = $request->nama_lengkap;
            $update->nama_panggil = $request->nama_panggil;
            $update->tmp_lahir = $request->tmp_lahir;
            $update->tgl_lahir = $request->tgl_lahir;
            $update->no = $request->no;
            $update->save();
            return redirect()->route('buku.index');
        } 
        // gimana kalau nama gambarnya sama sedangkan wujud gambarnya berbeda?
        // replace gambar -
        if ($request->sampul) {

        }

        $foto = $request->foto;
        $kk = $request->kk;
        $ijazah = $request->izajah;
        $rapot = $request->rapot;
        $namaFoto = time() .rand(100, 999).".". $foto->getClientOriginalExtension();
        $foto->move(public_path() . '/upload', $namaFoto);
        
        $update->nik = $request->nik;
        $update->nisn = $request->nisn;
        $update->nama_lengkap = $request->nama_lengkap;
        $update->nama_panggil = $request->nama_panggil;
        $update->tmp_lahir = $request->tmp_lahir;
        $update->tgl_lahir = $request->tgl_lahir;
        $update->no = $request->no;
        $update->save();
        return redirect()->route('buku.index');
        
        // $update->sampul;



        // $this->buku->judul = $request->judul;
        // $this->buku->penulis = $request->penulis;
        // $this->buku->deskripsi = $request->deskripsi;
        // $this->buku->kategori_id = $request->kategori;

        // $this->buku->save();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Santri $santri)
    {
        //
    }
}
