<div class="container my-5">
    <h2>Detalles del Course</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>curse_number</th>
                <th>Day</th>
               
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{ $course['id'] }}</td>
                <td>{{ $course['course_number'] }}</td>
                <td>{{ $course['day'] }}</td>
                
            </tr>
            </tbody>
        </table>
    </div>
</div>