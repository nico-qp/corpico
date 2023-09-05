@extends('layouts.app')

@section('template_title')
    Pc
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pc') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pcs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Sector</th>
										<th>Trabajador</th>
										<th>Nombre Pc</th>
										<th>Usuario Geasys</th>
										<th>Ip 172</th>
										<th>Ip 10</th>
										<th>Mac</th>
										<th>Cpu</th>
										<th>Ram</th>
										<th>So</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pcs as $pc)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pc->sectore->sector }} {{ $pc->sectore->edificio }} {{ $pc->sectore->piso }}</td>
											<td>{{ $pc->trabajador }}</td>
											<td>{{ $pc->nombre_pc }}</td>
											<td>{{ $pc->usuario_geasys }}</td>
											<td>{{ $pc->ip_172 }}</td>
											<td>{{ $pc->ip_10 }}</td>
											<td>{{ $pc->mac }}</td>
											<td>{{ $pc->cpu }}</td>
											<td>{{ $pc->ram }}</td>
											<td>{{ $pc->so }}</td>

                                            <td>
                                                <form action="{{ route('pcs.destroy',$pc->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pcs.show',$pc->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pcs.edit',$pc->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $pcs->links() !!}
            </div>
        </div>
    </div>
@endsection
