@extends('layouts.app')

@section('content')
    <h1>Crear computador</h1>

    <form action="{{ route('computer.store') }}" method="POST">
        @csrf

        <label for="number">Número:</label>
        <input type="number" id="number" name="number" required>

        <br><br>

        <label for="brand">Marca:</label>
        <input type="text" id="brand" name="brand" required>

        <br><br>
        <button type="submit">Guardar computador</button>
    </form>
@endsection