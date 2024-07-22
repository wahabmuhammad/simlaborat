<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pendaftaranController extends Controller
{
	public function index()
	{
		return view("pendaftaran");
	}

	public function registrasi(Request $request)
	{
        $user = Auth::user()->id;
		// validasi request
		$request->validate([
			"namaPasien" => "required|max:255|string",
			"tempatLahir" => "required|string",
			"tanggalLahir" => "required|date",
			"alamat" => "required",
		]);

		// Generate nomor rekam medis
		$normTerbaru = pasien::orderBy("id", "desc")->first();
		$latestNumber = $normTerbaru
			? intval($normTerbaru->norm)
			: 0;
		$newNumber = str_pad($latestNumber + 1, 6, "0", STR_PAD_LEFT);
		$norm = $newNumber;

        // simpan data
        $pasien = pasien::create([
            'norm' => $norm,
            'namapasien' => $request->namaPasien,
            'alamat' => $request->alamat,
            'tgl_lahir' => $request->tanggalLahir,
            'tempat_lahir' => $request->tempatLahir,
            'user_fk' => $user
        ]);
        notify()->success('Berhasil menyimpan data pasien');
        return redirect('/pendaftaran');
	}
}
