<div class="container mt-4">
    <h1 class="mb-4">Lista de Apprentices</h1>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Cell_number</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($apprentices as $apprentice)
                <tr>
                    <td>{{ $apprentice['id'] }}</td>
                    <td>{{ $apprentice['name'] }}</td>
                    <td>{{ $apprentice['email'] }}</td>
                    <td>{{ $apprentice['cell_number'] }}</td>
                    <td>
                        <a href="{{ route('apprentice.show', $apprentice['id']) }}">
                            Ver más
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>