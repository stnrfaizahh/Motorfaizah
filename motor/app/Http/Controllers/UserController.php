<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use App\Models\Galeri;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function dashboard()
    {
        // Logika untuk dashboard, misalnya mengembalikan view
        return view('layouts.layout');
    }
    // Menampilkan semua user
    public function index()
    {
        $users = User::with('profile', 'galeri', 'artikel')->get();
        return view('users.index', compact('users'));
    }

    // Menampilkan detail user berdasarkan ID
    public function show($id)
    {
        $user = User::with('profile', 'galeri', 'artikel')->findOrFail($id);
        return view('users.show', compact('user'));
    }

    // Menampilkan form untuk membuat user baru
    public function create()
    {
        return view('users.create');
    }

    // Menyimpan user baru ke database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role' => 'required|string',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => $validatedData['role'],
            'status_pendaftaran' => 'pending', // Default status pendaftaran
        ]);

        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan.');
    }

    // Menampilkan form edit user berdasarkan ID
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    // Mengupdate data user
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|string',
        ]);

        $user = User::findOrFail($id);
        $user->update($validatedData);

        if ($request->filled('password')) {
            $user->update([
                'password' => Hash::make($request->password),
            ]);
        }

        return redirect()->route('users.index')->with('success', 'User berhasil diperbarui.');
    }

    // Menghapus user berdasarkan ID
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User berhasil dihapus.');
    }

    // Mengelola profil user
    public function manageProfile(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $profile = $user->profile;

        $validatedData = $request->validate([
            'bio' => 'required|string',
            'alamat' => 'required|string',
            'tanggal_lahir' => 'required|date',
        ]);

        if ($profile) {
            $profile->update($validatedData);
        } else {
            $user->profile()->create($validatedData);
        }

        return redirect()->route('users.show', $user->id)->with('success', 'Profil berhasil diperbarui.');
    }

    // Menambahkan foto ke galeri user
    public function uploadGaleri(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validatedData = $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|string',
        ]);

        $path = $request->file('foto')->store('galeri', 'public');

        $user->galeri()->create([
            'foto' => $path,
            'deskripsi' => $validatedData['deskripsi'],
        ]);

        return redirect()->route('users.show', $user->id)->with('success', 'Foto berhasil diunggah ke galeri.');
    }

    // Menambahkan artikel untuk user
    public function createArtikel(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
        ]);

        $user->artikel()->create($validatedData);

        return redirect()->route('users.show', $user->id)->with('success', 'Artikel berhasil ditambahkan.');
    }

    // Mengubah status pendaftaran user
    public function updateStatusPendaftaran($id, $status)
    {
        $user = User::findOrFail($id);
        $user->status_pendaftaran = $status;
        $user->save();

        return redirect()->route('users.show', $user->id)->with('success', 'Status pendaftaran berhasil diperbarui.');
    }

    // Mengecek apakah user adalah admin
    public function checkAdmin($id)
    {
        $user = User::findOrFail($id);
        if ($user->isAdmin()) {
            return "User ini adalah Admin.";
        } else {
            return "User ini bukan Admin.";
        }
    }
}