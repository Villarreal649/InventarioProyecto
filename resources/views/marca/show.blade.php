@extends('layouts.app')

@section('template_title')
    {{ $marca->name ?? 'Show Marca' }}
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Mostrar marcas</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">

            @includeif('partials.errors')
                <div class="card">
                <div class="card-body">
                <div class="float-right">
                                <a href="{{ route('marcas.index') }}" class="btn btn-warning">
                                {{ __('Regresar') }}
                                </a>
                            </div>
                            <br>
                        <div class="form-group">
                            <strong>Nombre de marca:</strong>
                            {{ $marca->name }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $marca->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
