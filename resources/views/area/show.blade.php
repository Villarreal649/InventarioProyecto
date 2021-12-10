

@extends('layouts.app')
@section('template_title')
    Mostrar áreas
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Mostrar áreas</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">

                @includeif('partials.errors')
                    <div class="card">
                    <div class="card-body">
                    <div class="float-right">
                                    <a href="{{ route('areas.index') }}" class="btn btn-warning">
                                    {{ __('Regresar') }}
                                    </a>
                                </div>
                                <br>

                                <div class="form-group">
                            <strong>Nombre del área:</strong>
                            {{ $area->name }}
                        </div>
                        <div class="form-group">
                            <strong>Se encuentra en la planta:</strong>
                            {{ $area->planta->name}}
                        </div>
                        <div class="form-group">
                            <strong>Se encuentra en el edificio:</strong>
                            {{ $area->edificio->name  }}
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



