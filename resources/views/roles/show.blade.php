@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ROLES</div>

                <div class="card-body">
                    <p><strong>NOMBRE</strong> {{ $role->name}}</p>
                    <p><strong>SLUG</strong> {{ $role->slug}}</p>
                    <p><strong>DESCRIPCION</strong> {{ $role->description}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
