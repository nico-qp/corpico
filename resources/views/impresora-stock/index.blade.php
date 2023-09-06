@extends('layouts.app')

@section('template_title')
    Impresora Stock
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Impresora Stock') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('impresora-stock.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Marca</th>
										<th>Modelo</th>
										<th>Cantidad</th>
										<th>Ubicacion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($impresoraStocks as $impresoraStock)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $impresoraStock->marca }}</td>
											<td>{{ $impresoraStock->modelo }}</td>
											<td>{{ $impresoraStock->cantidad }}</td>
											<td>{{ $impresoraStock->ubicacion }}</td>

                                            <td>
                                                <form action="{{ route('impresora-stock.destroy',$impresoraStock->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('impresora-stock.show',$impresoraStock->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('impresora-stock.edit',$impresoraStock->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $impresoraStocks->links() !!}
            </div>
        </div>
    </div>
@endsection
