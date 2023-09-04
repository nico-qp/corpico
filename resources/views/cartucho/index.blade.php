@extends('layouts.app')

@section('template_title')
    Cartucho
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cartucho') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cartucho.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Color</th>
										<th>Codigo</th>
										<th>Uso Mensual</th>
										<th>Uso Semestral</th>
										<th>Uso Anual</th>
										<th>Marca Impresora</th>
										<th>Modelo Impresora</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartuchos as $cartucho)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cartucho->color }}</td>
											<td>{{ $cartucho->codigo }}</td>
											<td>{{ $cartucho->uso_mensual }}</td>
											<td>{{ $cartucho->uso_semestral }}</td>
											<td>{{ $cartucho->uso_anual }}</td>
											<td>{{ $cartucho->marca_impresora }}</td>
											<td>{{ $cartucho->modelo_impresora }}</td>

                                            <td>
                                                <form action="{{ route('cartucho.destroy',$cartucho->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cartucho.show',$cartucho->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cartucho.edit',$cartucho->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $cartuchos->links() !!}
            </div>
        </div>
    </div>
@endsection
