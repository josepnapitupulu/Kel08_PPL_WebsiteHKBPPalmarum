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

//admin

Route::prefix('admin')->middleware(['isAdmin', 'auth'])->group(function(){
    
    Route::get('/', [App\Http\Controllers\dashbordController::class, 'index'])->name('dashbord');

    Route::get('/pelayan', [App\Http\Controllers\pelayanController::class, 'index'])->name('pelayan');
    Route::get('/daftarPelayan', [App\Http\Controllers\pelayanController::class, 'store'])->name('daftarPelayan');
    Route::get('/updatePelayan', [App\Http\Controllers\pelayanController::class, 'edit'])->name('updatePelayan');
    Route::get('/detailPelayan', [App\Http\Controllers\pelayanController::class, 'create'])->name('detailPelayan');

    Route::get('/sidi', [App\Http\Controllers\sidiController::class, 'index'])->name('sidi');
    Route::get('/daftarSidih', [App\Http\Controllers\sidiController::class, 'store'])->name('daftarSidi');
    Route::get('/updateSidi', [App\Http\Controllers\sidiController::class, 'edit'])->name('updateSidi');
    Route::get('/detailSidi', [App\Http\Controllers\sidiController::class, 'create'])->name('detailSidi');

    Route::get('/rpp', [App\Http\Controllers\rppController::class, 'index'])->name('rpp');
    Route::get('/daftarRpp', [App\Http\Controllers\rppController::class, 'store'])->name('daftarRpp');
    Route::get('/updateRpp', [App\Http\Controllers\rppController::class, 'edit'])->name('updateRpp');
    Route::get('/detailRpp', [App\Http\Controllers\rppController::class, 'create'])->name('detailRpp');

    Route::get('/pernikahan', [App\Http\Controllers\pernikahanController::class, 'index'])->name('pernikahan');
    Route::get('/daftarPernikahan', [App\Http\Controllers\pernikahanController::class, 'store'])->name('daftarPernikahan');
    Route::get('/updatePernikahan', [App\Http\Controllers\pernikahanController::class, 'edit'])->name('updatePernikahan');
    Route::get('/detailPernikahan', [App\Http\Controllers\pernikahanController::class, 'create'])->name('detailPernikahan');//perbaikan

    Route::get('/martumpol', [App\Http\Controllers\martumpolController::class, 'index'])->name('martumpol');
    Route::get('/daftarMartumpol', [App\Http\Controllers\martumpolController::class, 'store'])->name('daftarMartumpol');
    Route::get('/updateMartumpol', [App\Http\Controllers\martumpolController::class, 'edit'])->name('updateMartumpol');
    Route::get('/detailMartumpol', [App\Http\Controllers\martumpolController::class, 'create'])->name('detailMartumpol');

    Route::get('/kegiatan', [App\Http\Controllers\kegiatanController::class, 'index'])->name('kegiatan');
    Route::get('/daftarKegiatan', [App\Http\Controllers\kegiatanController::class, 'store'])->name('daftarKegiatan');
    Route::get('/updateKegiatan', [App\Http\Controllers\kegiatanController::class, 'edit'])->name('updateKegiatan');
    Route::get('/detailKegiatan', [App\Http\Controllers\kegiatanController::class, 'create'])->name('detailKegiatan');

    Route::get('/jemaat', [App\Http\Controllers\jemaatController::class, 'index'])->name('jemaat');
    Route::get('/daftarJemaat', [App\Http\Controllers\jemaatController::class, 'store'])->name('daftarJemaat');
    Route::get('/updateJemaat', [App\Http\Controllers\jemaatController::class, 'edit'])->name('updateJemaat');
    Route::get('/detailJemaat', [App\Http\Controllers\jemaatController::class, 'create'])->name('detailJemaat');

    Route::get('/ibadah', [App\Http\Controllers\ibadahController::class, 'index'])->name('ibadah');
    Route::get('/daftarIbadah', [App\Http\Controllers\ibadahController::class, 'store'])->name('daftarIbadah');
    Route::get('/updateIbadah', [App\Http\Controllers\ibadahController::class, 'edit'])->name('updateIbadah');
    Route::get('/detailIbadah', [App\Http\Controllers\ibadahController::class, 'create'])->name('detailIbadah');

    Route::get('/baptis', [App\Http\Controllers\baptisController::class, 'index'])->name('baptis');
    Route::get('/daftarBaptis', [App\Http\Controllers\baptisController::class, 'store'])->name('daftarBaptis');
    Route::get('/updateBaptis', [App\Http\Controllers\baptisController::class, 'edit'])->name('updateBaptis');
    Route::get('/detailBaptis', [App\Http\Controllers\baptisController::class, 'create'])->name('detailBaptis');

    Route::get('/keluarga', [App\Http\Controllers\keluargaController::class, 'index'])->name('keluarga');
    Route::get('/daftarKeluarga', [App\Http\Controllers\keluargaController::class, 'store'])->name('daftarKeluarga');
    Route::get('/updateKeluarga', [App\Http\Controllers\keluargaController::class, 'edit'])->name('updateKeluarga');
    Route::get('/detailKeluarga', [App\Http\Controllers\keluargaController::class, 'create'])->name('detailKeluarga');

    Route::get('/pindah', [App\Http\Controllers\pindahController::class, 'index'])->name('pindah');
    Route::get('/daftarPindah', [App\Http\Controllers\pindahController::class, 'store'])->name('daftarPindah');
    Route::get('/updatePindah', [App\Http\Controllers\pindahController::class, 'edit'])->name('updatePindah');
    Route::get('/detailPindah', [App\Http\Controllers\pindahController::class, 'create'])->name('detailPindah');

    Route::get('/pemasukan', [App\Http\Controllers\pemasukanController::class, 'index'])->name('pemasukan');
    Route::get('/pemasukanLelang', [App\Http\Controllers\pemasukanController::class, 'index2'])->name('pemasukanLelang');
    Route::get('/pemasukanLelang2', [App\Http\Controllers\pemasukanController::class, 'index3'])->name('pemasukanLelang2');
    Route::get('/pemasukanPembangunan', [App\Http\Controllers\pemasukanController::class, 'index4'])->name('pemasukanPembangunan');
    Route::get('/pemasukanPengembanganPelayanan', [App\Http\Controllers\pemasukanController::class, 'index5'])->name('pemasukanPengembanganPelayanan');
    Route::get('/pemasukanPengembanganPelayanan2', [App\Http\Controllers\pemasukanController::class, 'index6'])->name('pemasukanPengembanganPelayanan2');
    Route::get('/pemasukanPersembahan', [App\Http\Controllers\pemasukanController::class, 'index7'])->name('pemasukanPersembahan');
    Route::get('/pemasukanPersembahan2', [App\Http\Controllers\pemasukanController::class, 'index8'])->name('pemasukanPersembahan2');
    Route::get('/pemasukanPersembahanKeluarga2', [App\Http\Controllers\pemasukanController::class, 'index9'])->name('pemasukanPersembahanKeluarga2');
    Route::get('/pemasukanSumbangan', [App\Http\Controllers\pemasukanController::class, 'index10'])->name('pemasukanSumbangan');
    Route::get('/pemasukanSumbangan2', [App\Http\Controllers\pemasukanController::class, 'index11'])->name('pemasukanSumbangan2');
    Route::get('/pemasukanPembangunan2', [App\Http\Controllers\pemasukanController::class, 'index12'])->name('pemasukanPembangunan2');
    Route::get('/pemasukanUcapanSyukur', [App\Http\Controllers\pemasukanController::class, 'index13'])->name('pemasukanUcapanSyukur');
    Route::get('/pemasukanUcapanSyukur2', [App\Http\Controllers\pemasukanController::class, 'index14'])->name('pemasukanUcapanSyukur2');
    Route::get('/kategoriPemasukan', [App\Http\Controllers\pemasukanController::class, 'index15'])->name('kategoriPemasukan');
    Route::get('/kategoriPemasukan2', [App\Http\Controllers\pemasukanController::class, 'index16'])->name('kategoriPemasukan2');

    Route::get('/pengeluaran', [App\Http\Controllers\pengeluaranController::class, 'index'])->name('pengeluaran');
    Route::get('/pengeluaranKegiatan', [App\Http\Controllers\pengeluaranController::class, 'index2'])->name('pengeluaranKegiatan');
    Route::get('/pengeluaranOpsional', [App\Http\Controllers\pengeluaranController::class, 'index3'])->name('pengeluaranOpsional');
    Route::get('/pengeluaranPembangunan', [App\Http\Controllers\pengeluaranController::class, 'index4'])->name('pengeluaranPembangunan');
    Route::get('/kategoriPengeluaran', [App\Http\Controllers\pengeluaranController::class, 'index5'])->name('kategoriPengeluaran');
    Route::get('/kategoriPengeluaran2', [App\Http\Controllers\pengeluaranController::class, 'index6'])->name('kategoriPengeluaran2');


    Route::get('/sentralisasi', [App\Http\Controllers\sentralisasiController::class, 'index'])->name('sentralisasi');
    Route::get('/detailSentralisasi', [App\Http\Controllers\sentralisasiController::class, 'index2'])->name('detailSentralisasi');

    Route::get('/kategoriAnggaran', [App\Http\Controllers\anggaranController::class, 'index'])->name('kategoriMataAnggaran');
    Route::get('/detailKategoriAnggaran', [App\Http\Controllers\anggaranController::class, 'index2'])->name('detailKategoriMataAnggaran');
    Route::get('/matsAnggaran', [App\Http\Controllers\anggaranController::class, 'index3'])->name('mataAnggaran');
    Route::get('/detailMataAnggaran', [App\Http\Controllers\anggaranController::class, 'index4'])->name('detailMataAnggaran');

    Route::get('/headTransaksi', [App\Http\Controllers\transaksiController::class, 'index'])->name('headTransaksi');
    Route::get('/detailHeadTransaksi', [App\Http\Controllers\transaksiController::class, 'index2'])->name('detailHeadTransaksi');
    Route::get('/detailTransaksi', [App\Http\Controllers\transaksiController::class, 'index3'])->name('detailTransaksi');
    Route::get('/headTransaksiDetail', [App\Http\Controllers\transaksiController::class, 'index4'])->name('headTransaksiDetail');

    Route::get('/persembahanIbadah', [App\Http\Controllers\persembahanController::class, 'index'])->name('persembahanIbadah');
    Route::get('/persembahanJemaat', [App\Http\Controllers\persembahanController::class, 'index'])->name('persembahanJemaat');

    // Route::get('/daftarSidih', function () {
    //     return view('layouts.forms.daftarSidih');
    // });
    // Route::get('/detailSidih', function () {
    //     return view('layouts.forms.detailSidih');
    // });
    // Route::get('/updateSidi', function () {
    //     return view('layouts.forms.updateSidi');
    // });
    // Route::get('/sidi', function () {
    //     return view('layouts.formSearch.sidi');
    // });
    // Route::get('/daftarPernikahan', function () {
    //     return view('layouts.forms.daftarPernikahan');
    // });

    //perbaikan
    Route::get('/detailPernikahanLaki', function () {
        return view('layouts.forms.detailPernikahanLaki');
    });
    Route::get('/detailPernikahanPerempuan', function () {
        return view('layouts.forms.detailPernikahanPerempuan');
    });
    Route::get('/detailSentralisasi' , function () {
        return view('layouts.forms.detailSentralisasi');
    });





    Route::get('/uproveBaptis', function () {
        return view('layouts.forms.uproveBaptis');
    });
    Route::get('/uproveJemaat', function () {
        return view('layouts.forms.uproveBJemaat');
    });
    Route::get('/uproveKeluarga', function () {
        return view('layouts.forms.uproveKeluarga');
    });
    Route::get('/uproveMartumpol', function () {
        return view('layouts.forms.uproveMartumpol');
    });
    Route::get('/uprovePernikahan', function () {
        return view('layouts.forms.uprovePernikahan');
    });
    Route::get('x', function () {
        return view('layouts.forms.uproveSidi');
    });
    
});

