@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Computadoras Impresora
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} relación</span>
                    </div>
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('computadoras-impresoras.update', $computadorasImpresora->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('computadoras-impresora.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
