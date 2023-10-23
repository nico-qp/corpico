@extends('layouts.app')

@section('template_title')
    Impresora
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Impresoras') }}
                            </span>
                             <div class="float-right">
                                <a href="{{ route('computadoras-impresoras.index') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Ver impresoras asignadas') }}
                                </a>
                                <a href="{{ route('consumibles_impresoras.index') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Ver consumibles asignados') }}
                                </a>
                                <a href="{{ route('impresoras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Cargar nueva') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tabla_impresoras" class="table table-striped table-hover table-bordered">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Sector</th>
										<th>Criticidad</th>
										<th>Marca</th>
										<th>Modelo</th>
										<!--<th>Conectividad</th>
										<th>Ip</th>
										<th>Autonomia Resma</th>-->
										<th>Estado</th>
										<!--<th>Observaciones</th>-->

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($impresoras as $impresora)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $impresora->sectore->nombre }}</td>
											<td>{{ $impresora->criticidade->descripcion }}</td>
											<td>{{ $impresora->marca }}</td>
											<td>{{ $impresora->modelo }}</td>
											<!--<td>{{ $impresora->conectividad }}</td>
											<td>{{ $impresora->ip }}</td>
											<td>{{ $impresora->autonomia_resma }}</td>-->
											<td>{{ $impresora->estado->descripcion }}</td>
											<!--<td>{{ $impresora->observaciones }}</td>-->

                                            <td>
                                                <form action="{{ route('impresoras.destroy',$impresora->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('impresoras.show',$impresora->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver más') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('impresoras.edit',$impresora->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready( function () {
        $('#tabla_impresoras').DataTable({
            language: {
                "decimal":        ",",
                "emptyTable":     "No hay registros existentes en esta tabla",
                "info":           "Mostrando _START_ a _END_ de _TOTAL_ registros",
                "infoEmpty":      "Mostrando 0 a 0 de 0 registros",
                "infoFiltered":   "(_MAX_ registros totales)",
                "infoPostFix":    "",
                "thousands":      ".",
                "lengthMenu":     "Mostrando _MENU_ registros",
                "loadingRecords": "Cargando...",
                "processing":     "",
                "search":         "Buscar:",
                "zeroRecords":    "No se encontraron registros",
                "paginate": {
                    "first":      "Primera",
                    "last":       "Ultima",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },
                "aria": {
                    "sortAscending":  ": Activar el ordenado de columnas ascendente",
                    "sortDescending": ": Activar el ordenado de columnas descendente"
                }
            }
        });
    });
    </script>
@endsection
