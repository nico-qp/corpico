@extends('layouts.app')

@section('template_title')
    Computadora
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Computadoras') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('computadoras-softwares.index') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Ver softwares asignados') }}
                                </a>
                                <a href="{{ route('computadoras-impresoras.index') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Ver impresoras asignadas') }}
                                </a>
                                <a href="{{ route('computadoras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<!--<th>Usuario Window</th>
										<th>User</th>-->
										<th>Condicion</th>
										<th>Sectores</th>
										<!--<th>Etiqueta</th>-->
										<!--<th>Nombre</th>-->
										<th>Ip 172</th>
										<!--<th>Ip 10</th>-->
										<!--<th>Mac</th>-->
										<!--<th>Procesador</th>-->
										<!--<th>Ram</th>-->
										<!--<th>So</th>-->
										<!--<th>Marca</th>-->
										<!--<th>Observaciones</th>-->
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($computadoras as $computadora)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<!--<td>{{ $computadora->UsuariosWindow->usuario }}</td>-->
											<!--<td>{{ $computadora->user->name }}</td>-->
											<td>{{ $computadora->condicione->descripcion }}</td>
											<td>{{ $computadora->sectore->nombre }}</td>
											<!--<td>{{ $computadora->etiqueta }}</td>-->
											<!--<td>{{ $computadora->nombre }}</td>-->
											<td>{{ $computadora->ip_172 }}</td>
											<!--<td>{{ $computadora->ip_10 }}</td>
											<td>{{ $computadora->mac }}</td>-->
											<!--<td>{{ $computadora->procesador }}</td>-->
											<!--<td>{{ $computadora->ram }}</td>-->
											<!--<td>{{ $computadora->so }}</td>-->
											<!--<td>{{ $computadora->marca }}</td>-->
											<!--<td>{{ $computadora->observaciones }}</td>-->
											<td>{{ $computadora->estado->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('computadoras.destroy',$computadora->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('computadoras.show',$computadora->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver más') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('computadoras.edit',$computadora->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $computadoras->links() !!}
            </div>
        </div>
    </div>
@endsection
