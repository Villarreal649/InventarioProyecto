@extends('layouts.app')

@section('template_title')
    {{ $categoria->name ?? 'Show Categoria' }}
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Mostrar categorias</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">

            @includeif('partials.errors')
                <div class="card">
                <div class="card-body">
                <div class="float-right">
                                <a href="{{ route('categorias.index') }}" class="btn btn-warning">
                                {{ __('Regresar') }}
                                </a>
                            </div>
                            <br>
                        <div class="form-group">
                            <strong>Nombre de la categoría:</strong>
                            {{ $categoria->name }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $categoria->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
