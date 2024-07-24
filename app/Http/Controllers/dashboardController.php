<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function index(){
        $dataPasien =  DB::table('pasien_t')->get();
        $pasienTerdaftar = $dataPasien->count();
		$datas = $dataPasien->toArray();
		// dd($pasienTerdaftar);
		// return view("pendaftaran", compact('datas'));
        return view('dashboard', compact('datas', 'pasienTerdaftar'));
    }
}
