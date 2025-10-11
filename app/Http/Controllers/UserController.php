<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view("dashboard.user.index", [
            "users" => User::all()
        ]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod("GET")) {
            return view("dashboard.user.create");
        }

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3',
            'role' => 'required|in:admin,team',
        ]);

        User::create([
            ...$validated,
            "password" => Hash::make($validated["password"]),
        ]);

        return redirect("/dashboard/user");
    }

    public function update(Request $request, $userId)
    {

        $user = User::findOrFail($userId);

        if ($request->isMethod("GET")) {
            return view("dashboard.user.update", [
                "user" => $user
            ]);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:3',
            'role' => 'required|in:admin,team',
        ]);

        $user->update([
            ...$validated,
            'password' => $validated['password'] ? Hash::make($validated['password']) : $user->password,
        ]);

        return redirect("/dashboard/user");
    }

    public function delete($userId)
    {
        $user = User::findOrFail($userId);

        if (Auth::user()->id === $user->id) {
            return redirect('/dashboard/user')->with('error', 'You cannot delete your own account.');
        }

        $user->delete();

        return redirect('/dashboard/user')->with('success', 'User deleted successfully.');
    }
}
