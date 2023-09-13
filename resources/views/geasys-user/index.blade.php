@extends('layouts.app')

@section('template_title')
    Geasys User
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Geasys User') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('geasys-users.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Geasys User</th>
										<th>Nombre Completo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($geasysUsers as $geasysUser)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $geasysUser->geasys_user }}</td>
											<td>{{ $geasysUser->nombre_completo }}</td>

                                            <td>
                                                <form action="{{ route('geasys-users.destroy',$geasysUser->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('geasys-users.show',$geasysUser->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('geasys-users.edit',$geasysUser->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $geasysUsers->links() !!}
            </div>
        </div>
    </div>
@endsection
