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
    public function show(Awal $Awal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Awal $Awal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Awal $Awal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Awal $Awal)
    {
        //
    }
}
