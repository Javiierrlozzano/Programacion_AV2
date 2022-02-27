<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NombreBilletera') }}
            {{ Form::text('NombreBilletera', $billetera->NombreBilletera, ['class' => 'form-control' . ($errors->has('NombreBilletera') ? ' is-invalid' : ''), 'placeholder' => 'Nombrebilletera']) }}
            {!! $errors->first('NombreBilletera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ValorTotal') }}
            {{ Form::text('ValorTotal', $billetera->ValorTotal, ['class' => 'form-control' . ($errors->has('ValorTotal') ? ' is-invalid' : ''), 'placeholder' => 'Valortotal']) }}
            {!! $errors->first('ValorTotal', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>