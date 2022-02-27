@extends('layouts.app')

@section('template_title')
    {{ $ingresoscaja->name ?? 'Show Ingresoscaja' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ingresoscaja</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ingresoscajas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Obsevacion:</strong>
                            {{ $ingresoscaja->Obsevacion }}
                        </div>
                        <div class="form-group">
                            <strong>Tipoingresos:</strong>
                            {{ $ingresoscaja->TipoIngresos }}
                        </div>
                        <div class="form-group">
                            <strong>Billetera:</strong>
                            {{ $ingresoscaja->Billetera }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
