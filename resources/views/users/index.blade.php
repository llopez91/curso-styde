@extends('layout')

@section('title', "Usuarios")

@section('content')

    <h1>{{ $title }}</h1>

    <ul>
        @forelse ($users as $user)
            <li><a href=" {{ url("/usuarios/{$user['id']}") }}">{{ $user['usuario'] }}</a></li>
        @empty
            <li>No hay usuarios registrados. </li>
        @endforelse
    </ul>

    <ul>
        @foreach($otroArray as $cosa)
            <li>{{ $cosa }}</li>
        @endforeach
    </ul>
@endsection

@section('sidebar')
    <h1>Otra barra lateral</h1>
@endsection
