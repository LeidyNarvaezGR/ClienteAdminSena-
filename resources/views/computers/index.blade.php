
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Lista de computadores</h1>

    <a href="{{ route('computer.create') }}" class="btn btn-success mb-3">
        Nuevo computador
    </a>

    <table border="1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Número</th>
                <th>Marca</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($computers as $computer)
                <tr>
                    <td>{{ $computer['id'] }}</td>
                    <td>{{ $computer['number'] }}</td>
                    <td>{{ $computer['brand'] }}</td>
                    <td>
                        <a href="{{ route('computer.show', $computer['id']) }}"
                           class="btn btn-info btn-sm">Ver más</a>

                        <a href="{{ route('computer.edit', $computer['id']) }}"
                           class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('computer.destroy', $computer['id']) }}"
                              method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Deseas eliminar este computador?')">
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