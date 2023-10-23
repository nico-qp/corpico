@extends('layouts.app')

@section('template_title')
    Computadoras Impresora
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Conexión entre Computadoras y impresoras') }}
                            </span>
                            <form method="GET" action="{{ route('computadoras-impresoras.index') }}" class="d-flex" >
                                <label for="order_by">Ordenar por:</label>
                                <select class="form-control ms-2 me-2" name="order_by" id="order_by">
                                    <option value="id" @if ($order_by == 'id') selected @endif>Sin orden</option>
                                    <option value="id_computadora" @if ($order_by == 'id_computadora') selected @endif>Computadora</option>
                                    <option value="id_impresora" @if ($order_by == 'id_impresora') selected @endif>Impresora</option>
                                </select>

                                <button type="submit" class="btn btn-success">ordenar</button>
                            </form>

                             <div class="float-right">
                                <a href="{{ route('computadoras-impresoras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Asignar impresora a pc') }}
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
                                        
										<th>Computadora</th>
										<th>Impresora</th>
                                        <th>sector</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($computadorasImpresoras as $computadorasImpresora)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $computadorasImpresora->computadora->ip_172 }}</td>
											<td>{{ $computadorasImpresora->impresora->modelo }}</td>
                                            <td>{{ $computadorasImpresora->computadora->sectore->nombre }}</td>

                                            <td>
                                                <form action="{{ route('computadoras-impresoras.destroy',$computadorasImpresora->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('computadoras-impresoras.show',$computadorasImpresora->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver más') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('computadoras-impresoras.edit',$computadorasImpresora->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {{ $computadorasImpresoras->appends(['order_by' => $order_by])->links() }}
            </div>
        </div>
    </div>
@endsection
