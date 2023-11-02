@extends('layouts.app')

@section('template_title')
    Criticidade
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Criticidades') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('criticidades.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                            <table id="tabla_criticidades" class="table table-striped table-hover table-bordered">
                                <thead class="thead">
                                    <tr>
                                        <th>Nro.</th>
                                        
										<th>Descripción</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    @foreach ($criticidades as $criticidade)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $criticidade->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('criticidades.destroy',$criticidade->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('criticidades.show',$criticidade->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver más') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('criticidades.edit',$criticidade->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm delete-button" data-delete-url="{{ route('criticidades.destroy', $criticidade->id) }}">
                                                        <i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}
                                                    </button>
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
    <!-- Modal de confirmación de eliminación -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#fdcb05;">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar Eliminación</h5>
                </div>
                <div class="modal-body">
                    ¿Estás seguro de que deseas eliminar este registro?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <form id="deleteForm" method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    $(document).ready( function () {
        $('#tabla_criticidades').DataTable({
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
        
        // Manejar la confirmación de eliminación
        $('#tbody').on('click', '.delete-button', function () {
                var deleteUrl = $(this).data('delete-url');
                $('#deleteForm').attr('action', deleteUrl);
                $('#confirmDeleteModal').modal('show');
            });
        // Cerrar el modal al hacer clic en "Cancelar"
        $('#confirmDeleteModal .btn-secondary').on('click', function () {
            $('#confirmDeleteModal').modal('hide');
        });
    });
    </script>
@endsection
