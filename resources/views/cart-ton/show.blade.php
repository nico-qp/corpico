@extends('layouts.app')

@section('template_title')
    {{ $cartTon->name ?? "{{ __('Show') Cart Ton" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cart Ton</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cart-ton.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Usos:</strong>
                            {{ $cartTon->id_usos }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $cartTon->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $cartTon->color }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $cartTon->codigo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
