<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.formSearch.dashbord');
});
Route::get('/pelayan', function () {
    return view('layouts.formSearch.pelayan');
});
Route::get('/daftarPelayan', function () {
    return view('layouts.forms.daftarPelayan');
});
Route::get('/updatePelayan', function () {
    return view('layouts.forms.updatePelayan');
});
Route::get('/detailPelayan', function () {
    return view('layouts.forms.detailPelayan');
});
Route::get('/daftarSidih', function () {
    return view('layouts.forms.daftarSidih');
});
Route::get('/detailSidih', function () {
    return view('layouts.forms.detailSidih');
});
Route::get('/updateSidi', function () {
    return view('layouts.forms.updateSidi');
});
Route::get('/sidi', function () {
    return view('layouts.formSearch.sidi');
});
Route::get('/daftarPernikahan', function () {
    return view('layouts.forms.daftarPernikahan');
});
Route::get('/detailPernikahanLaki', function () {
    return view('layouts.forms.detailPernikahanLaki');
});
Route::get('/detailPernikahanPerempuan', function () {
    return view('layouts.forms.detailPernikahanPerempuan');
});
Route::get('/updatePernikahan', function () {
    return view('layouts.forms.updatePernikahan');
});
Route::get('/pernikahan', function () {
    return view('layouts.formSearch.pernikahan');
});
Route::get('/jemaat', function () {
    return view('layouts.formSearch.jemaat');
});
Route::get('/daftarJemaat', function () {
    return view('layouts.forms.daftarJemaat');
});
Route::get('/updateJemaat', function () {
    return view('layouts.forms.updateJemaat');
});
Route::get('/detailJemaat', function () {
    return view('layouts.forms.detailJemaat');
});
Route::get('/kegiatan', function () {
    return view('layouts.formSearch.kegiatan');
});
Route::get('/daftarKegiatan', function () {
    return view('layouts.forms.daftarKegiatan');
});
Route::get('/updateKegiatan', function () {
    return view('layouts.forms.updateKegiatan');
});
Route::get('/detailKegiatan', function () {
    return view('layouts.forms.detailKegiatan');
});
Route::get('/ibadah', function () {
    return view('layouts.formSearch.ibadah');
});
Route::get('/daftarIbadah', function () {
    return view('layouts.forms.daftarIbadah');
});
Route::get('/updateIbadah', function () {
    return view('layouts.forms.updateIbadah');
});
Route::get('/detailIbadah', function () {
    return view('layouts.forms.detailIbadah');
});
Route::get('/baptis', function () {
    return view('layouts.formSearch.baptis');
});
Route::get('/daftarBaptis', function () {
    return view('layouts.forms.daftarBaptis');
});
Route::get('/updateBaptis', function () {
    return view('layouts.forms.updateBaptis');
});
Route::get('/detailBaptis', function () {
    return view('layouts.forms.detailBaptis');
});
Route::get('/martumpol', function () {
    return view('layouts.formSearch.martumpol');
});
Route::get('/daftarMartumpol', function () {
    return view('layouts.forms.daftarMartumpol');
});
Route::get('/updateMartumpol', function () {
    return view('layouts.forms.updateMartumpol');
});
Route::get('/detailMartumpol', function () {
    return view('layouts.forms.detailMartumpol');
});
Route::get('/rpp', function () {
    return view('layouts.formSearch.rpp');
});
Route::get('/daftarRpp', function () {
    return view('layouts.forms.daftarRpp');
});
Route::get('/updateRpp', function () {
    return view('layouts.forms.updateRpp');
});
Route::get('/detailRpp', function () {
    return view('layouts.forms.detailRpp');
});
Route::get('/keluarga', function () {
    return view('layouts.formSearch.keluarga');
});
Route::get('/daftarKeluarga', function () {
    return view('layouts.forms.daftarKeluarga');
});
Route::get('/updateKeluarga', function () {
    return view('layouts.forms.updateKeluarga');
});
Route::get('/detailKeluarga', function () {
    return view('layouts.forms.detailKeluarga');
});