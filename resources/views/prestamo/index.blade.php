
@extends('layouts.app')

@section('template_title')
    Prestamos
@endsection


@section('content')

    <section class="section">
        <div class="section-header">
        
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                        <div class="float-left">
                                <div class="head-text">Prestamos</div>
                            </div>
                        @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                            @can('crear-rol')

                            <div class="float-right">
                                <a href="{{ route('prestamos.create') }}" class="btn btn-warning">
                                {{ __('Agregar ') }} <i class="fa fa-plus"></i>
                                </a>
                              </div>
                            @endcan
                        <div class="table-responsive">
                        <table class="table table-striped table-hover mt-2" id="prestamos">
                                <thead class="table-light">
                                <tr>
                                        <th>No</th>
										<th>Matrícula</th>
										<th>Nombre de solcitante</th>
                                        <th>Fecha Salida</th>
										<th>Fecha Devolución</th>
										<th>Observaciones</th>
										<th>Encargado</th>
										<th>Area donde se presto</th>
                                        <th>Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($prestamos as $prestamo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
											<td>{{ $prestamo->matricula }}</td>
											<td>{{ $prestamo->name }}</td>
                                            <td>{{ $prestamo->fecha_sali }}</td>
											<td>{{ $prestamo->fecha_dev }}</td>
											<td>{{ $prestamo->observaciones }}</td>
											<td>{{ $prestamo->user->name }}</td>
											<td>{{ $prestamo->area->name }}</td>
                                            <td>
                                            @can('editar-prestamo')
                                            <a class="btn btn-sm btn-info mt-2 " href="{{ route('prestamos.show',$prestamo->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                            @endcan
                                        @can('editar-prestamo]')
                                                    <a class="btn btn-sm btn-success mt-2" href="{{ route('prestamos.edit',$prestamo->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                @endcan

                                                @can('borrar-prestamo')
                                                <form action="{{ route('prestamos.destroy',$prestamo->id) }}" method="POST"style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm mt-2" onclick="
                                                return confirm('Estas seguro de que deseas borrar este prestamo?')" ><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                            </form>
                                                    @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div class="pagination justify-content end">
                    {!! $prestamos ->links() !!}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
