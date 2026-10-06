<div class="container mt-4">
    <h1 class="mb-4">Lista de Courses</h1>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>course_number</th>
                <th>Day</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course['id'] }}</td>
                    <td>{{ $course['course_number'] }}</td>
                    <td>{{ $course['day'] }}</td>
                    
                    <td>
                        <a href="{{ route('course.show', $course['id']) }}">
                            Ver más
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>