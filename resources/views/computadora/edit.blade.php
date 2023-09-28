@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Computadora
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} Computadora</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('computadoras.update', $computadora->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('computadora.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
