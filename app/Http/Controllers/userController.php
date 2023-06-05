<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.user_2.user_pendaftaran_martumpol');
    }

    public function daftarMartumpol(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8070/api/daftarMartumpol', [
            'nama_gereja_laki' => $request->get('nama_gereja_laki'),
            'id_jemaat_laki' => $request->get('id_jemaat_laki'),
            'nama_ayah_laki' => $request->get('nama_ayah_laki'),
            'nama_ibu_laki' => $request->get('nama_ibu_laki'),
            'nama_gereja_perempuan' => $request->get('nama_gereja_perempuan'),
            'id_jemaat_perempuan' => $request->get('id_jemaat_perempuan'),
            'nama_ayah_perempuan' => $request->get('nama_ayah_perempuan'),
            'nama_ibu_perempuan' => $request->get('nama_ibu_perempuan'),
            'keterangan' => $request->get('keterangan'),
            // 'alamat' => $request->get('alamat'),
        ]);
    
        if ($response->failed()) {
            return back()->withErrors(['message' => 'error when create Baptis data']);
        }
    
        return redirect()->route('martumpolUser');
    }

    public function index2()
    {
        return view('layouts.user_2.user_pendaftaran_baptis');
    }

    public function daftarBaptis(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8070/api/daftarBaptis', [
            'nama_lengkap' => $request->get('nama_lengkap'),
            'nama_ayah' => $request->get('nama_ayah'),
            'nama_ibu' => $request->get('nama_ibu'),
            'tempat_lahir' => $request->get('tempat_lahir'),
            'tanggal_lahir' => $request->get('tanggal_lahir'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'alamat' => $request->get('alamat'),
            'keterangan' => $request->get('keterangan'),
        ]);
    
        if ($response->failed()) {
            return back()->withErrors(['message' => 'error when create Baptis data']);
        }
    
        return redirect()->route('baptisUser');
    }

    public function index3()
    {
        return view('layouts.user_2.user_pendaftaran_jemaat');
    }

    public function daftarJemaat(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8070/api/daftarJemaat', [
            'nama_depan' => $request->get('nama_depan'),
            'nama_belakang' => $request->get('nama_belakang'),
            'gelar_depan' => $request->get('gelar_depan'),
            'gelar_belakang' => $request->get('gelar_belakang'),
            'tempat_lahir' => $request->get('tempat_lahir'),
            'tanggal_lahir' => $request->get('tanggal_lahir'),
            'gol_darah' => $request->get('gol_darah'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'id_hub_keluarga' => $request->get('id_hub_keluarga'),
            'id_status_pernikahan' => $request->get('id_status_pernikahan'),
            'id_pendidikan' => $request->get('id_pendidikan'),
            'id_bidang_pendidikan' => $request->get('id_bidang_pendidikan'),
            'id_bidang_pendidikan_lain' => $request->get('id_bidang_pendidikan_lain'),
            'id_pekerjaan' => $request->get('id_pekerjaan'),
            'nama_pekerjaan_lain' => $request->get('nama_pekerjaan_lain'),
            'no_telepon' => $request->get('no_telepon'),
            'alamat' => $request->get('alamat'),
            'keterangan' => $request->get('keterangan')
        ]);
    
        if ($response->failed()) {
            return back()->withErrors(['message' => 'error when create Baptis data']);
        }
    
        return redirect()->route('jemaatUser');
    }

    public function index4()
    {
        return view('layouts.user_2.user_pendaftaran_pernikahan');
    }

    public function daftarNikah(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8070/api/daftarNikah', [
            'tgl_martumpol' => $request->get('tgl_martumpol'),
            'nama_gereja_martumpol' => $request->get('nama_gereja_martumpol'),
            'tgl_pemberkatan' => $request->get('tgl_pemberkatan'),
            'nama_gereja_pemberkatan' => $request->get('nama_gereja_pemberkatan'),
            'nama_gereja_laki' => $request->get('nama_gereja_laki'),
            'nama_ayah_laki' => $request->get('nama_ayah_laki'),
            'nama_ibu_laki' => $request->get('nama_ibu_laki'),
            'nama_gereja_perempuan' => $request->get('nama_gereja_perempuan'),
            'nama_ayah_perempuan' => $request->get('nama_ayah_perempuan'),
            'nama_ibu_perempuan' => $request->get('nama_ibu_perempuan'),
            'keterangan' => $request->get('keterangan')
        ]);
    
        if ($response->failed()) {
            return back()->withErrors(['message' => 'error when create Baptis data']);
        }
    
        return redirect()->route('nikahUser');
    }

    public function index5()
    {
        return view('layouts.user_2.user_pindah');
    }

    public function daftarPindah(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8070/api/daftarJemaat', [
            'id_registrasi' => $request->get('id_registrasi'),
            'id_jemaat' => $request->get('id_jemaat'),
            'tgl_pindah' => $request->get('tgl_pindah'),
            'id_gereja_tujuan' => $request->get('id_gereja_tujuan'),
            'nama_gereja' => $request->get('nama_gereja'),
            'keterangan' => $request->get('keterangan')
        ]);
    
        if ($response->failed()) {
            return back()->withErrors(['message' => 'error when create Baptis data']);
        }
    
        return redirect()->route('jemaatUser');
    }

    public function index6()
    {
        return view('layouts.user_2.user_pendaftaran_naik_sidi');
    }

    public function daftarSidi(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8070/api/daftarSidi', [
            'nama_lengkap' => $request->get('nama_lengkap'),
            'nama_ayah' => $request->get('nama_ayah'),
            'nama_ibu' => $request->get('nama_ibu'),
            'tempat_lahir' => $request->get('tempat_lahir'),
            'tanggal_lahir' => $request->get('tanggal_lahir'),
            'nama_gereja_non_hkbp' => $request->get('nama_gereja_non_hkbp'),
            'keterangan' => $request->get('keterangan')
            // 'alamat' => $request->get('alamat'),
        ]);
    
        if ($response->failed()) {
            return back()->withErrors(['message' => 'error when create Baptis data']);
        }
    
        return redirect()->route('sidiUser');
    }

    public function index7()
    {
        return view('layouts.user_2.userHome');
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
