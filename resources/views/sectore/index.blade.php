@extends('layouts.app')

@section('template_title')
    Sectore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Sector') }}
                            </span>
                             <div class="float-right">
                                <a href="{{ route('ubicaciones.index') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Ubicaciones') }}
                                </a>
                                <a href="{{ route('sectores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
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
                            <table id="tabla_sectores" class="table table-striped table-hover table-bordered">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Ubicacion</th>
                                        <th>Piso</th>
										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sectores as $sectore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $sectore->ubicacione->edificio }}</td>
                                            <td>{{ $sectore->ubicacione->piso }}</td>
											<td>{{ $sectore->nombre }}</td>

                                            <td>
                                                <form action="{{ route('sectores.destroy',$sectore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('sectores.show',$sectore->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver más') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('sectores.edit',$sectore->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
        $('#tabla_sectores').DataTable();
    });
    </script>
@endsection
