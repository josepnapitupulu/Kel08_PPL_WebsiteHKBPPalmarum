<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.user_2.user_pendaftaran_martumpol');
    }

    public function index2()
    {
        return view('layouts.user_2.user_pendaftaran_baptis');
    }

    public function index3()
    {
        return view('layouts.user_2.user_pendaftaran_jemaat');
    }

    public function index4()
    {
        return view('layouts.user_2.user_pendaftaran_pernikahan');
    }

    public function index5()
    {
        return view('layouts.user_2.user_pindah');
    }

    public function index6()
    {
        return view('layouts.user_2.user_pendaftaran_naik_sidi');
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
