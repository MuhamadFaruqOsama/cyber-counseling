<?php

namespace App\Http\Controllers\Data;

use App\Models\DataDiri;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DataDiriController extends Controller
{
    public function index() {
        $title = "Data Diri";
        $data_diri = DataDiri::where('id_user', Auth::id())->first();

        return view('data.diri', compact('title', 'data_diri'));
    }

    public function input(Request $request) {

        $validator = Validator::make($request->all(), [
            'nama'              => 'required',
            'jenis_kelamin'     => 'required',
            'nim'               => 'required',
            'jurusan'           => 'required',
            'fakultas'          => 'required',
            'semester'          => 'required',
            'telp'              => 'required|numeric|digits_between:10,14',
            'tempat_lahir'      => 'required',
            'tanggal_lahir'     => 'required|date',
            'bukti_identitas'   => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if($validator->fails()) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => $validator->errors()->all()
            ]);

            return back()->withInput();
        }

        $id_user = Auth::id();
        
        // Meng-handle upload file
        if($request->hasFile('bukti_identitas')) {
            $file = $request->file('bukti_identitas');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('data/user'), $fileName);
            $bukti_identitas_path = 'data/user/' . $fileName;
        } else {
            $bukti_identitas_path = null;
        }

        // Menyimpan data ke dalam database
        DataDiri::create([
            'id_user'           => $id_user,
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

        return redirect()->route('data-ayah');
    }

    public function update(Request $request) {

        $id = Auth::id();

        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama'              => 'required',
            'jenis_kelamin'     => 'required',
            'nim'               => 'required',
            'jurusan'           => 'required',
            'fakultas'          => 'required',
            'semester'          => 'required',
            'telp'              => 'required|numeric|digits_between:10,14',
            'tempat_lahir'      => 'required',
            'tanggal_lahir'     => 'required|date',
            'bukti_identitas'   => 'sometimes|image|mimes:jpeg,png,jpg|max:2048'
        ]);
    
        if($validator->fails()) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => $validator->errors()->all()
            ]);
    
            return back()->withInput();
        }
    
        $dataDiri = DataDiri::where('id_user', $id)->first();
    
        if (!$dataDiri) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => 'data not found'
            ]);
    
            return redirect()->route('data-diri');
        }
    
        // Menyimpan path foto lama untuk dihapus nanti jika ada foto baru
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
            $bukti_identitas_path = $oldFilePath; // Tetap menggunakan file lama jika tidak ada file baru
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
    
        return redirect('data-ayah');
    }
    
}
