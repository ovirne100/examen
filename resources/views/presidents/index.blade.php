@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Presidentes</h1>
    <a href="{{ route('presidents.create') }}" class="btn btn-success mb-3">Nuevo Presidente</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha de Nacimiento</th>
                <th>Año</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($presidents as $president)
            <tr>
                <td>{{ $president->dni }}</td>
                <td>{{ $president->name }}</td>
                <td>{{ $president->last_name }}</td>
                <td>{{ $president->birth_date }}</td>
                <td>{{ $president->year }}</td>
                <td>
                    <a href="{{ route('presidents.show', $president->dni) }}" class="btn btn-info btn-sm">Ver Más</a>
                    <a href="{{ route('presidents.edit', $president->dni) }}" class="btn btn-primary btn-sm">Editar</a>
                    <form action="{{ route('presidents.destroy', $president->dni) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este presidente?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