//  user user user user
Route::get('/aksesMartumpolUser', [App\Http\Controllers\userController::class, 'index'])->name('martumpolUser');
Route::post('/daftarMartumpolUser', [App\Http\Controllers\userController::class, 'daftarMartumpol'])->name('registrasiMartumpol');
Route::get('/aksesBaptisUser', [App\Http\Controllers\userController::class, 'index2'])->name('baptisUser');
Route::post('/daftarBaptisUser', [App\Http\Controllers\userController::class, 'daftarBaptis'])->name('registrasiBaptis');
Route::get('/aksesJemaatUser', [App\Http\Controllers\userController::class, 'keluarga'])->name('jemaatUser');
Route::post('/daftarJemaatUser', [App\Http\Controllers\userController::class, 'daftarJemaat'])->name('registrasiJemaat');
Route::get('/aksesNikahUser', [App\Http\Controllers\userController::class, 'index4'])->name('nikahUser');
Route::post('/daftarNikahUser', [App\Http\Controllers\userController::class, 'daftarNikah'])->name('registrasiNikah');
Route::get('/aksesPindahUser', [App\Http\Controllers\userController::class, 'index5'])->name('pindahUser');
Route::post('/daftarPindahUser', [App\Http\Controllers\userController::class, 'daftarPindah'])->name('registrasiPindah');
Route::get('/aksesSidiUser', [App\Http\Controllers\userController::class, 'index6'])->name('sidiUser');
Route::post('/daftarSidiUser', [App\Http\Controllers\userController::class, 'daftarSidi'])->name('registrasiSidi');
Route::get('/', [App\Http\Controllers\userController::class, 'index7'])->name('homeUser');
Route::get('/hubKeluarga', [App\Http\Controllers\userController::class, 'keluarga'])->name('hubKeluarga');


// Route::get('/daftarMartumpolUser', function () {
//     return view('layouts.user_2.user_pendaftaran_martumpol');
// });
// Route::get('/daftarBaptisUser', function () {
//     return view('layouts.user_2.user_pendaftaran_baptis');
// });
// Route::get('/daftarJemaatUser', function () {
//     return view('layouts.user_2.user_pendaftaran_jemaat');
// });
// Route::get('/daftarNikahUser', function () {
//     return view('layouts.user_2.user_pendaftaran_pernikahan');
// });
// Route::get('/daftarPindahUser', function () {
//     return view('layouts.user_2.user_pindah');
// });
// Route::get('/daftarSidiUser', function () {
//     return view('layouts.user_2.user_pendaftaran_naik_sidi');
// });
// Route::get('/', function () {
//     return view('layouts.user_2.userHome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
