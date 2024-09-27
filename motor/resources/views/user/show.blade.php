@extends('layouts.layout')

@section('content')
    <h2>Profil User</h2>
    <p><strong>Nama:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>

    @if (Auth::user()->id == $user->id || Auth::user()->isAdmin())
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit Profil</a>
        <form action="{{ route('users.updatePassword', $user->id) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('PATCH')
            <button type="submit" class="btn btn-warning">Ubah Password</button>
        </form>
    @endif
@endsection
