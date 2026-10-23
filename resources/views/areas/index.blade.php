@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Lista de áreas</h1>

    <a href="{{ route('area.create') }}" class="btn btn-success mb-3">
        Nueva área
    </a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($areas as $area)
                <tr>
                    <td>{{ $area['id'] }}</td>
                    <td>{{ $area['name'] }}</td>
                    <td>
                        <a href="{{ route('area.show', $area['id']) }}"
                           class="btn btn-info btn-sm">Ver más</a>

                        <a href="{{ route('area.edit', $area['id']) }}"
                           class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('area.destroy', $area['id']) }}"
                              method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Deseas eliminar esta área?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection