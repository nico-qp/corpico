@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} So User
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} So User</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('so-users.update', $soUser->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('so-user.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
