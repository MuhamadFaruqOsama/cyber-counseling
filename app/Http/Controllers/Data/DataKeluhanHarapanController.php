<?php

namespace App\Http\Controllers\Data;

use Illuminate\Http\Request;
use App\Models\DataKeluhanHarapan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DataKeluhanHarapanController extends Controller
{
    public function index() {
        $title = "Keluhan Harapan";
        $data_keluhan_harapan = DataKeluhanHarapan::where('id_user', Auth::id())->first();        

        return view('data.keluhan-harapan', compact('title', 'data_keluhan_harapan'));
    }

    public function input(Request $request) {
        $validator = Validator::make($request->all(), [
            'keluhan'           => 'required',
            'harapan'           => 'required',
        ]);

        if($validator->fails()) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => $validator->errors()->all()
            ]);

            return back()->withInput();
        }

        $id_user = Auth::id();

        DataKeluhanHarapan::create([
            'id_user'           => $id_user,
            'keluhan'           => $request->keluhan,
            'harapan'           => $request->harapan,
        ]);

        return redirect('/kuisioner');
    }

    public function update(Request $request) {

        $id = Auth::id();

        $validator = Validator::make($request->all(), [
            'keluhan'           => 'required',
            'harapan'           => 'required',
        ]);
    
        if($validator->fails()) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => $validator->errors()->all()
            ]);
    
            return back()->withInput();
        }
    
        $dataKeluhanHarapan = DataKeluhanHarapan::where('id_user', $id)->first();
    
        if (!$dataKeluhanHarapan) {
            session()->flash('toast', [
                'status' => 'error',
                'msg' => 'data not found'
            ]);
    
            return redirect()->route('keluhan-harapan');
        }
    
        $dataKeluhanHarapan->update([
            'keluhan'           => $request->keluhan,
            'harapan'           => $request->harapan,
        ]);
    
        return redirect('/kuisioner');
    }
}
