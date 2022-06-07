@extends('layout.app')

@section('title', 'Your page title')

@section('content')
<div class="col-md-8" href="{{route('list-users')}}">
    <div class="mt-2 table-responsive-md">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Documento</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Telefono</th>
                <th scope="col">Direccion</th>
                <th scope="col">Correo Electronico</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Rol</th>
              </tr>
            </thead>
            <tbody>

    @foreach ( $user as $u  )
        <tr>
            <td>{{ $u->documento }}</td>
            <td>{{ $u->nombre }}</td>
            <td>{{ $u->apellido }}</td>
            <td>{{ $u->telefono }}</td>
            <td>{{ $u->direccion }}</td>
            <td>{{ $u->username }}</td>
            <td>{{ $u->password }}</td>
            <td>{{ $u->rol_id }}</td>
            <td>
            <button type="button" class="btn btn-success">Editar</button>
        </td>
        <td>
            <button type="button" class="btn btn-danger">Borrar</button>
        </td>
        </tr>
    @endforeach

@endsection
