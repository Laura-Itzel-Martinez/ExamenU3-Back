@extends('layout.plantilla')
@section('titulo' , 'Actualizar')

@section('contenido')
   <h1 class="display-6">Actualizar datos de Personas</h1>

   <form action="{{route('update', $personas)}}" method="post">

    @csrf
    @method('put')

        <label for="">Apellido Paterno:
            <input type="text" name="apellido_paterno" class="form-control" value="{{$personas->apellido_paterno}}">
        </label>
        <br>
        <label for="">Apellido Materno:
            <input type="text" name="apellido_materno"  class="form-control" value="{{$personas->apellido_materno}}">
        </label>
        <br>
        <label for="">Nombre:
            <input type="text" name="nombre"   class="form-control" value="{{$personas->nombre}}">
        </label>
        <br>
        <label for="">Fecha de Nacimiento:
            <input type="date" name="fecha_nacimiento"  class="form-control"  value="{{$personas->fecha_nacimiento}}">
        </label>
        <br>
        <label for="">Sexo:
            <select name="sexo" class="form-control" value="{{$personas->sexo}}">
                <option value="feminino">Feminino</option>
                <option value="masculino">Masculino</option>
              </select>
        </label>
        <br>
        <button class="btn btn-info">Actualizar datos</button>
        
   </form>

    
@endsection