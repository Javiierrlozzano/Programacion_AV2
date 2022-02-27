@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipodocumento:</strong>
                            {{ $cliente->TipoDocumento }}
                        </div>
                        <div class="form-group">
                            <strong>Ndocumento:</strong>
                            {{ $cliente->NDocumento }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaexpedicion:</strong>
                            {{ $cliente->FechaExpedicion }}
                        </div>
                        <div class="form-group">
                            <strong>Lugarexpedicion:</strong>
                            {{ $cliente->LugarExpedicion }}
                        </div>
                        <div class="form-group">
                            <strong>Fechanacimiento:</strong>
                            {{ $cliente->FechaNacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Lugarnacimiento:</strong>
                            {{ $cliente->LugarNacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Tipocliente:</strong>
                            {{ $cliente->TipoCliente }}
                        </div>
                        <div class="form-group">
                            <strong>Primernombre:</strong>
                            {{ $cliente->PrimerNombre }}
                        </div>
                        <div class="form-group">
                            <strong>Segundonombre:</strong>
                            {{ $cliente->SegundoNombre }}
                        </div>
                        <div class="form-group">
                            <strong>Primerapellido:</strong>
                            {{ $cliente->PrimerApellido }}
                        </div>
                        <div class="form-group">
                            <strong>Segundoapellido:</strong>
                            {{ $cliente->SegundoApellido }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $cliente->Sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Estadocivil:</strong>
                            {{ $cliente->EstadoCivil }}
                        </div>
                        <div class="form-group">
                            <strong>Niveleducativo:</strong>
                            {{ $cliente->NivelEducativo }}
                        </div>
                        <div class="form-group">
                            <strong>Declaracionrenta:</strong>
                            {{ $cliente->DeclaracionRenta }}
                        </div>
                        <div class="form-group">
                            <strong>Direccioncobro:</strong>
                            {{ $cliente->DireccionCobro }}
                        </div>
                        <div class="form-group">
                            <strong>Barriocobro:</strong>
                            {{ $cliente->BarrioCobro }}
                        </div>
                        <div class="form-group">
                            <strong>Dirrecionresidencia:</strong>
                            {{ $cliente->DirrecionResidencia }}
                        </div>
                        <div class="form-group">
                            <strong>Barrioresidencia:</strong>
                            {{ $cliente->BarrioResidencia }}
                        </div>
                        <div class="form-group">
                            <strong>Telefonoresidencia:</strong>
                            {{ $cliente->TelefonoResidencia }}
                        </div>
                        <div class="form-group">
                            <strong>Telefonoadicional:</strong>
                            {{ $cliente->TelefonoAdicional }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $cliente->Celular }}
                        </div>
                        <div class="form-group">
                            <strong>Celularadicionar:</strong>
                            {{ $cliente->CelularAdicionar }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $cliente->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Personaacargo:</strong>
                            {{ $cliente->PersonaAcargo }}
                        </div>
                        <div class="form-group">
                            <strong>Tipovivienda:</strong>
                            {{ $cliente->TipoVivienda }}
                        </div>
                        <div class="form-group">
                            <strong>Estrato:</strong>
                            {{ $cliente->Estrato }}
                        </div>
                        <div class="form-group">
                            <strong>Nombrearredandor:</strong>
                            {{ $cliente->NombreArredandor }}
                        </div>
                        <div class="form-group">
                            <strong>Numeroarredando:</strong>
                            {{ $cliente->NumeroArredando }}
                        </div>
                        <div class="form-group">
                            <strong>Zona:</strong>
                            {{ $cliente->Zona }}
                        </div>
                        <div class="form-group">
                            <strong>Banco:</strong>
                            {{ $cliente->Banco }}
                        </div>
                        <div class="form-group">
                            <strong>Numerocuenta:</strong>
                            {{ $cliente->NumeroCuenta }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $cliente->observaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Ruta:</strong>
                            {{ $cliente->Ruta }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
