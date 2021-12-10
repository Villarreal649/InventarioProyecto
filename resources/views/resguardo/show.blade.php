@extends('layouts.app')
@section('template_title')
    Mostrar Resguardo
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Mostrar Resguardo</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">

                @includeif('partials.errors')
                    <div class="card">
                    <div class="card-body">
                    <div class="float-right">
                                    <a href="{{ route('resguardos.index') }}" class="btn btn-warning">
                                    {{ __('Regresar') }}
                                    </a>
                                </div>
                                <br>

                                <div class="form-group">
                            <strong>Nombre Solicitante:</strong>
                            {{ $resguardo->nombre_solicitante }}
                        </div>
                        <div class="form-group">
                            <strong>No. Telefónico:</strong>
                            {{ $resguardo->number }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $resguardo->email }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Resguardo:</strong>
                            {{ $resguardo->fecha_resguardo }}
                        </div>
                        <div class="form-group">
                            <strong>Matrícula:</strong>
                            {{ $resguardo->matricula }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Devolución:</strong>
                            {{ $resguardo->fecha_dev }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $resguardo->observaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Encargado:</strong>
                            {{ $resguardo->user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Area Resguardo:</strong>
                            {{ $resguardo->area->name}}

                    </div>


                    </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



