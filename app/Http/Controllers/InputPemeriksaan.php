<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputPemeriksaan extends Controller
{
    public function index()
	{

		return view("input-pemeriksaan");
	}
}
