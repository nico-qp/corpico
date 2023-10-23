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
                            <form method="GET" action="{{ route('consumibles.index') }}" class="d-flex" >
                                <label for="order_by">Ordenar por:</label>
                                <select class="form-control ms-2 me-2" name="order_by" id="order_by">
                                    <option value="id" @if ($order_by == 'id') selected @endif>Sin orden</option>
                                    <option value="id_uso" @if ($order_by == 'id_uso') selected @endif>uso</option>
                                    <option value="id_tipo" @if ($order_by == 'id_tipo') selected @endif>Tipo</option>
                                    <option value="codigo" @if ($order_by == 'codigo') selected @endif>Codigo</option>

                                </select>

                                <button type="submit" class="btn btn-success">ordenar</button>
                            </form>

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
                {{ $consumibles->appends(['order_by' => $order_by])->links() }}
            </div>
        </div>
    </div>
@endsection
