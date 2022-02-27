<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NombreRuta') }}
            {{ Form::text('NombreRuta', $ruta->NombreRuta, ['class' => 'form-control' . ($errors->has('NombreRuta') ? ' is-invalid' : ''), 'placeholder' => 'Nombreruta']) }}
            {!! $errors->first('NombreRuta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>