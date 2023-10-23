@extends('layouts.app')

@section('template_title')
    Sectore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Sector') }}
                            </span>
                            <form method="GET" action="{{ route('sectores.index') }}" class="d-flex" >
                                <label for="order_by">Ordenar por:</label>
                                <select class="form-control ms-2 me-2" name="order_by" id="order_by">
                                    <option value="id" @if ($order_by == 'id') selected @endif>Sin orden</option>
                                    <option value="id_ubicacion" @if ($order_by == 'id_ubicacion') selected @endif>Ubicacion</option>
                                    <option value="nombre" @if ($order_by == 'nombre') selected @endif>Nombre</option>

                                </select>

                                <button type="submit" class="btn btn-success">ordenar</button>
                            </form>
                             <div class="float-right">
                                <a href="{{ route('ubicaciones.index') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Ubicaciones') }}
                                </a>
                                <a href="{{ route('sectores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
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
                                        
										<th>Ubicacion</th>
                                        <th>Piso</th>
										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sectores as $sectore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $sectore->ubicacione->edificio }}</td>
                                            <td>{{ $sectore->ubicacione->piso }}</td>
											<td>{{ $sectore->nombre }}</td>

                                            <td>
                                                <form action="{{ route('sectores.destroy',$sectore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('sectores.show',$sectore->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver más') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('sectores.edit',$sectore->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {{ $sectores->appends(['order_by' => $order_by])->links() }}
            </div>
        </div>
    </div>
@endsection
