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

    Route::get('/kelaurag', [App\Http\Controllers\kelauragController::class, 'index'])->name('kelaurag');
    Route::get('/daftarKeluarga', [App\Http\Controllers\kelauragController::class, 'store'])->name('daftarKeluarga');
    Route::get('/updateKeluarga', [App\Http\Controllers\kelauragController::class, 'edit'])->name('updateKeluarga');
    Route::get('/detailKeluarga', [App\Http\Controllers\kelauragController::class, 'create'])->name('detailKeluarga');

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


    // Route::get('/updatePernikahan', function () {
    //     return view('layouts.forms.updatePernikahan');
    // });
    // Route::get('/pernikahan', function () {
    //     return view('layouts.formSearch.pernikahan');
    // });
    // Route::get('/jemaat', function () {
    //     return view('layouts.formSearch.jemaat');
    // });
    // Route::get('/daftarJemaat', function () {
    //     return view('layouts.forms.daftarJemaat');
    // });
    // Route::get('/updateJemaat', function () {
    //     return view('layouts.forms.updateJemaat');
    // });
    // Route::get('/detailJemaat', function () {
    //     return view('layouts.forms.detailJemaat');
    // });
    // Route::get('/kegiatan', function () {
    //     return view('layouts.formSearch.kegiatan');
    // });
    // Route::get('/daftarKegiatan', function () {
    //     return view('layouts.forms.daftarKegiatan');
    // });
    // Route::get('/updateKegiatan', function () {
    //     return view('layouts.forms.updateKegiatan');
    // });
    // Route::get('/detailKegiatan', function () {
    //     return view('layouts.forms.detailKegiatan');
    // });
    // Route::get('/ibadah', function () {
    //     return view('layouts.formSearch.ibadah');
    // });
    // Route::get('/daftarIbadah', function () {
    //     return view('layouts.forms.daftarIbadah');
    // });
    // Route::get('/updateIbadah', function () {
    //     return view('layouts.forms.updateIbadah');
    // });
    // Route::get('/detailIbadah', function () {
    //     return view('layouts.forms.detailIbadah');
    // });
    // Route::get('/baptis', function () {
    //     return view('layouts.formSearch.baptis');
    // });
    // Route::get('/daftarBaptis', function () {
    //     return view('layouts.forms.daftarBaptis');
    // });
    // Route::get('/updateBaptis', function () {
    //     return view('layouts.forms.updateBaptis');
    // });
    // Route::get('/detailBaptis', function () {
    //     return view('layouts.forms.detailBaptis');
    // });
    // Route::get('/martumpol', function () {
    //     return view('layouts.formSearch.martumpol');
    // });
    // Route::get('/daftarMartumpol', function () {
    //     return view('layouts.forms.daftarMartumpol');
    // });
    // Route::get('/updateMartumpol', function () {
    //     return view('layouts.forms.updateMartumpol');
    // });
    // Route::get('/detailMartumpol', function () {
    //     return view('layouts.forms.detailMartumpol');
    // });
    // Route::get('/rpp', function () {
    //     return view('layouts.formSearch.rpp');
    // });
    // Route::get('/daftarRpp', function () {
    //     return view('layouts.forms.daftarRpp');
    // });
    // Route::get('/updateRpp', function () {
    //     return view('layouts.forms.updateRpp');
    // });
    // Route::get('/detailRpp', function () {
    //     return view('layouts.forms.detailRpp');
    // });
    // Route::get('/keluarga', function () {
    //     return view('layouts.formSearch.keluarga');
    // });
    // Route::get('/daftarKeluarga', function () {
    //     return view('layouts.forms.daftarKeluarga');
    // });
    // Route::get('/updateKeluarga', function () {
    //     return view('layouts.forms.updateKeluarga');
    // });
    // Route::get('/detailKeluarga', function () {
    //     return view('layouts.forms.detailKeluarga');
    // });
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
    Route::get('/uproveSidi', function () {
        return view('layouts.forms.uproveSidi');
    });
    
});



//user
Route::get('/daftarMartumpolUser', function () {
    return view('layouts.user.daftarMartumpol');
});
Route::get('/daftarBaptisUser', function () {
    return view('layouts.user.daftarBaptis');
});
Route::get('/daftarJemaatUser', function () {
    return view('layouts.user.daftarJemaat');
});
Route::get('/daftarNikahUser', function () {
    return view('layouts.user.daftarNikah');
});
Route::get('/daftarPindahUser', function () {
    return view('layouts.user.daftarPindah');
});
Route::get('/daftarSidiUser', function () {
    return view('layouts.user.daftarSidi');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
