<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Admin\LoginRequest;
use App\Http\Requests\Auth\Admin\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function login_view()
    {

        return view('auth.admin.login');
    }

    public function login(LoginRequest $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password,  'status' => 'active'])) {
            if (auth()->user()->role == 'admin') {
                return redirect()->route('admin.index');
            } else {
                return redirect()->route('dashboard');
            }
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records'
        ])->onlyInput('email');


        return redirect()->route('admin.index');
    }

    public function logout()
    {
        Auth::logout();

        return back();
    }

    public function register_view()
    {
        return view('auth.admin.register');
    }

    public function register(RegisterRequest $request)
    {

        // dd($request->all());

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
            'address' => $request->address,
            'role' => 'admin',
        ]);

        Auth::login($user);


        return redirect()->route('admin.index');
    }
}
