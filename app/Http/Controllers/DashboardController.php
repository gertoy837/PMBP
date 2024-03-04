<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index()
    {
        $santri1 = Santri::all()->where('gel_id', '=', 1);
        $santri2 = Santri::all()->where('gel_id', '=', 2);
        $santri = Santri::with('Wali_santri')->paginate(5);
        $no = 5 * ($santri->currentPage() - 1); 
        return view('dashboard.dashboard', [
            'santri' => $santri,
            'santri1' => $santri1,
            'santri2' => $santri2,
            'no' => $no,
        ]);
    }

}
