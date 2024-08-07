<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
            'email' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails()) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => $validator->errors()
            ]);

            return back()->withInput();
        }
        
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            
            $request->session()->regenerate();

            $user = Auth::user();

            $token = $request->user()->createToken('auth_token')->plainTextToken;

            $cookie = cookie('auth_token', $token, 20160);

            session()->flash('toast', [
                'status' => 'success',
                'msg' => 'login successful'
            ]);

            return redirect()->intended('/')->withCookie($cookie);
        }

        // Jika otentikasi gagal
        session()->flash('toast', [
            'status' => 'error',
            'msg' => 'Invalid credentials'
        ]);

        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);

    }
}
