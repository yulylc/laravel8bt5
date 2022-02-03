@extends('layouts.plantillabase') <!--la ruta de la plantilla, o se extiende de la plantilla que cree como base-->

@section('contenido') <!--la section correspondiente al yield de la plantilla base-->

<!--here I can use any component of bootstrap-->
<a href="articulos/create" class="btn btn-primary">Crear</a>

<table class="table table-light table-striped table-hover mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Descripción</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
        <tr>
            <td>{{$articulo->id}}</td>
            <td>{{$articulo->codigo}}</td>
            <td>{{$articulo->descripcion}}</td>
            <td>{{$articulo->cantidad}}</td>
            <td>{{$articulo->precio}}</td>
            <td>
                <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
                <button class="btn btn-danger">Borrar</button>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection

