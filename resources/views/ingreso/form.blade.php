<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NombreIngresos') }}
            {{ Form::text('NombreIngresos', $ingreso->NombreIngresos, ['class' => 'form-control' . ($errors->has('NombreIngresos') ? ' is-invalid' : ''), 'placeholder' => 'Nombreingresos']) }}
            {!! $errors->first('NombreIngresos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CodigoIngresos') }}
            {{ Form::text('CodigoIngresos', $ingreso->CodigoIngresos, ['class' => 'form-control' . ($errors->has('CodigoIngresos') ? ' is-invalid' : ''), 'placeholder' => 'Codigoingresos']) }}
            {!! $errors->first('CodigoIngresos', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>