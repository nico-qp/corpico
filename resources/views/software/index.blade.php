@extends('layouts.app')

@section('template_title')
    Software
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Softwares') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('computadoras-softwares.index') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Ver softwares asignados') }}
                                </a>
                                <a href="{{ route('softwares.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Cargar nuevo') }}
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
                            <table id="tabla_softwares" class="table table-striped table-hover table-bordered">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Versión</th>
										<th>Fecha de expiración</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($softwares as $software)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $software->nombre }}</td>
											<td>{{ $software->version }}</td>
											<td>{{ $software->expira }}</td>

                                            <td>
                                                <form action="{{ route('softwares.destroy',$software->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('softwares.show',$software->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver más') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('softwares.edit',$software->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
        $('#tabla_softwares').DataTable();
    });
    </script>
@endsection
