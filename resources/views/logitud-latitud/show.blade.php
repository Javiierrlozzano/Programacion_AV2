@extends('layouts.app')

@section('template_title')
    {{ $logitudLatitud->name ?? 'Show Logitud Latitud' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Logitud Latitud</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('logitud-latituds.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Logitud:</strong>
                            {{ $logitudLatitud->Logitud }}
                        </div>
                        <div class="form-group">
                            <strong>Latitud:</strong>
                            {{ $logitudLatitud->Latitud }}
                        </div>
                        <div class="form-group">
                            <strong>Rutas:</strong>
                            {{ $logitudLatitud->Rutas }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
