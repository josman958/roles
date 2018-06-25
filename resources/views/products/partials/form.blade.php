<div class="form-group">
    {{ Form::label('name','Nombre del Producto')}}
    {{ Form::text('name', null, ['class'=>'form-control'])}}
</div>
<div class="form-group">
    {{ Form::label('description','Descripcion del Producto')}}
    {{ Form::text('description', null, ['class'=>'form-control'])}}
</div>
<div class="form-group">
    {{ Form::label('codigo','Codigo del Producto')}}
    {{ Form::text('codigo', null, ['class'=>'form-control'])}}
</div>
<div class="form-group">
    {{ Form::label('age','Categoria del Producto') }}
    {{ Form::select('age', ['Under 18', '19 to 30', 'Over 30'], null, ['class' => 'custom-select custom-select-lg']) }}
</div>
<div class="form-group">
        <div class="custom-control custom-checkbox mb-3">
        {{ Form::checkbox('estado', null, true, ['class' => 'custom-control-input','id'=>'estado']) }}
        {{ Form::label('estado', null, ['class' => 'custom-control-label']) }}
    </div>
    </div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary'])}}
</div>