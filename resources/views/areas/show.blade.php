<div class="container my-5">
    <h2 class="mb-4 text-success">Detalles del Área</h2>

    <table class="table table-bordered table-hover">
        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $area['id'] }}</td>
                <td>{{ $area['name'] }}</td>
            </tr>
        </tbody>
    </table>
</div>