@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Impresoras Stock
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Impresoras Stock</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('impresora-stock.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('impresoras-stock.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
