<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Mail\SendOtpMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    // register page
    public function index() {
        $title = "Register";
        
        return view('auth.register', compact('title'));
    }

    // persetujuan page
    public function persetujuan() {
        $title = "Persetujuan";

        return view('data.persetujuan', compact('title'));
    }

    // register function
    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {           
            session()->flash('toast', [
                'status' => 'error',
                'msg' => $validator->errors()
            ]);

            return back()->withInput();
        }

        $otp = rand(10000, 99999);
        $otpExpiresAt = now()->addMinutes(10);

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'otp' => $otp,
            'otp_expires_at' => $otpExpiresAt,
        ]);

        Mail::to($user->email)->send(new SendOtpMail($otp));

        session(['register_email' => $request->email]);

        session()->flash('toast', [
            'status' => 'success',
            'msg' => 'OTP has been sent to your email'
        ]);

        return redirect('verify-otp');
    }

    // otp page
    public function otp() {
        $title = "Verify Otp";

        return view('auth.otp', compact('title'));
    }

    // verify otp function
    public function verifyOtp(Request $request) {
        $validator = Validator::make($request->all(), [
            'otp' => 'required|digits:5',
        ]);

        if ($validator->fails()) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => $validator->errors()
            ]);

            return back()->withInput();
        }

        $email = session('register_email');

        $user = User::where('email', $email)
            ->where('otp', $request->otp)
            ->where('otp_expires_at', '>=', now())
            ->first();

        if (!$user) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => 'Invalid OTP or OTP has expired'
            ]);

            return back()->withInput();
        }

        $user->otp = null;
        $user->otp_expires_at = null;
        $user->email_verified = 1;
        $user->save();

        session()->forget('register_email');

        Auth::login($user);

        $token = $user->createToken('auth_token')->plainTextToken;

        $cookie = cookie('auth_token', $token, 20160);

        session()->flash('toast', [
            'status' => 'success',
            'msg' => 'Email has been successfully verified'
        ]);

        return redirect('/');
    }

    // resend otp function
    public function resendOtp(Request $request) {

        $email = session('register_email');

        if (!$email) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => 'Email not found in session'
            ]);

            return back();
        }

        $user = User::where('email', $email)->first();
        if (!$user) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => 'User not found'
            ]);

            return back();
        }

        // Generate OTP baru
        $otp = rand(10000, 99999);
        $otpExpiresAt = now()->addMinutes(10);

        // Update OTP di database
        $user->otp = $otp;
        $user->otp_expires_at = $otpExpiresAt;
        $user->save();

        // Kirim email dengan OTP baru
        Mail::to($user->email)->send(new SendOtpMail($otp));

        return true;
    }
}
