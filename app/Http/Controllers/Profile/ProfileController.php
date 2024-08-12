<?php

namespace App\Http\Controllers\Profile;

use App\Models\User;
use App\Models\DataIbu;
use App\Models\DataAyah;
use App\Models\DataDiri;
use Illuminate\Http\Request;
use App\Models\DataKeluhanHarapan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index() {
        $title = "Profile";
        
        $data_akun = User::where('id', Auth::id())->first();
        $data_diri = DataDiri::where('id_user', Auth::id())->first();

        return view('profile.profile', compact('title','data_diri','data_akun'));
    }

    public function edit() {
        $title = "Edit Profile";

        $data_diri  = DataDiri::where('id_user', Auth::id())->first();
        $data_ayah  = DataAyah::where('id_user', Auth::id())->first();
        $data_ibu   = DataIbu::where('id_user', Auth::id())->first();
        $data_keluhan_harapan = DataKeluhanHarapan::where('id_user', Auth::id())->first();

        return view('profile.edit', compact('title','data_diri','data_ayah','data_ibu','data_keluhan_harapan'));
    }

    public function update(Request $request) {

        $validator = Validator::make($request->all(), [
            // data diri
            'nama'              => 'required',
            'jenis_kelamin'     => 'required',
            'nim'               => 'required',
            'jurusan'           => 'required',
            'fakultas'          => 'required',
            'semester'          => 'required',
            'telp'              => 'required|numeric|digits_between:10,14',
            'tempat_lahir'      => 'required',
            'tanggal_lahir'     => 'required|date',
            'bukti_identitas'   => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
    
            // data ayah
            'nama_ayah'              => 'required',
            'alamat_ayah'            => 'required',
            'pekerjaan_ayah'         => 'required',
            'telp_ayah'              => 'required|numeric|digits_between:10,14',
            'status_ayah'            => 'required',
            'tempat_lahir_ayah'      => 'required',
            'tanggal_lahir_ayah'     => 'required|date',
    
            // data ibu
            'nama_ibu'              => 'required',
            'alamat_ibu'            => 'required',
            'pekerjaan_ibu'         => 'required',
            'telp_ibu'              => 'required|numeric|digits_between:10,14',
            'status_ibu'            => 'required',
            'tempat_lahir_ibu'      => 'required',
            'tanggal_lahir_ibu'     => 'required|date',
    
            // data keluhan harapan
            'keluhan'           => 'required',
            'harapan'           => 'required',
        ]);
    
        if ($validator->fails()) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => $validator->errors()
            ]);
    
            return back()->withInput();
        }
    
        $id = Auth::id();
    
        $dataDiri = DataDiri::where('id_user', $id)->first();
    
        if (!$dataDiri) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => 'Personal data not found'
            ]);
    
            return back()->withInput();
        }
    
        // Simpan path file lama untuk dihapus nanti jika ada file baru
        $oldFilePath = $dataDiri->bukti_identitas;
    
        // Meng-handle upload file jika ada
        if ($request->hasFile('bukti_identitas')) {
            $file = $request->file('bukti_identitas');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('data/user'), $fileName);
            $bukti_identitas_path = 'data/user/' . $fileName;
    
            // Menghapus file lama jika ada
            if ($oldFilePath && file_exists(public_path($oldFilePath))) {
                unlink(public_path($oldFilePath));
            }
        } else {
            // Tetap menggunakan file lama jika tidak ada file baru
            $bukti_identitas_path = $oldFilePath;
        }
    
        // Mengupdate data di dalam database
        $dataDiri->update([
            'nama'              => $request->nama,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'nim'               => $request->nim,
            'jurusan'           => $request->jurusan,
            'fakultas'          => $request->fakultas,
            'semester'          => $request->semester,
            'telp'              => $request->telp,
            'tempat_lahir'      => $request->tempat_lahir,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'bukti_identitas'   => $bukti_identitas_path
        ]);
    
        $dataAyah = DataAyah::where('id_user', $id)->first();
    
        if (!$dataAyah) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => "Father's data not found"
            ]);
    
            return back()->withInput();
        }
    
        $dataAyah->update([
            'nama'              => $request->nama_ayah,
            'alamat'            => $request->alamat_ayah,
            'pekerjaan'         => $request->pekerjaan_ayah,
            'telp'              => $request->telp_ayah,
            'status'            => $request->status_ayah,
            'tempat_lahir'      => $request->tempat_lahir_ayah,
            'tanggal_lahir'     => $request->tanggal_lahir_ayah,
        ]);
    
        $dataIbu = DataIbu::where('id_user', $id)->first();
    
        if (!$dataIbu) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => "Mother's data not found"
            ]);
    
            return back()->withInput();
        }
    
        $dataIbu->update([
            'nama'              => $request->nama_ibu,
            'alamat'            => $request->alamat_ibu,
            'pekerjaan'         => $request->pekerjaan_ibu,
            'telp'              => $request->telp_ibu,
            'status'            => $request->status_ibu,
            'tempat_lahir'      => $request->tempat_lahir_ibu,
            'tanggal_lahir'     => $request->tanggal_lahir_ibu,
        ]);
    
        $dataKeluhanHarapan = DataKeluhanHarapan::where('id_user', $id)->first();
    
        if (!$dataKeluhanHarapan) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => "Complaints and hopes data not found"
            ]);
    
            return back()->withInput();
        }
    
        $dataKeluhanHarapan->update([
            'keluhan'           => $request->keluhan,
            'harapan'           => $request->harapan,
        ]);
    
        session()->flash('toast', [
            'status' => 'success',
            'msg' => 'Data updated successfully'
        ]);
    
        return redirect('/profile');
    }
    
}
