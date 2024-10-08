@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Consumibles Impresora
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
                        <form method="POST" action="{{ route('consumibles_impresoras.update', $consumiblesImpresora->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('consumibles-impresora.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
