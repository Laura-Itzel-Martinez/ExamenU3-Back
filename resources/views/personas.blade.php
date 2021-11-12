@extends('layout.plantilla')
@section('titulo' , 'Personas')
@section('contenido')
    <br>
    <br>
    <span><h1>Personas registradas</h1></span>

    <a href="{{route('create')}}">Crear persona</a>
    <table class="table table-striped table-bordered">
        <thead>
            <th>ID</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Nombre</th>
            <th>Fecha de Nacimiento</th>
            <th>Sexo</th>
            <th>Edad</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            @foreach ($personas as $personas) 
            <tr>
                <td>{{$personas->id}}</td>
                <td>{{$personas->apellido_paterno}}</td>
                <td>{{$personas->apellido_materno}}</td>
                <td>{{$personas->nombre}}</td>
                <td>{{$personas->fecha_nacimiento}}</td>
                <td>{{$personas->sexo}}</td>
                <td>{{$edad = Carbon\Carbon::parse($personas->fecha_nacimiento)->age;}}</td>

                <form action="{{route('edit', $personas)}}" >
                    @csrf
                    <td><button class="btn btn-warning"  >Actualizar</button></td>
                </form>

                <form action="{{route('destroy', $personas)}}" method="post">
                    @csrf
                    @method('delete')
                    <td><button type="submit" class="btn btn-danger">Eliminar</button></td>
                </form>

            </tr>    
            @endforeach 
        </tbody>
    </table>

@endsection