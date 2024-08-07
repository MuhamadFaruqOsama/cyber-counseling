<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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

});

// LOGOUT =======================================
Route::get('/logout', [LogoutController::class, 'logout'])->middleware(['auth']);


Route::middleware(['auth','check.email.verified'])->group(function () {
// Route::middleware(['auth'])->group(function () {
    Route::get('/data-diri', function () {
        return view('data/diri', [
            "title" => "Data diri"
        ]);
    });

    Route::get('/', function () {
        return view('index', [
            "title" => "Dashboard"
        ]);
    });

    Route::get('/forgot-password', function () {
        return view('auth/forgot-pass', [
            "title" => "Forgot Password"
        ]);
    });

    Route::get('/change-password', function () {
        return view('auth/change-pass', [
            "title" => "Change password"
        ]);
    });

    Route::get('/data-ayah', function () {
        return view('data/ayah', [
            "title" => "Data ayah"
        ]);
    });

    Route::get('/data-ibu', function () {
        return view('data/ibu', [
            "title" => "Data ibu"
        ]);
    });

    Route::get('/keluhan-harapan', function () {
        return view('data/keluhan-harapan', [
            "title" => "Keluhan Harapan"
        ]);
    });

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

    Route::get('/jadwal', function () {
        return view('jadwal/jadwal', [
            "title" => "Jadwal"
        ]);
    });

    Route::get('/detail-jadwal', function () {
        return view('jadwal/detail', [
            "title" => "Detail Jadwal"
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

    Route::get('/profile', function () {
        return view('profile/profile', [
            "title" => "Profile"
        ]);
    });

    Route::get('/edit-profile', function () {
        return view('profile/edit', [
            "title" => "Edit Profile"
        ]);
    });
});