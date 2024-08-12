<?php

namespace App\Http\Controllers\Data;

use App\Models\DataIbu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DataIbuController extends Controller
{
    public function index() {
        $title = "Data ibu";
        $data_ibu = DataIbu::where('id_user', Auth::id())->first();        

        return view('data.ibu', compact('title', 'data_ibu'));
    }

    public function input(Request $request) {
        $validator = Validator::make($request->all(), [
            'nama'              => 'required',
            'alamat'            => 'required',
            'pekerjaan'         => 'required',
            'telp'              => 'required|numeric|digits_between:10,14',
            'status'            => 'required',
            'tempat_lahir'      => 'required',
            'tanggal_lahir'     => 'required|date',
        ]);

        if($validator->fails()) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => $validator->errors()->all()
            ]);

            return back()->withInput();
        }

        $id_user = Auth::id();

        DataIbu::create([
            'id_user'           => $id_user,
            'nama'              => $request->nama,
            'alamat'            => $request->alamat,
            'pekerjaan'         => $request->pekerjaan,
            'telp'              => $request->telp,
            'status'            => $request->status,
            'tempat_lahir'      => $request->tempat_lahir,
            'tanggal_lahir'     => $request->tanggal_lahir,
        ]);

        return redirect('/keluhan-harapan');
    }

    public function update(Request $request) {

        $id = Auth::id();

        $validator = Validator::make($request->all(), [
            'nama'              => 'required',
            'alamat'            => 'required',
            'pekerjaan'         => 'required',
            'telp'              => 'required|numeric|digits_between:10,14',
            'status'            => 'required',
            'tempat_lahir'      => 'required',
            'tanggal_lahir'     => 'required|date',
        ]);
    
        if($validator->fails()) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => $validator->errors()->all()
            ]);
    
            return back()->withInput();
        }
    
        $dataIbu = DataIbu::where('id_user', $id)->first();
    
        if (!$dataIbu) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => 'data not found'
            ]);
    
            return redirect()->route('data-ibu');
        }
    
        $dataIbu->update([
            'nama'              => $request->nama,
            'alamat'            => $request->alamat,
            'pekerjaan'         => $request->pekerjaan,
            'telp'              => $request->telp,
            'status'            => $request->status,
            'tempat_lahir'      => $request->tempat_lahir,
            'tanggal_lahir'     => $request->tanggal_lahir,
        ]);
    
        return redirect('/keluhan-harapan');
    }
}
