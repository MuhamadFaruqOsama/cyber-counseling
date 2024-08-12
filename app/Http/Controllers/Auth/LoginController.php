<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index() {
        $title = "Login";

        return view('auth.login', compact('title'));
    }

    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        if ($validator->fails()) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => $validator->errors()->first()
            ]);
    
            return back()->withInput();
        }
    
        $user = User::where('email', $request->email)->first();
    
        if (!$user) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => 'Email not registered'
            ]);
    
            return back()->withInput();
        }
    
        if (!Hash::check($request->password, $user->password)) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => "Email and password don't match"
            ]);
    
            return back()->withInput();
        }
    
        Auth::login($user);
    
        $request->session()->regenerate();
    
        $token = $user->createToken('auth_token')->plainTextToken;
    
        $cookie = cookie('auth_token', $token, 20160); // Token valid for 14 days
    
        session()->flash('toast', [
            'status' => 'success',
            'msg' => 'Login successful'
        ]);
    
        return redirect()->intended('/')->withCookie($cookie);
    }
}
