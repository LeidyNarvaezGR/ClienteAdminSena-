@extends('layouts.app')

@section('content')
    <h1>Editar área</h1>

    <form action="{{ route('area.update', $area['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name"
               value="{{ old('name', $area['name'] ?? '') }}" required>

        <br><br>
        <button type="submit">Actualizar área</button>
    </form>
@endsection