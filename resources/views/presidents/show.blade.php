@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle del Presidente</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $president->nombre }} {{ $president->apellidos }}</h5>
            <p class="card-text"><strong>DNI:</strong> {{ $president->dni }}</p>
            <p class="card-text"><strong>Fecha de Nacimiento:</strong> {{ $president->fecha_nac }}</p>
            <p class="card-text"><strong>Año:</strong> {{ $president->año }}</p>
            <a href="{{ route('presidents.index') }}" class="btn btn-secondary">Volver</a>
            <a href="{{ route('presidents.edit', $president->dni) }}" class="btn btn-primary">Editar</a>
        </div>
    </div>
</div>
