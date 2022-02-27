@extends('layouts.app')

@section('template_title')
    {{ $credito->name ?? 'Show Credito' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Credito</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('creditos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipocredito:</strong>
                            {{ $credito->TipoCredito }}
                        </div>
                        <div class="form-group">
                            <strong>Fechainicio:</strong>
                            {{ $credito->FechaInicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fechacancelacion:</strong>
                            {{ $credito->FechaCancelacion }}
                        </div>
                        <div class="form-group">
                            <strong>Numerocuotas:</strong>
                            {{ $credito->NumeroCuotas }}
                        </div>
                        <div class="form-group">
                            <strong>Numerocuotascancelada:</strong>
                            {{ $credito->NumeroCuotasCancelada }}
                        </div>
                        <div class="form-group">
                            <strong>Ultimacuota:</strong>
                            {{ $credito->UltimaCuota }}
                        </div>
                        <div class="form-group">
                            <strong>Valortotalcredito:</strong>
                            {{ $credito->ValorTotalCredito }}
                        </div>
                        <div class="form-group">
                            <strong>Estadocredito:</strong>
                            {{ $credito->EstadoCredito }}
                        </div>
                        <div class="form-group">
                            <strong>Porcentaje:</strong>
                            {{ $credito->Porcentaje }}
                        </div>
                        <div class="form-group">
                            <strong>Billeterasalida:</strong>
                            {{ $credito->BilleteraSalida }}
                        </div>
                        <div class="form-group">
                            <strong>Billeteraentrada:</strong>
                            {{ $credito->BilleteraEntrada }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
