<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Santri;
use Illuminate\Support\Str;
use App\Models\Wali_santri;

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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
