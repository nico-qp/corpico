@extends('layouts.app')

@section('template_title')
    Pc Imp
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pc Imp') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pc-imps.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Pc</th>
										<th>Id Imp</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pcImps as $pcImp)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pcImp->id_pc }}</td>
											<td>{{ $pcImp->id_imp }}</td>

                                            <td>
                                                <form action="{{ route('pc-imps.destroy',$pcImp->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pc-imps.show',$pcImp->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pc-imps.edit',$pcImp->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $pcImps->links() !!}
            </div>
        </div>
    </div>
@endsection
