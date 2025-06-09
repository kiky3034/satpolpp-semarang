<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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
    return redirect('/home');
});

Route::get('/home', function () {
    return view('/home/home');
});

Route::get('/visi-misi', function () {
    return view('/profile/visi-misi');
});
Route::get('/geografis', function () {
    return view('/profile/geografis');
});
Route::get('/struktur', function () {
    return view('/profile/struktur');
});
Route::get('/tupoksi', function () {
    return view('/profile/tupoksi');
});
Route::get('/pejabat', function () {
    return view('/profile/pejabat');
});
Route::get('/renstra', function () {
    return view('/profile/renstra');
});
Route::get('/renja', function () {
    return view('/profile/renja');
});
Route::get('/sdm', function () {
    return view('/profile/sdm');
});
Route::get('/lakip', function () {
    return view('/profile/lakip');
});


Route::get('/sarana_prasarana', function () {
    return view('/layanan/sarana_prasarana');
});

Route::get('/peraturan', function () {
    return view('/layanan/peraturan');
});

Route::get('/layanan', function () {
    return view('/layanan/layanan');
});

Route::get('/ppid', function () {
    return view('/ppid/ppid');
});

Route::get('/dasar_hukum', function () {
    return view('/ppid/dasar_hukum');
});

Route::get('/pelayanan_informasi', function () {
    return view('/ppid/pelayanan_informasi');
});

Route::get('/perjanjian_kerja', function () {
    return view('/ppid/perjanjian_kerja');
});

Route::get('/informasi', function () {
    return view('/ppid/informasi');
});

Route::get('/bidang_ppud', function () {
    return view('/sop/bidang_ppud');
});

Route::get('/penegakan_perda', function () {
    return view('/sop/penegakan_perda');
});

Route::get('/gelar_perkara', function () {
    return view('/sop/gelar_perkara');
});

Route::get('/sidang_tempat', function () {
    return view('/sop/sidang_tempat');
});

Route::get('/hubungan_opd', function () {
    return view('/sop/hubungan_opd');
});

Route::get('/pembinaan_ppns', function () {
    return view('/sop/pembinaan_ppns');
});

Route::get('/sekretariat_ppns', function () {
    return view('/sop/sekretariat_ppns');
});

Route::get('/linmas', function () {
    return view('/sop/linmas');
});

Route::get('/tibum', function () {
    return view('/sop/tibum');
});

Route::get('/binmas', function () {
    return view('/sop/binmas');
});

Route::get('/sekretariat', function () {
    return view('/sop/sekretariat');
});

Route::get('/wajib_pajak', function () {
    return view('/pajak/wajib_pajak');
});

Route::get('/jatuh_tempo', function () {
    return view('/pajak/jatuh_tempo');
});

Route::get('/kontak', function () {
    return view('/kontak/kontak');
});

// Halaman berita untuk publik
Route::get('/berita_terbaru', [BeritaController::class, 'index'])->name('berita_terbaru');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita_terbaru');


// Grup untuk admin (hanya bisa diakses setelah login)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/berita', [BeritaController::class, 'admin'])->name('admin.berita');
    Route::get('/berita/create', [BeritaController::class, 'create'])->name('admin.berita.create');
    Route::post('/berita', [BeritaController::class, 'store'])->name('admin.berita.store');
    Route::get('/berita/{berita}/edit', [BeritaController::class, 'edit'])->name('admin.berita.edit');
    Route::put('/berita/{berita}', [BeritaController::class, 'update'])->name('admin.berita.update');
    Route::delete('/berita/{berita}', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');
});

// Show login form
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Handle login submission
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Logout route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


