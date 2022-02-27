<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Logitud') }}
            {{ Form::text('Logitud', $logitudLatitud->Logitud, ['class' => 'form-control' . ($errors->has('Logitud') ? ' is-invalid' : ''), 'placeholder' => 'Logitud']) }}
            {!! $errors->first('Logitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Latitud') }}
            {{ Form::text('Latitud', $logitudLatitud->Latitud, ['class' => 'form-control' . ($errors->has('Latitud') ? ' is-invalid' : ''), 'placeholder' => 'Latitud']) }}
            {!! $errors->first('Latitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Rutas') }}
            {{ Form::text('Rutas', $logitudLatitud->Rutas, ['class' => 'form-control' . ($errors->has('Rutas') ? ' is-invalid' : ''), 'placeholder' => 'Rutas']) }}
            {!! $errors->first('Rutas', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>