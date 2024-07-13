<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index(){
        $pegawai_id = Auth::user()->pegawai_id;
        // $pegawai_fk = 1;
        // $data = User::with('pegawai')->find($pegawai_id)->get();
        $data = pegawai::where('id', $pegawai_id)->first();
        // $data = User::find(Auth::user()->pegawai_id)->getRelations();
        // dd($data);
        return view('dashboard');
    }
}
