<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
        return view('galery.index');
    }
    
    // public function create()
    // {
    //     return view('galeri.create');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'deskripsi' => 'required',
    //     ]);

    //     $foto = $request->file('foto')->store('galeri');

    //     Galeri::create([
    //         'user_id' => auth()->id(),
    //         'foto' => $foto,
    //         'deskripsi' => $request->deskripsi,
    //     ]);

    //     return redirect()->route('galeri.index')->with('success', 'Foto berhasil diunggah');
    // }
}