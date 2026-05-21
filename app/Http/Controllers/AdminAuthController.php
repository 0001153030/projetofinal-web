<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'password' => ['required', 'string'],
        ]);

        $adminPassword = env('ADMIN_PASSWORD', 'admin');

        if (hash_equals((string) $adminPassword, (string) $request->input('password'))) {
            $request->session()->put('is_admin', true);

            return redirect()->route('admin.home');
        }

        return back()->withErrors(['password' => 'Senha incorreta'])->withInput();
    }

    public function logout(Request $request)
    {
        $request->session()->forget('is_admin');

        return redirect()->route('admin.login');
    }
}
