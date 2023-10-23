@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Impresora
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Cargar') }} Impresora</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('impresoras.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <?php $id_sectores[0] = NULL ?>
                            @include('impresora.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
