<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Mail\SendOtpMail;
use Illuminate\Http\Request;
use App\Models\ForgotPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ForgotPasswordController extends Controller
{
    // default route (forgot password)
    public function index() {
        $title = "Forgot Password";

        return view('auth.forgot-pass', compact('title'));
    }

    // verify email
    public function verifyEmail(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);
    
        if($validator->fails()) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => $validator->errors()->first()
            ]);
    
            return back()->withInput();
        }
    
        $isEmailExist = User::where('email', $request->email)->first();
    
        if(!$isEmailExist) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => 'Email not registered'
            ]);
    
            return back()->withInput();
        }
    
        // Hapus OTP lama (opsional)
        ForgotPassword::where('email', $request->email)->delete();
    
        $otp = rand(10000, 99999);
        $otpExpiresAt = now()->addMinutes(10);
    
        $forgotPassword = ForgotPassword::create([
            'email' => $request->email,
            'otp' => $otp,
            'otp_expires_at' => $otpExpiresAt
        ]);
    
        Mail::to($request->email)->send(new SendOtpMail($otp));
    
        session(['register_email' => $request->email]);
    
        session()->flash('toast', [
            'status' => 'success',
            'msg' => 'Please verify your email first'
        ]);
    
        return redirect('/forgot-password-otp');
    }    

    // otp page - verify email
    public function otp() {
        $title = "Forgot Password OTP";

        return view('auth.otp', compact('title'));
    }

    // verify otp
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

        $user = ForgotPassword::where('email', $email)
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

        session()->forget('register_email');
        session(['change_pass_email' => $email]);

        session()->flash('toast', [
            'status' => 'success',
            'msg' => 'You can change your password'
        ]);

        return redirect('/change-password');
    }

    // resend otp
    public function resendOtp(Request $request) {

        $email = session('register_email');

        if (!$email) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => 'Email not found in session'
            ]);

            return back();
        }

        $user = ForgotPassword::where('email', $email)->first();
        
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
