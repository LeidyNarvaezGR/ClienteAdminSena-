<div class="container mt-4">
    <h1 class="mb-4">Lista de Computers</h1>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Number</th>
                <th>Brand</th>
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
                        <a href="{{ route('computer.show', $computer['id']) }}">
                            Ver más
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>