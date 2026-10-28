<tbody>

    <div>
        <a href="{{ route('area.create') }}" class="btn btn-outline-success btn-sm">
            Nueva area
        </a>
        <br><br>
    </div>

    @forelse($areas ?? [] as $area)

        <tr>
            <td>{{ $area['id'] }}</td>
            <td>{{ $area['name'] }}</td>
            <td>
                <img src="{{ $area['imagen_url'] }}" alt="{{ $area['name'] }}" width="100">
            </td>
            <td>
                <a href="{{ route('area.show', $area['id']) }}" class="btn btn-info btn-sm">
                    Ver más
                </a>
            </td>
            <td>
                <a href="{{ route('area.edit', $area['id']) }}" class="btn btn-warning btn-sm">
                    Editar
                </a>
            </td>
            <td>
                <form action="{{ route('area.destroy', $area['id']) }}"
                      method="POST"
                      style="display: inline-block;"
                      onsubmit="return confirm('¿Estás seguro de eliminar esta area?')">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm">
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>

    @empty

        <tr>
            <td colspan="6" class="text-center">
                No hay áreas registradas
            </td>
        </tr>

    @endforelse

</tbody>