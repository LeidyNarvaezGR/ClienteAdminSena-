@extends('layouts.app')

@section('content')
    <h1>Crear área</h1>

    <form action="{{ route('area.store') }}" method="POST">
        @csrf

        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>

        <br><br>
        <button type="submit">Guardar área</button>
    </form>
@endsection