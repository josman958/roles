<div class="form-group">
        {{ Form::label('name','Nombre')}}
        {{ Form::text('name', null, ['class'=>'form-control'])}}
</div>
<div class="form-group">
        {{ Form::label('slug','URL AMIGABLE')}}
        {{ Form::text('slug', null, ['class'=>'form-control'])}}
</div>
<div class="form-group">
        {{ Form::label('description','Descripcion')}}
        {{ Form::textarea('description', null, ['class'=>'form-control'])}}
</div>
<hr>
<h3>PERMISO ESPECIAL</h3>
<div class="form-group">
    <label>{{ Form::radio('special','all-access')}} Acceso Total</label>
    <label>{{ Form::radio('special','no-access')}} Sin Acceso</label>
</div>
<hr>
<h3>LISTA DE PERMISOS</h3>
    <div class="form-group">
        <ul class="list-unstyled">
            @foreach($permissions as $permission)
                <li>
                    <label>
                        {{ Form::checkbox('permissions[]', $permission->id,null)}}
                        {{ $permission->name}}
                        <em>({{ $permission->description ?:'N/A'}})</em>
                    </label>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="form-group">
        {{ Form::submit('Guardar', ['class'=>'btn btn-sm btn-primary'])}}
    </div>