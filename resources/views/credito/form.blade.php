<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('TipoCredito') }}
            {{ Form::text('TipoCredito', $credito->TipoCredito, ['class' => 'form-control' . ($errors->has('TipoCredito') ? ' is-invalid' : ''), 'placeholder' => 'Tipocredito']) }}
            {!! $errors->first('TipoCredito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaInicio') }}
            {{ Form::text('FechaInicio', $credito->FechaInicio, ['class' => 'form-control' . ($errors->has('FechaInicio') ? ' is-invalid' : ''), 'placeholder' => 'Fechainicio']) }}
            {!! $errors->first('FechaInicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaCancelacion') }}
            {{ Form::text('FechaCancelacion', $credito->FechaCancelacion, ['class' => 'form-control' . ($errors->has('FechaCancelacion') ? ' is-invalid' : ''), 'placeholder' => 'Fechacancelacion']) }}
            {!! $errors->first('FechaCancelacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumeroCuotas') }}
            {{ Form::text('NumeroCuotas', $credito->NumeroCuotas, ['class' => 'form-control' . ($errors->has('NumeroCuotas') ? ' is-invalid' : ''), 'placeholder' => 'Numerocuotas']) }}
            {!! $errors->first('NumeroCuotas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumeroCuotasCancelada') }}
            {{ Form::text('NumeroCuotasCancelada', $credito->NumeroCuotasCancelada, ['class' => 'form-control' . ($errors->has('NumeroCuotasCancelada') ? ' is-invalid' : ''), 'placeholder' => 'Numerocuotascancelada']) }}
            {!! $errors->first('NumeroCuotasCancelada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('UltimaCuota') }}
            {{ Form::text('UltimaCuota', $credito->UltimaCuota, ['class' => 'form-control' . ($errors->has('UltimaCuota') ? ' is-invalid' : ''), 'placeholder' => 'Ultimacuota']) }}
            {!! $errors->first('UltimaCuota', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ValorTotalCredito') }}
            {{ Form::text('ValorTotalCredito', $credito->ValorTotalCredito, ['class' => 'form-control' . ($errors->has('ValorTotalCredito') ? ' is-invalid' : ''), 'placeholder' => 'Valortotalcredito']) }}
            {!! $errors->first('ValorTotalCredito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('EstadoCredito') }}
            {{ Form::text('EstadoCredito', $credito->EstadoCredito, ['class' => 'form-control' . ($errors->has('EstadoCredito') ? ' is-invalid' : ''), 'placeholder' => 'Estadocredito']) }}
            {!! $errors->first('EstadoCredito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Porcentaje') }}
            {{ Form::text('Porcentaje', $credito->Porcentaje, ['class' => 'form-control' . ($errors->has('Porcentaje') ? ' is-invalid' : ''), 'placeholder' => 'Porcentaje']) }}
            {!! $errors->first('Porcentaje', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('BilleteraSalida') }}
            {{ Form::text('BilleteraSalida', $credito->BilleteraSalida, ['class' => 'form-control' . ($errors->has('BilleteraSalida') ? ' is-invalid' : ''), 'placeholder' => 'Billeterasalida']) }}
            {!! $errors->first('BilleteraSalida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('BilleteraEntrada') }}
            {{ Form::text('BilleteraEntrada', $credito->BilleteraEntrada, ['class' => 'form-control' . ($errors->has('BilleteraEntrada') ? ' is-invalid' : ''), 'placeholder' => 'Billeteraentrada']) }}
            {!! $errors->first('BilleteraEntrada', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>