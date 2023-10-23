@extends('layouts.app')

@section('template_title')
    Consumibles Impresora
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Consumibles de Impresora') }}
                            </span>
                            <form method="GET" action="{{ route('consumibles_impresoras.index') }}" class="d-flex" >
                                <label for="order_by">Ordenar por:</label>
                                <select class="form-control ms-2 me-2" name="order_by" id="order_by">
                                    <option value="id" @if ($order_by == 'id') selected @endif>Sin orden</option>
                                    <option value="id_consumible" @if ($order_by == 'id_consumible') selected @endif>consumible</option>
                                    <option value="id_impresora" @if ($order_by == 'id_impresora') selected @endif>impresora</option>

                                </select>

                                <button type="submit" class="btn btn-success">ordenar</button>
                            </form>

                             <div class="float-right">
                                <a href="{{ route('consumibles_impresoras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('asignar consumible a impresora') }}
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
                                        
										<th>Código del consumible</th>
										<th>Modelo de la impresora</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consumiblesImpresoras as $consumiblesImpresora)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $consumiblesImpresora->consumible->codigo }}</td>
											<td>{{ $consumiblesImpresora->impresora->modelo }}</td>

                                            <td>
                                                <form action="{{ route('consumibles_impresoras.destroy',$consumiblesImpresora->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('consumibles_impresoras.show',$consumiblesImpresora->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver más') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('consumibles_impresoras.edit',$consumiblesImpresora->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {{ $consumiblesImpresoras->appends(['order_by' => $order_by])->links() }}
            </div>
        </div>
    </div>
@endsection
