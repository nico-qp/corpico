@extends('layouts.app')

@section('template_title')
    Computadoras Software
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Computadoras Software') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('computadoras-softwares.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Asignar software a pc') }}
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
                                        
										<th>Software</th>
										<th>Ip Computadora</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($computadorasSoftwares as $computadorasSoftware)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $computadorasSoftware->Software->nombre }}</td>
											<td>{{ $computadorasSoftware->Computadora->ip_172 }}</td>

                                            <td>
                                                <form action="{{ route('computadoras-softwares.destroy',$computadorasSoftware->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('computadoras-softwares.show',$computadorasSoftware->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('computadoras-softwares.edit',$computadorasSoftware->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $computadorasSoftwares->links() !!}
            </div>
        </div>
    </div>
@endsection
