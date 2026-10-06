<div class="container my-5">
    <h2 class="mb-4 text-success">Detalles de Teacher</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-success">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{ $teacher['id'] }}</td>
                    <td>{{ $teacher['name'] }}</td>
                    <td>{{ $teacher['email'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>