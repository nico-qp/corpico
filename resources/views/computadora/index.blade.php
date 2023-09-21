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
                                {{ __('Computadora') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('computadoras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Id Usuario Window</th>
										<th>Id User</th>
										<th>Id Condicion</th>
										<th>Id Sectore</th>
										<th>Etiqueta</th>
										<th>Nombre</th>
										<th>Ip 172</th>
										<th>Ip 10</th>
										<th>Mac</th>
										<th>Procesador</th>
										<th>Ram</th>
										<th>So</th>
										<th>Marca</th>
										<th>Observaciones</th>
										<th>Id Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($computadoras as $computadora)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $computadora->id_usuario_window }}</td>
											<td>{{ $computadora->id_user }}</td>
											<td>{{ $computadora->id_condicion }}</td>
											<td>{{ $computadora->id_sectore }}</td>
											<td>{{ $computadora->etiqueta }}</td>
											<td>{{ $computadora->nombre }}</td>
											<td>{{ $computadora->ip_172 }}</td>
											<td>{{ $computadora->ip_10 }}</td>
											<td>{{ $computadora->mac }}</td>
											<td>{{ $computadora->procesador }}</td>
											<td>{{ $computadora->ram }}</td>
											<td>{{ $computadora->so }}</td>
											<td>{{ $computadora->marca }}</td>
											<td>{{ $computadora->observaciones }}</td>
											<td>{{ $computadora->id_estado }}</td>

                                            <td>
                                                <form action="{{ route('computadoras.destroy',$computadora->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('computadoras.show',$computadora->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('computadoras.edit',$computadora->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
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
