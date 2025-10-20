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
        if ($request->isMethod('GET')) {
            return view('dashboard.user.create');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3',
            'role' => 'required|in:admin,team',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.unique' => 'Email sudah digunakan.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 3 karakter.',
            'role.required' => 'Role wajib dipilih.',
        ]);

        $user = User::create([
            ...$validated,
            'password' => Hash::make($validated['password']),
        ]);

        if ($user) {
            return redirect()
                ->route('user.index')
                ->with('message-success', 'User berhasil ditambahkan!');
        }

        return redirect()
            ->route('user.index')
            ->with('message-error', 'Gagal menambahkan user!');
    }

    public function update(Request $request, $userId)
    {
        $user = User::findOrFail($userId);

        if ($request->isMethod('GET')) {
            return view('dashboard.user.update', [
                'user' => $user
            ]);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:3',
            'role' => 'required|in:admin,team',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.unique' => 'Email sudah digunakan.',
            'password.min' => 'Password minimal 3 karakter.',
            'role.required' => 'Role wajib dipilih.',
        ]);

        $updated = $user->update([
            ...$validated,
            'password' => $validated['password']
                ? Hash::make($validated['password'])
                : $user->password,
        ]);

        if ($updated) {
            return redirect()
                ->route('user.index')
                ->with('message-success', 'User berhasil diperbarui!');
        }

        return redirect()
            ->route('user.index')
            ->with('message-error', 'Gagal memperbarui user!');
    }

    public function delete($userId)
    {
        $user = User::findOrFail($userId);
        $deleted = $user->delete();

        if ($deleted) {
            return redirect()
                ->route('user.index')
                ->with('message-success', 'User berhasil dihapus!');
        }

        return redirect()
            ->route('user.index')
            ->with('message-error', 'Gagal menghapus user!');
    }
}
