
@extends('layouts.app')

@section('content')
    <h1>Editar computador</h1>

    <form action="{{ route('computer.update', $computer['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="number">Número:</label>
        <input type="number" id="number" name="number"
               value="{{ old('number', $computer['number'] ?? '') }}" required>

        <br><br>

        <label for="brand">Marca:</label>
        <input type="text" id="brand" name="brand"
               value="{{ old('brand', $computer['brand'] ?? '') }}" required>

        <br><br>
        <button type="submit">Actualizar computador</button>
    </form>
@endsection