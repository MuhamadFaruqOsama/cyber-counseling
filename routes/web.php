<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Data\DataIbuController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Data\DataAyahController;
use App\Http\Controllers\Data\DataDiriController;
use App\Http\Controllers\Features\JadwalController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Data\DataKeluhanHarapanController;

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

Route::middleware(['guest'])->group(function () {

    // LOGIN ========================================
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    // REGISTER =====================================
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    // OTP ==========================================
    Route::get('/verify-otp', [RegisterController::class, 'otp'])->name('verify-otp');
    Route::post('/verify-otp', [RegisterController::class, 'verifyOtp']);
    Route::post('/resend-otp', [RegisterController::class, 'resendOtp']);

    // PERSETUJUAN =================================
    Route::get('persetujuan', [RegisterController::class, 'persetujuan']);

    // FORGOT PASSWORD =============================
    Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('forgot-password');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'verifyEmail']);

    // OTP FORGOT PASSWORD =========================
    Route::get('/forgot-password-otp', [ForgotPasswordController::class, 'otp'])->name('forgot-password-otp');
    Route::post('/forgot-password-otp', [ForgotPasswordController::class, 'verifyOtp']);
    Route::post('/resend-otp-forgot', [ForgotPasswordController::class, 'resendOtp']);


    Route::middleware(['check.forgot.pass'])->group(function () {
        // CHANGE PASSWORD =============================
        Route::get('/change-password', [ChangePasswordController::class, 'index'])->name('change-password');
        Route::post('/change-password', [ChangePasswordController::class, 'updatePass']);
    });

});

// LOGOUT =========================================
Route::get('/logout', [LogoutController::class, 'logout'])->middleware(['auth']);

Route::middleware(['auth','check.email.verified'])->group(function () {

    // DATA DIRI ==================================
    Route::get('/data-diri', [DataDiriController::class, 'index'])->name('data-diri');
    Route::post('/data-diri', [DataDiriController::class, 'input']);
    Route::post('/update-data-diri', [DataDiriController::class, 'update'])->name('update-data-diri');

    // DATA AYAH ==================================
    Route::get('/data-ayah', [DataAyahController::class, 'index'])->name('data-ayah');
    Route::post('/data-ayah', [DataAyahController::class, 'input']);
    Route::post('/update-data-ayah', [DataAyahController::class, 'update'])->name('update-data-ayah');

    // DATA IBU ===================================
    Route::get('/data-ibu', [DataIbuController::class, 'index'])->name('data-ibu');
    Route::post('/data-ibu', [DataIbuController::class, 'input']);
    Route::post('/update-data-ibu', [DataIbuController::class, 'update'])->name('update-data-ibu');

    // KELUHAN & HARAPAN ==========================
    Route::get('/keluhan-harapan', [DataKeluhanHarapanController::class, 'index'])->name('keluhan-harapan');
    Route::post('/keluhan-harapan', [DataKeluhanHarapanController::class, 'input']);
    Route::post('/update-keluhan-harapan', [DataKeluhanHarapanController::class, 'update'])->name('update-keluhan-harapan');

    Route::get('/kuisioner', function () {
        return view('data/kuisioner', [
            "title" => "Keluhan Harapan"
        ]);
    });

    Route::get('/hasil', function () {
        return view('data/hasil', [
            "title" => "Keluhan Harapan"
        ]);
    });
    
    Route::middleware(['check.user.data'])->group(function () {

        // DASHBOARD

        // KONSELOR

        // JADWAL
        Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal');
        Route::post('/jadwal', [JadwalController::class, 'create']);
        Route::get('/detail-jadwal', [JadwalController::class, 'detail'])->name('detial-jadwal');
        Route::post('/detail-jadwal', [JadwalController::class, 'detailUpdate']);

        // TUJUAN

        // EDUKASI

        // PROFILE
        Route::get('/profile', [ProfileController::class, 'index']);
        Route::get('/edit-profile', [ProfileController::class, 'edit'])->name('edit-profile');
        Route::post('/edit-profile', [ProfileController::class, 'update']);

        Route::get('/', function () {
            return view('index', [
                "title" => "Dashboard"
            ]);
        });

        Route::get('/konselor', function () {
            return view('konselor/konselor', [
                "title" => "Konselor"
            ]);
        });
    
        Route::get('/chat', function () {
            return view('konselor/chat-konselor', [
                "title" => "Chat"
            ]);
        });
    
        Route::get('/education', function () {
            return view('education/education', [
                "title" => "Education"
            ]);
        });
    
        Route::get('/video', function () {
            return view('education/video', [
                "title" => "Video"
            ]);
        });
    
        Route::get('/artikel', function () {
            return view('education/artikel', [
                "title" => "Artikel"
            ]);
        });
    
        Route::get('/view-video', function () {
            return view('education/view-video', [
                "title" => "View video"
            ]);
        });
    
        Route::get('/view-artikel', function () {
            return view('education/view-artikel', [
                "title" => "View artikel"
            ]);
        });

    });

});