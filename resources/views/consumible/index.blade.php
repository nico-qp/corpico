@extends('layouts.app')

@section('template_title')
    Consumible
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Consumibles') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('consumibles_impresoras.index') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Ver consumibles asignados') }}
                                </a>
                                <a href="{{ route('tipo-consumibles.index') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('tipos de consumibles') }}
                                </a>
                                <a href="{{ route('consumibles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Uso anual</th>
										<th>Tipo</th>
										<th>Codigo</th>
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consumibles as $consumible)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $consumible->uso->anual }}</td>
											<td>{{ $consumible->tipoConsumible->nombre }}</td>
											<td>{{ $consumible->codigo }}</td>
											<td>{{ $consumible->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('consumibles.destroy',$consumible->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('consumibles.show',$consumible->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver más') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('consumibles.edit',$consumible->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $consumibles->links() !!}
            </div>
        </div>
    </div>
@endsection
