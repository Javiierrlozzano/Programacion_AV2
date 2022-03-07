

<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('TipoDocumento') }}
            {{ Form::text('TipoDocumento', $cliente->TipoDocumento, ['class' => 'form-control' . ($errors->has('TipoDocumento') ? ' is-invalid' : ''), 'placeholder' => 'Tipodocumento']) }}
            {!! $errors->first('TipoDocumento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NDocumento') }}
            {{ Form::text('NDocumento', $cliente->NDocumento, ['class' => 'form-control' . ($errors->has('NDocumento') ? ' is-invalid' : ''), 'placeholder' => 'Ndocumento']) }}
            {!! $errors->first('NDocumento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaExpedicion') }}
            {{ Form::text('FechaExpedicion', $cliente->FechaExpedicion, ['class' => 'form-control' . ($errors->has('FechaExpedicion') ? ' is-invalid' : ''), 'placeholder' => 'Fechaexpedicion']) }}
            {!! $errors->first('FechaExpedicion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('LugarExpedicion') }}
            {{ Form::text('LugarExpedicion', $cliente->LugarExpedicion, ['class' => 'form-control' . ($errors->has('LugarExpedicion') ? ' is-invalid' : ''), 'placeholder' => 'Lugarexpedicion']) }}
            {!! $errors->first('LugarExpedicion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaNacimiento') }}
            {{ Form::text('FechaNacimiento', $cliente->FechaNacimiento, ['class' => 'form-control' . ($errors->has('FechaNacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fechanacimiento']) }}
            {!! $errors->first('FechaNacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('LugarNacimiento') }}
            {{ Form::text('LugarNacimiento', $cliente->LugarNacimiento, ['class' => 'form-control' . ($errors->has('LugarNacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Lugarnacimiento']) }}
            {!! $errors->first('LugarNacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TipoCliente') }}
            {{ Form::text('TipoCliente', $cliente->TipoCliente, ['class' => 'form-control' . ($errors->has('TipoCliente') ? ' is-invalid' : ''), 'placeholder' => 'Tipocliente']) }}
            {!! $errors->first('TipoCliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PrimerNombre') }}
            {{ Form::text('PrimerNombre', $cliente->PrimerNombre, ['class' => 'form-control' . ($errors->has('PrimerNombre') ? ' is-invalid' : ''), 'placeholder' => 'Primernombre']) }}
            {!! $errors->first('PrimerNombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('SegundoNombre') }}
            {{ Form::text('SegundoNombre', $cliente->SegundoNombre, ['class' => 'form-control' . ($errors->has('SegundoNombre') ? ' is-invalid' : ''), 'placeholder' => 'Segundonombre']) }}
            {!! $errors->first('SegundoNombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PrimerApellido') }}
            {{ Form::text('PrimerApellido', $cliente->PrimerApellido, ['class' => 'form-control' . ($errors->has('PrimerApellido') ? ' is-invalid' : ''), 'placeholder' => 'Primerapellido']) }}
            {!! $errors->first('PrimerApellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('SegundoApellido') }}
            {{ Form::text('SegundoApellido', $cliente->SegundoApellido, ['class' => 'form-control' . ($errors->has('SegundoApellido') ? ' is-invalid' : ''), 'placeholder' => 'Segundoapellido']) }}
            {!! $errors->first('SegundoApellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sexo') }}
            {{ Form::text('Sexo', $cliente->Sexo, ['class' => 'form-control' . ($errors->has('Sexo') ? ' is-invalid' : ''), 'placeholder' => 'Sexo']) }}
            {!! $errors->first('Sexo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('EstadoCivil') }}
            {{ Form::text('EstadoCivil', $cliente->EstadoCivil, ['class' => 'form-control' . ($errors->has('EstadoCivil') ? ' is-invalid' : ''), 'placeholder' => 'Estadocivil']) }}
            {!! $errors->first('EstadoCivil', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NivelEducativo') }}
            {{ Form::text('NivelEducativo', $cliente->NivelEducativo, ['class' => 'form-control' . ($errors->has('NivelEducativo') ? ' is-invalid' : ''), 'placeholder' => 'Niveleducativo']) }}
            {!! $errors->first('NivelEducativo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DeclaracionRenta') }}
            {{ Form::text('DeclaracionRenta', $cliente->DeclaracionRenta, ['class' => 'form-control' . ($errors->has('DeclaracionRenta') ? ' is-invalid' : ''), 'placeholder' => 'Declaracionrenta']) }}
            {!! $errors->first('DeclaracionRenta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DireccionCobro') }}
            {{ Form::text('DireccionCobro', $cliente->DireccionCobro, ['class' => 'form-control' . ($errors->has('DireccionCobro') ? ' is-invalid' : ''), 'placeholder' => 'Direccioncobro']) }}
            {!! $errors->first('DireccionCobro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('BarrioCobro') }}
            {{ Form::text('BarrioCobro', $cliente->BarrioCobro, ['class' => 'form-control' . ($errors->has('BarrioCobro') ? ' is-invalid' : ''), 'placeholder' => 'Barriocobro']) }}
            {!! $errors->first('BarrioCobro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DirrecionResidencia') }}
            {{ Form::text('DirrecionResidencia', $cliente->DirrecionResidencia, ['class' => 'form-control' . ($errors->has('DirrecionResidencia') ? ' is-invalid' : ''), 'placeholder' => 'Dirrecionresidencia']) }}
            {!! $errors->first('DirrecionResidencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('BarrioResidencia') }}
            {{ Form::text('BarrioResidencia', $cliente->BarrioResidencia, ['class' => 'form-control' . ($errors->has('BarrioResidencia') ? ' is-invalid' : ''), 'placeholder' => 'Barrioresidencia']) }}
            {!! $errors->first('BarrioResidencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TelefonoResidencia') }}
            {{ Form::text('TelefonoResidencia', $cliente->TelefonoResidencia, ['class' => 'form-control' . ($errors->has('TelefonoResidencia') ? ' is-invalid' : ''), 'placeholder' => 'Telefonoresidencia']) }}
            {!! $errors->first('TelefonoResidencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TelefonoAdicional') }}
            {{ Form::text('TelefonoAdicional', $cliente->TelefonoAdicional, ['class' => 'form-control' . ($errors->has('TelefonoAdicional') ? ' is-invalid' : ''), 'placeholder' => 'Telefonoadicional']) }}
            {!! $errors->first('TelefonoAdicional', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Celular') }}
            {{ Form::text('Celular', $cliente->Celular, ['class' => 'form-control' . ($errors->has('Celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('Celular', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CelularAdicionar') }}
            {{ Form::text('CelularAdicionar', $cliente->CelularAdicionar, ['class' => 'form-control' . ($errors->has('CelularAdicionar') ? ' is-invalid' : ''), 'placeholder' => 'Celularadicionar']) }}
            {!! $errors->first('CelularAdicionar', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('Email', $cliente->Email, ['class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('Email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PersonaAcargo') }}
            {{ Form::text('PersonaAcargo', $cliente->PersonaAcargo, ['class' => 'form-control' . ($errors->has('PersonaAcargo') ? ' is-invalid' : ''), 'placeholder' => 'Personaacargo']) }}
            {!! $errors->first('PersonaAcargo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TipoVivienda') }}
            {{ Form::text('TipoVivienda', $cliente->TipoVivienda, ['class' => 'form-control' . ($errors->has('TipoVivienda') ? ' is-invalid' : ''), 'placeholder' => 'Tipovivienda']) }}
            {!! $errors->first('TipoVivienda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estrato') }}
            {{ Form::text('Estrato', $cliente->Estrato, ['class' => 'form-control' . ($errors->has('Estrato') ? ' is-invalid' : ''), 'placeholder' => 'Estrato']) }}
            {!! $errors->first('Estrato', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombreArredandor') }}
            {{ Form::text('NombreArredandor', $cliente->NombreArredandor, ['class' => 'form-control' . ($errors->has('NombreArredandor') ? ' is-invalid' : ''), 'placeholder' => 'Nombrearredandor']) }}
            {!! $errors->first('NombreArredandor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumeroArredando') }}
            {{ Form::text('NumeroArredando', $cliente->NumeroArredando, ['class' => 'form-control' . ($errors->has('NumeroArredando') ? ' is-invalid' : ''), 'placeholder' => 'Numeroarredando']) }}
            {!! $errors->first('NumeroArredando', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Zona') }}
            {{ Form::text('Zona', $cliente->Zona, ['class' => 'form-control' . ($errors->has('Zona') ? ' is-invalid' : ''), 'placeholder' => 'Zona']) }}
            {!! $errors->first('Zona', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Banco') }}
            {{ Form::text('Banco', $cliente->Banco, ['class' => 'form-control' . ($errors->has('Banco') ? ' is-invalid' : ''), 'placeholder' => 'Banco']) }}
            {!! $errors->first('Banco', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumeroCuenta') }}
            {{ Form::text('NumeroCuenta', $cliente->NumeroCuenta, ['class' => 'form-control' . ($errors->has('NumeroCuenta') ? ' is-invalid' : ''), 'placeholder' => 'Numerocuenta']) }}
            {!! $errors->first('NumeroCuenta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $cliente->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ruta') }}
            {{ Form::text('Ruta', $cliente->rutas, ['class' => 'form-control' . ($errors->has('Ruta') ? ' is-invalid' : ''), 'placeholder' => 'Ruta']) }}
            {!! $errors->first('Ruta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>