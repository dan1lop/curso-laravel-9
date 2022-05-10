@extends('layouts.app')

@section('title', 'Detalhes do usuário')

@section('content')
<h1>Detalhes do Usuário {{ $user->name }}</h1>

<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
    <li>{{ $user->created_at }}</li>
</ul>

<form action="{{ route('users.destroy', $user->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button>Deletar</button>
</form>

@endsection