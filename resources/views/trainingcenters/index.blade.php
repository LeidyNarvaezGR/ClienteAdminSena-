@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Lista de centros de formación</h1>

    <a href="{{ route('trainingcenter.create') }}" class="btn btn-success mb-3">
        Nuevo centro
    </a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ubicación</th>
                <th>Acciones</th>
            </tr>

        </thead>

        <tbody>
            @foreach ($trainingcenters as $trainingcenter)
                <tr>
                    <td>{{ $trainingcenter['id'] }}</td>
                    <td>{{ $trainingcenter['name'] }}</td>
                    <td>{{ $trainingcenter['location'] }}</td>
                    <td>
                        <a href="{{ route('trainingcenter.show', $trainingcenter['id']) }}"
                           class="btn btn-info btn-sm">Ver más</a>

                        <a href="{{ route('trainingcenter.edit', $trainingcenter['id']) }}"
                           class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('trainingcenter.destroy', $trainingcenter['id']) }}"
                              method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Deseas eliminar este centro?')">
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