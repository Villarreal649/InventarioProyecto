

@extends('layouts.app')
@section('template_title')
    Mostrar Prestamo
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Mostrar Prestamo</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">

                @includeif('partials.errors')
                    <div class="card">
                    <div class="card-body">
                    <div class="float-right">
                                    <a href="{{ route('prestamos.index') }}" class="btn btn-warning">
                                    {{ __('Regresar') }}
                                    </a>
                                </div>
                                <br>

                        <div class="form-group">
                            <strong>Matrícula: </strong>
                            {{ $prestamo->matricula }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre solicitante: </strong>
                            {{ $prestamo->name }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha salida: </strong>
                            {{ $prestamo->fecha_sali }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha devolución: </strong>
                            {{ $prestamo->fecha_dev }}
                        </div>

                        <div class="form-group">
                            <strong>Observaciones: </strong>
                            {{ $prestamo->observaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Encargado: </strong>
                            {{ $prestamo->user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Area de prestamos: </strong>
                            {{ $prestamo->area->name}}
                        </div>


                    </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



