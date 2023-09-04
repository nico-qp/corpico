@extends('layouts.app')

@section('template_title')
    Tonner
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tonner') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tonner.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Modelo</th>
										<th>Uso Mensual</th>
										<th>Uso Semestral</th>
										<th>Uso Anual</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tonners as $tonner)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tonner->modelo }}</td>
											<td>{{ $tonner->uso_mensual }}</td>
											<td>{{ $tonner->uso_semestral }}</td>
											<td>{{ $tonner->uso_anual }}</td>

                                            <td>
                                                <form action="{{ route('tonner.destroy',$tonner->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tonner.show',$tonner->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tonner.edit',$tonner->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $tonners->links() !!}
            </div>
        </div>
    </div>
@endsection
