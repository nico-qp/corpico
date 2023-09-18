@extends('layouts.app')

@section('template_title')
    Cart Ton
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cart Ton') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cart-ton.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Usos</th>
										<th>Tipo</th>
										<th>Color</th>
										<th>Codigo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartTons as $cartTon)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cartTon->Uso->uso_mensual }}</td>
											<td>{{ $cartTon->tipo }}</td>
											<td>{{ $cartTon->color }}</td>
											<td>{{ $cartTon->codigo }}</td>

                                            <td>
                                                <form action="{{ route('cart-ton.destroy',$cartTon->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cart-ton.show',$cartTon->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cart-ton.edit',$cartTon->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $cartTons->links() !!}
            </div>
        </div>
    </div>
@endsection
