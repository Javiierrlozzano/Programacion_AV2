@extends('layouts.app')

@section('template_title')
    {{ $pago->name ?? 'Show Pago' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pagos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            {{ $pago->Cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Credito:</strong>
                            {{ $pago->Credito }}
                        </div>
                        <div class="form-group">
                            <strong>Billeterapago:</strong>
                            {{ $pago->BilleteraPago }}
                        </div>
                        <div class="form-group">
                            <strong>Fechapago:</strong>
                            {{ $pago->FechaPago }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $pago->Valor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
