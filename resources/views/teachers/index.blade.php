<div class="container mt-4">
    <h1 class="mb-4">Lista de Teachers</h1>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                
            </tr>
        </thead>

        <tbody>
            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $teacher['id'] }}</td>
                    <td>{{ $teacher['name'] }}</td>
                    <td>{{ $teacher['email'] }}</td>
                    <td>
                        <a href="{{ route('teacher.show', $teacher['id']) }}">
                            Ver más
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>