<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        return view(view: 'event.event');
    }

    // public function create()
    // {
    //     return view('event.create');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'judul' => 'required|string|max:255',
    //         'deskripsi' => 'required',
    //         'tanggal' => 'required|date',
    //     ]);

    //     Event::create($request->all());

    //     return redirect()->route('event.index')->with('success', 'Event berhasil dibuat');
    // }
}