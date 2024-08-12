<?php

namespace App\Http\Controllers\Features;

use Carbon\Carbon;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class JadwalController extends Controller
{
    public function index()
    {
        $title = "Jadwal";
        $today = Carbon::today()->toDateString();
        $data_jadwal = Jadwal::where('id_user', Auth::id())
                            ->where('tanggal', $today)
                            ->get();

        return view('jadwal.jadwal', compact('title', 'data_jadwal'));
    }

    public function create(Request $request) {

        $validator = Validator::make($request->all(), [
            'aktivitas'         => 'required',
            'tanggal'           => 'required|date',
            'waktu_mulai'       => 'required',
            'waktu_selesai'     => 'required',
            'deskripsi'         => 'required'
        ]);

        if($validator->fails()) {
            session()->flash('toast', [
                'status' => 'success',
                'msg' => $validator->errors()
            ]);

            return back()->withInput();
        }

        $id = Auth::id();

        Jadwal::create([
            'id_user'           => $id,
            'aktivitas'         => $request->aktivitas,
            'tanggal'           => $request->tanggal,
            'waktu_mulai'       => $request->waktu_mulai,
            'waktu_selesai'     => $request->waktu_selesai,
            'deskripsi'         => $request->deskripsi
        ]);

        session()->flash('toast', [
            'status' => 'success',
            'msg' => 'schedule created successfully'
        ]);

        return redirect('/jadwal');
    }
}
