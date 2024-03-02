<?php

namespace App\Http\Controllers;

use App\Models\Wali_santri;
use App\Models\Santri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WaliSantriController extends Controller
{
    public $ws;
    public function __construct()
    {
        $this->ws = new Wali_santri;
    }
    public function index()
    {
        $data = Wali_santri::paginate(5);
        $no = 5 * ($data->currentPage() - 1);
        return view('dashboard/dataWaliSantri/index', compact('data', 'no'));
    }

    public function create()
    {
        $data = Santri::all();
        return view('dashboard/dataWaliSantri/tambah', compact('data'));
    }

    public function store(Request $request)
    {
        $this->ws->nama_ayah = $request->nama_a;
        $this->ws->tmp_lahir_a = $request->tmp_a;
        $this->ws->tgl_lahir_a = $request->tgl_a;
        $this->ws->no_hp_a = $request->no_hp_a;
        $this->ws->pkj_a = $request->pkj_a;
        $this->ws->phs_a = $request->phs_a;
        $this->ws->nama_ibu = $request->nama_i;
        $this->ws->tmp_lahir_i = $request->tmp_i;
        $this->ws->tgl_lahir_i = $request->tgl_i;
        $this->ws->no_hp_i = $request->no_hp_i;
        $this->ws->pkj_i = $request->pkj_i;
        $this->ws->phs_i = $request->phs_i;
        $this->ws->alamat = $request->alamat;
        $this->ws->santri_id =  $request->nama;

        $this->ws->save();
        return redirect()->route('dataWaliSantri.index');
    }

    public function show($dataWaliSantri)
    {
        $data = Wali_santri::with('santri')->findOrFail($dataWaliSantri);
        return view('dashboard/dataWaliSantri/show', compact('data'));
    }

    public function edit($wali_santri)
    {
        $data = Wali_santri::with('santri')->findOrFail($wali_santri);
        return view('dashboard/dataWaliSantri/edit', compact('data'));
    }

    public function update(Request $request, $wali_santri)
    {
        $ws = Wali_santri::findOrFail($wali_santri);

        $ws->nama_ayah = $request->nama_ayah;
        $ws->tmp_lahir_a = $request->tmp_lahir_a;
        $ws->tgl_lahir_a = $request->tgl_lahir_a;
        $ws->no_hp_a = $request->no_hp_a;
        $ws->pkj_a = $request->pkj_a;
        $ws->phs_a = $request->phs_a;
        $ws->nama_ibu = $request->nama_ibu;
        $ws->tmp_lahir_i = $request->tmp_lahir_i;
        $ws->tgl_lahir_i = $request->tgl_lahir_i;
        $ws->no_hp_i = $request->no_hp_i;
        $ws->pkj_i = $request->pkj_i;
        $ws->phs_i = $request->phs_i;
        $ws->alamat = $request->alamat;
        
        $ws->save();
        return redirect()->route('dataWaliSantri.index');
    }

    public function destroy($wali_santri)
    {
        $hapus = Wali_santri::findOrFail($wali_santri);
        $hapus->delete();
        return back();
    }
}
