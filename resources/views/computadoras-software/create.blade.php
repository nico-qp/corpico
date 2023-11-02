@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Computadoras Software
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Asignar') }} Software a Computadoras</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('computadoras-softwares.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('computadoras-software.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
