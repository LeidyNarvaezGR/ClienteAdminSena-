<div class="container my-5">
    <h2 class="mb-4 text-success">Detalles del Área</h2>

    @if(!empty($area['imagen_url'] ?? null))
        <img src="{{ $area['imagen_url'] }}" alt="{{ $area['name'] }}" width="200" class="img-thumbnail mb-3">
    @endif

    <table class="table table-bordered table-hover">
        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $area['id'] ?? '-' }}</td>
                <td>{{ $area['name'] ?? '-' }}</td>
                <td>
                    @if(!empty($area['imagen_url'] ?? null))
                        <a href="{{ $area['imagen_url'] }}" target="_blank">Ver imagen en Cloudinary</a>
                    @else
                        Sin imagen
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
</div>