@extends('layouts.app')

@section('template_title')
    Pc Stock
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pc Stock') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pc-stock.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Numero</th>
										<th>Marca</th>
										<th>Condicion</th>
										<th>Cantidad</th>
										<th>Ubicacion</th>
										<th>Observaciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pcStocks as $pcStock)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pcStock->numero }}</td>
											<td>{{ $pcStock->marca }}</td>
											<td>{{ $pcStock->condicion }}</td>
											<td>{{ $pcStock->cantidad }}</td>
											<td>{{ $pcStock->ubicacion }}</td>
											<td>{{ $pcStock->observaciones }}</td>

                                            <td>
                                                <form action="{{ route('pc-stock.destroy',$pcStock->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pc-stock.show',$pcStock->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pc-stock.edit',$pcStock->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $pcStocks->links() !!}
            </div>
        </div>
    </div>
@endsection
