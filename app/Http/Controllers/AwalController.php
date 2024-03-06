<?php

namespace App\Http\Controllers;

use App\Models\Awal;
use App\Models\Santri;
use Illuminate\Http\Request;

class AwalController extends Controller
{
    public function index()
    {
        $no = 1;
        $data = Santri::all();
        return view('welcome', compact('data','no'));
    }

    public function about()
    {
        return view('about');
    }
}
