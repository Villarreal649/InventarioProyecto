@extends('layouts.app')

@section('template_title')
    {{ $modelo->name ?? 'Show Modelo' }}
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Mostrar modelo</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">

            @includeif('partials.errors')
                <div class="card">
                <div class="card-body">
                <div class="float-right">
                                <a href="{{ route('modelos.index') }}" class="btn btn-warning">
                                {{ __('Regresar') }}
                                </a>
                            </div>
                            <br>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $modelo->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Marca a la que pertenece:</strong>
                            {{ $modelo->marca->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
