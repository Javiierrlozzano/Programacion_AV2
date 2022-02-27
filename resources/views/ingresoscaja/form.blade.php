<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Obsevacion') }}
            {{ Form::text('Obsevacion', $ingresoscaja->Obsevacion, ['class' => 'form-control' . ($errors->has('Obsevacion') ? ' is-invalid' : ''), 'placeholder' => 'Obsevacion']) }}
            {!! $errors->first('Obsevacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TipoIngresos') }}
            {{ Form::text('TipoIngresos', $ingresoscaja->TipoIngresos, ['class' => 'form-control' . ($errors->has('TipoIngresos') ? ' is-invalid' : ''), 'placeholder' => 'Tipoingresos']) }}
            {!! $errors->first('TipoIngresos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Billetera') }}
            {{ Form::text('Billetera', $ingresoscaja->Billetera, ['class' => 'form-control' . ($errors->has('Billetera') ? ' is-invalid' : ''), 'placeholder' => 'Billetera']) }}
            {!! $errors->first('Billetera', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>