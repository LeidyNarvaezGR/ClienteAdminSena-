@extends('layouts.app')

@section('content')
    <h1>Crear centro de formación</h1>

    <form action="{{ route('trainingcenter.store') }}" method="POST">
        @csrf

        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>

        <br><br>

        <label for="location">Ubicación:</label>
        <input type="text" id="location" name="location" required>

        <br><br>
        <button type="submit">Guardar centro</button>
    </form>
@endsection