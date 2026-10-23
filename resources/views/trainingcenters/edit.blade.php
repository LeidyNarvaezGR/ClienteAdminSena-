
@extends('layouts.app')

@section('content')
    <h1>Editar centro de formación</h1>

    <form action="{{ route('trainingcenter.update', $trainingcenter['id']) }}"
          method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name"
               value="{{ old('name', $trainingcenter['name'] ?? '') }}" required>

        <br><br>

        <label for="location">Ubicación:</label>
        <input type="text" id="location" name="location"
               value="{{ old('location', $trainingcenter['location'] ?? '') }}" required>

        <br><br>
        <button type="submit">Actualizar centro</button>
    </form>
@endsection