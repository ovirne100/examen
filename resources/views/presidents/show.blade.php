@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle del Presidente</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $president->name }} {{ $president->last_name }}</h5>
            <p class="card-text"><strong>DNI:</strong> {{ $president->dni }}</p>
            <p class="card-text"><strong>Fecha de Nacimiento:</strong> {{ $president->birth_date }}</p>
            <p class="card-text"><strong>Año:</strong> {{ $president->year }}</p>
            <a href="{{ route('presidents.index') }}" class="btn btn-secondary">Volver</a>
            <a href="{{ route('presidents.edit', $president->dni) }}" class="btn btn-primary">Editar</a>
        </div>
    </div>
</div>
