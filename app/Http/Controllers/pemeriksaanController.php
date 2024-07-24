<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class pemeriksaanController extends Controller
{
	public function index()
	{
		$dataPasien =  DB::table('pasien_t')->where('statusenabled', '=' ,true)->get();
		$datas = $dataPasien->toArray();
		return view("pemeriksaan", compact('datas'));
	}
}
