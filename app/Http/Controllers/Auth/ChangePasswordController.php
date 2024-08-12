<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ForgotPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ChangePasswordController extends Controller
{
    public function index() {
        $title = "Change Password";

        return view('auth.change-pass', compact('title'));
    }

    public function updatePass(Request $request) {
        $validator = Validator::make($request->all(), [
            'password' => 'required|min:6|confirmed'
        ]);

        if($validator->fails()) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => $validator->errors()
            ]);

            return back()->withInput();
        }

        $email = session('change_pass_email');

        $user = User::where('email', $email)->first();

        if(!$user) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => 'Session user not found, please verify again'
            ]);

            return back()->withInput();
        }

        $user->otp = null;
        $user->otp_expires_at = null;
        $user->email_verified = 1;
        $user->password = Hash::make($request->password);
        $user->save();

        session()->forget('change_pass_email');

        ForgotPassword::where('email', $email)->delete();

        session()->flash('toast', [
            'status' => 'success',
            'msg' => 'Your password has been successfully changed, please log in again'
        ]);

        return redirect('/login');

    }
}
