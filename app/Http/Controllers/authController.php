<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
	public function index(Request $request)
	{
		return view("login");
	}

	public function prosesLogin(Request $request)
	{
		// dd($request);
		$cred = $request->validate(
			[
				"username" => "required",
				"password" => "required",
			],
			[
				"username" => "Username wajib diisi",
				"password" => "Password wajib diisi",
			]
		);

		if (Auth::attempt($cred)) {
			if (Auth::user()->role == "admin") {
				return redirect("/admin");
			} else {
				return redirect("/dashboard");
			}
		} else {
			return redirect("/")
				->withErrors("Username atau Password tidak sesuai")
				->withInput();
		}
	}

	public function logout(Request $request): RedirectResponse
	{
		Auth::logout();

		$request->session()->invalidate();

		$request->session()->regenerateToken();

		return redirect("/");
	}
}
