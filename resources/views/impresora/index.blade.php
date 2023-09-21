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
                                {{ __('Impresora') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('impresoras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Sector</th>
										<th>Criticidad</th>
										<th>Marca</th>
										<th>Modelo</th>
										<th>Conectividad</th>
										<th>Ip</th>
										<th>Autonomia Resma</th>
										<th>Estado</th>
										<th>Observaciones</th>

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
											<td>{{ $impresora->conectividad }}</td>
											<td>{{ $impresora->ip }}</td>
											<td>{{ $impresora->autonomia_resma }}</td>
											<td>{{ $impresora->estado->descripcion }}</td>
											<td>{{ $impresora->observaciones }}</td>

                                            <td>
                                                <form action="{{ route('impresoras.destroy',$impresora->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('impresoras.show',$impresora->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('impresoras.edit',$impresora->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $impresoras->links() !!}
            </div>
        </div>
    </div>
@endsection
