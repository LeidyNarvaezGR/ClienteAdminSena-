
<div class="container my-5">
    <h2 class="mb-4 text-success">Detalles de TrainingCenter</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-success">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $trainingcenter['id'] }}</td>
                    <td>{{ $trainingcenter['name'] }}</td>
                    <td>{{ $trainingcenter['location'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>