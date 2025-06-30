@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('presidents.store') }}">
    @csrf
    <div class="mb-3">
        <label for="dni" class="form-label">DNI</label>
        <input type="text" class="form-control" id="dni" name="dni" required>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name"  required>
    </div>
    <div class="mb-3">
        <label for="last_name" class="form-label">Apellidos</label>
        <input type="text" class="form-control" id="last_name" name="last_name" required>
    </div>
    <div class="mb-3">
        <label for="birth_date" class="form-label">Fecha de Nacimiento</label>
        <input type="date" class="form-control" id="birth_date" name="birth_date" required>
    </div>
    <div class="mb-3">
        <label for="year" class="form-label">Año</label>
        <input type="number" class="form-control" id="year" name="year" required>
    </div>
    <button type="submit" class="btn btn-primary">Crear</button>
</form>
@endsection
