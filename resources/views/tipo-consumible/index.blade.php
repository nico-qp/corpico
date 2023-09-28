@extends('layouts.app')

@section('template_title')
    Tipo Consumible
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tipos de Consumibles') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tipo-consumibles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tipoConsumibles as $tipoConsumible)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tipoConsumible->nombre }}</td>

                                            <td>
                                                <form action="{{ route('tipo-consumibles.destroy',$tipoConsumible->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tipo-consumibles.show',$tipoConsumible->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver más') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tipo-consumibles.edit',$tipoConsumible->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $tipoConsumibles->links() !!}
            </div>
        </div>
    </div>
@endsection
