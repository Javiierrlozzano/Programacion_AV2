@extends('layouts.app')

@section('template_title')
    {{ $billetera->name ?? 'Show Billetera' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Billetera</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('billeteras.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombrebilletera:</strong>
                            {{ $billetera->NombreBilletera }}
                        </div>
                        <div class="form-group">
                            <strong>Valortotal:</strong>
                            {{ $billetera->ValorTotal }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
