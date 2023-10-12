@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Computadoras Impresora
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Asignar') }} Computadoras a Impresora</span>
                    </div>
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('computadoras-impresoras.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('computadoras-impresora.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
