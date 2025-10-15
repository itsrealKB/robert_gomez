<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Web\LoginRequest;
use App\Http\Requests\Auth\Web\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebAuthController extends Controller
{
    public function login_view()
    {

        return view('auth.web.login');
    }

    public function login(LoginRequest $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (auth()->user()->role == 'agent') {

                return redirect()->route('dashboard');
            } else {
                return redirect()->route('admin.index');
            }
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records'
        ])->onlyInput('email');


    }

    public function logout()
    {
        Auth::logout();

        return back();
    }

    public function register_view()
    {
        return view('auth.web.register');
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
            'role' => 'agent',
        ]);

        Auth::login($user);


        return redirect()->route('dashboard');
    }
}
