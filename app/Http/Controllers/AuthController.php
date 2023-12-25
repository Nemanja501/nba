<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(LoginRequest $request)
    {
        if(Auth::check()){
            return redirect('/login')->withErrors('Already logged in!');
        }
        $credentials = $request->only('email', 'password');
        if(!Auth::attempt($credentials)){
            return redirect('/login')->withErrors('Invalid credentials!');
        }

        return redirect('/teams')->with('status', 'Logged in!');
    }

    public function showRegister(){
        return view('pages.register');
    }

    public function showLogin(){
        return view('pages.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/login')->with('status', 'Successfully created account!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Session::flush();
        Auth::logout();

        return redirect('/teams');
    }
}
