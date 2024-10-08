@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Consumible
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Cargar') }} Consumible</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('consumibles.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <?php $id_usos[0] = NULL ?>
                            @include('consumible.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
