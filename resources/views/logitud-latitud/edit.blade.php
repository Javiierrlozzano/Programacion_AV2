@extends('layouts.app')

@section('template_title')
    Update Logitud Latitud
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Logitud Latitud</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('logitud-latituds.update', $logitudLatitud->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('logitud-latitud.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
