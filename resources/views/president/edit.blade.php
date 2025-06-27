@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('presidents.update', $president->dni) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="dni" class="form-label">DNI</label>
        <input type="text" class="form-control" id="dni" name="dni" value="{{ $president->dni }}" readonly>
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $president->nombre }}" required>
    </div>
    <div class="mb-3">
        <label for="apellidos" class="form-label">Apellidos</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $president->apellidos }}" required>
    </div>
    <div class="mb-3">
        <label for="fecha_nac" class="form-label">Fecha de Nacimiento</label>
        <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" value="{{ $president->fecha_nac }}" required>
    </div>
    <div class="mb-3">
        <label for="año" class="form-label">Año</label>
        <input type="number" class="form-control" id="año" name="año" value="{{ $president->año }}" required>
    </div>
    <button type="submit" class="btn btn-
