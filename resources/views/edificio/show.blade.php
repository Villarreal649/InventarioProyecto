@extends('layouts.app')

@section('template_title')
    {{ $edificio->name ?? 'Datos de Edificio' }}
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Mostrar edificio</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">

            @includeif('partials.errors')
                <div class="card">
                <div class="card-body">
                <div class="float-right">
                                <a href="{{ route('edificios.index') }}" class="btn btn-warning">
                                {{ __('Regresar') }}
                                </a>
                            </div>
                            <br>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre Edificio:</strong>
                            {{ $edificio->name }}
                        </div>
                        <div class="form-group">
                            <strong>No.Teléfono:</strong>
                            {{ $edificio->number }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $edificio->email }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicación:</strong>
                            {{ $edificio->ubicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Encargado Edificio:</strong>
                            {{ $edificio->user->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
