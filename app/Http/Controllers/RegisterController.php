<?php

namespace App\Http\Controllers;

use App\Models\Universities;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        $universities = Universities::all();
        return view('pages.register', compact('universities'));

    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'university_id' =>'required'
        ]);

        event(new Registered($user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'university_id' => $request->university_id
        ])));

        Auth::login($user);

        return redirect()->route('dashboard')->with(['message' => 'Registration success', 'alert' => 'alert-success']);
    }
}
