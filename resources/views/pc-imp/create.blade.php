@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Pc Imp
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Pc Imp</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('pc-imps.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('pc-imp.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
