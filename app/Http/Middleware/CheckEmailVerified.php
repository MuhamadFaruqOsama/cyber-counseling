<?php

namespace App\Http\Middleware;

use Closure;
use App\Mail\SendOtpMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class CheckEmailVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->email_verified == 0) {

            $otp = rand(10000, 99999);
        
            Mail::to(Auth::user()->email)->send(new SendOtpMail($otp));
    
            Auth::user()->otp = $otp;
            Auth::user()->otp_expires_at = now()->addMinutes(10);
            Auth::user()->save();

            $active_email = Auth::user()->email;

            $request->user()->tokens()->delete();

            Auth::logout();
    
            $request->session()->invalidate();
            $request->session()->regenerateToken();
    
            Cookie::queue(Cookie::forget('auth_token'));

            session(['register_email' => $active_email]);

            session()->flash('toast', [
                'status' => 'info',
                'msg' => 'Your email has not been verified. Please check your email for the OTP.'
            ]);
        
            return redirect('/verify-otp');
        }

        return $next($request);
    }
}
