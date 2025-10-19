<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        if ($request->isMethod("GET")) {
            return view("login");
        }

        $request->validate([
            "email" => "required|string",
            "password" => "required|string"
        ]);

        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        $user = User::where('email', $credentials["email"])->first();

        if (!$user) {
            return redirect()->back()->with('message-error', 'Username or password is incorrect');
        }
        
        if ($user) {
            if (password_verify($credentials["password"], $user->password)) {
                Auth::login($user);
                $request->session()->regenerate();

                return redirect("/dashboard");
            }
        }

        return redirect()->back()->with("message-error", "username or password is incorrect");
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
