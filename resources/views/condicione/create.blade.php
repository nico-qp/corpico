@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Condicione
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Condicione</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('condiciones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('condicione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
