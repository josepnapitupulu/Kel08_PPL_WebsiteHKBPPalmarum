<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sentralisasiController extends Controller
{
    public function index()
    {
        return view('layouts.forms.setSentralisasi');
    }

    public function index2()
    {
        return view('layouts.forms.detailSentralisasi');
    }
}
