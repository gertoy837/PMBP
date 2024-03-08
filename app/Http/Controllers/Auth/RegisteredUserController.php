<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Santri;
use App\Models\User;
use App\Models\Wali_santri;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => ['required', 'string', 'max:100', 'unique:' . User::class],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

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
        $rapot1 = $ijazah->getClientOriginalName();
        $rapot->move(public_path() . '/upload', $rapot1);

        $santri = Santri::create([
            'nama_lengkap' => $request->nama,
            'nama_panggil' => $request->panggil,
            'nik' => $request->nik,
            'nisn' => $request->nisn,
            'tmp_lahir' => $request->tmp,
            'tgl_lahir' => $request->tgl,
            'no_hp' => $request->hp,
            'kk' => $kk1,
            'foto' => $foto1,
            'ijazah' => $ijazah1,
            'rapot' => $rapot1,
            'gel_id' => $gel,
        ]);

        $wali_santri = Wali_santri::create([
            'nama_ayah' => $request->nama_a,
            'tmp_lahir_a' => $request->tmp_a,
            'tgl_lahir_a' => $request->tgl_a,
            'no_hp_a' => $request->no_hp_a,
            'pkj_a' => $request->pkj_a,
            'phs_a' => $request->phs_a,
            'nama_ibu' => $request->nama_i,
            'tmp_lahir_i' => $request->tmp_i,
            'tgl_lahir_i' => $request->tgl_i,
            'no_hp_i' => $request->no_hp_i,
            'pkj_i' => $request->pkj_i,
            'phs_i' => $request->phs_i,
            'alamat' => $request->alamat,
            'santri_id' =>  $santri->id,
        ]);

        event(new Registered($user));

        Auth::login($user);

        // event(new Registered([$user,$santri,$wali_santri]));

        // Auth::login([$user, $santri, $wali_santri]);

        // event(new Registered($santri));

        // Auth::login($santri);

        // event(new Registered($wali_santri));

        // Auth::login($wali_santri);

        return redirect(RouteServiceProvider::HOME);
    }
}
