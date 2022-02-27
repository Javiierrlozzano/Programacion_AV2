<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Cliente') }}
            {{ Form::text('Cliente', $pago->Cliente, ['class' => 'form-control' . ($errors->has('Cliente') ? ' is-invalid' : ''), 'placeholder' => 'Cliente']) }}
            {!! $errors->first('Cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Credito') }}
            {{ Form::text('Credito', $pago->Credito, ['class' => 'form-control' . ($errors->has('Credito') ? ' is-invalid' : ''), 'placeholder' => 'Credito']) }}
            {!! $errors->first('Credito', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('BilleteraPago') }}
            {{ Form::text('BilleteraPago', $pago->BilleteraPago, ['class' => 'form-control' . ($errors->has('BilleteraPago') ? ' is-invalid' : ''), 'placeholder' => 'Billeterapago']) }}
            {!! $errors->first('BilleteraPago', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaPago') }}
            {{ Form::text('FechaPago', $pago->FechaPago, ['class' => 'form-control' . ($errors->has('FechaPago') ? ' is-invalid' : ''), 'placeholder' => 'Fechapago']) }}
            {!! $errors->first('FechaPago', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Valor') }}
            {{ Form::text('Valor', $pago->Valor, ['class' => 'form-control' . ($errors->has('Valor') ? ' is-invalid' : ''), 'placeholder' => 'Valor']) }}
            {!! $errors->first('Valor', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>