<div class="container my-5">
    <h2>Detalles del Apprentice</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Cell_number</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{ $apprentice['id'] }}</td>
                <td>{{ $apprentice['name'] }}</td>
                <td>{{ $apprentice['email'] }}</td>
                <td>{{ $apprentice['cell_number'] }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('apprentices') }}">
        Volver
    </a>
</div>