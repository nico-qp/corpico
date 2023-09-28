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
                                        
										<th>Codigo del consumible</th>
										<th>IP de la impresora</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consumiblesImpresoras as $consumiblesImpresora)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $consumiblesImpresora->consumible->codigo }}</td>
											<td>{{ $consumiblesImpresora->impresora->ip }}</td>

                                            <td>
                                                <form action="{{ route('consumibles_impresoras.destroy',$consumiblesImpresora->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('consumibles_impresoras.show',$consumiblesImpresora->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('consumibles_impresoras.edit',$consumiblesImpresora->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $consumiblesImpresoras->links() !!}
            </div>
        </div>
    </div>
@endsection
