<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\DataIbu;
use App\Models\DataAyah;
use App\Models\DataDiri;
use Illuminate\Http\Request;
use App\Models\DataKeluhanHarapan;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        // Cek apakah user sudah mengisi data diri, ayah, ibu, dan keluhan harapan
        $dataDiri = DataDiri::where('id_user', $user->id)->first();
        $dataAyah = DataAyah::where('id_user', $user->id)->first();
        $dataIbu = DataIbu::where('id_user', $user->id)->first();
        $dataKeluhanHarapan = DataKeluhanHarapan::where('id_user', $user->id)->first();

        if (!$dataDiri || !$dataAyah || !$dataIbu || !$dataKeluhanHarapan) {

            if(!$dataDiri) {

                session()->flash('toast', [
                    'status' => 'info',
                    'msg' => 'Please complete your personal data first'
                ]);

                return redirect('/data-diri');
            } else if($dataDiri && !$dataAyah) {

                session()->flash('toast', [
                    'status' => 'info',
                    'msg' => "Please complete your Father's personal data first"
                ]);

                return redirect('/data-ayah');
            } else if($dataDiri && $dataAyah && ! $dataIbu) {

                session()->flash('toast', [
                    'status' => 'info',
                    'msg' => "Please complete your Mother's personal data first"
                ]);

                return redirect('/data-ibu');
            } else {

                session()->flash('toast', [
                    'status' => 'info',
                    'msg' => "Please complete your complaints and hopes data first"
                ]);

                return redirect('/keluhan-harapan');
            }

        }

        return $next($request);
    }
}
