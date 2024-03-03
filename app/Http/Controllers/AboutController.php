<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Santri;
use App\Models\Wali_santri;

class AboutController extends Controller
{
    public function index($id)
    {
        $data = Santri::FindOrFail($id);
        // $wali = Wali_santri::FindOrFail($id);
        // $santri = Santri::all();
        // $wali =  Wali_santri::all();
        return view('user.profile', compact('data'));
    }

    public function home()
    {
        $data = Santri::all();
        // $wali = Wali_santri::FindOrFail($id);
        // $santri = Santri::all();
        // $wali =  Wali_santri::all();
        return view('welcome', compact('data'));
    }
}
