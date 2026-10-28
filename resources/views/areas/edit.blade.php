@extends('layouts.app')

@section('content')
    <h1>Editar área</h1>

    <div class="mb-3">
        @if(!empty($area['imagen_url'] ?? null))
            <img src="{{ $area['imagen_url'] }}" alt="{{ $area['name'] }}" width="150" class="img-thumbnail mb-2">
        @endif
    </div>

    <form action="{{ route('area.update', $area['id'] ?? 0) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name"
               value="{{ old('name', $area['name'] ?? '') }}" required>

        <br><br>

        <div class="mb-3">
            <label class="form-label">Imagen </label>
            <input type="file" name="imagen" class="form-control" accept="image/*">
        </div>

        <br><br>
        <button type="submit">Actualizar área</button>
    </form>
@endsection