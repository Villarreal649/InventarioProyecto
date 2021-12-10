@extends('layouts.app')

@section('template_title')
    {{ $subcategoria->name ?? 'Show subCategoria' }}
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Mostrar sub-categorias</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">

            @includeif('partials.errors')
                <div class="card">
                <div class="card-body">
                <div class="float-right">
                                <a href="{{ route('subcategorias.index') }}" class="btn btn-warning">
                                {{ __('Regresar') }}
                                </a>
                            </div>
                            <br>
                        <div class="form-group">
                            <strong>Nombre de la sub-categoría:</strong>
                            {{ $subcategoria->name }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $subcategoria->categoria->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection