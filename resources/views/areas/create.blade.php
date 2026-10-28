@extends('layouts.app')

@section('content')
    <h1>Crear Categoria</h1>

    <form action="{{ route('area.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br><br>
        <div class="mb-3">
            <label class="form-label">Imagen</label>
            <input type="file" name="imagen" class="form-control" accept="image/*">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-outline-success btn-sm">Guardar área</button>
        </div>
    </form>
@endsection