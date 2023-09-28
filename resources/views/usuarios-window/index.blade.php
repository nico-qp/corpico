@extends('layouts.app')

@section('template_title')
    Usuarios Window
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Usuarios de Windows') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('usuarios-window.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Usuario</th>
										<th>Contraseña</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuariosWindows as $usuariosWindow)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $usuariosWindow->usuario }}</td>
											<td>{{ $usuariosWindow->contraseña }}</td>

                                            <td>
                                                <form action="{{ route('usuarios-window.destroy',$usuariosWindow->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('usuarios-window.show',$usuariosWindow->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver más') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('usuarios-window.edit',$usuariosWindow->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $usuariosWindows->links() !!}
            </div>
        </div>
    </div>
@endsection
