<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function index(Request $request){
        // dd($request);
        return view('welcome');
    }
}
