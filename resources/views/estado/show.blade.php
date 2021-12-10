@extends('layouts.app')

@section('template_title')
    {{ $estado->name ?? 'Show Estado' }}
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Mostrar estado</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">

            @includeif('partials.errors')
                <div class="card">
                <div class="card-body">
                <div class="float-right">
                                <a href="{{ route('estados.index') }}" class="btn btn-warning">
                                {{ __('Regresar') }}
                                </a>
                            </div>
                            <br>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $estado->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $estado->observaciones }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
