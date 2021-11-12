@extends('layout.plantilla')
@section('titulo' , 'Crear')

@section('contenido')
   <h1 class="display-6">Agregar datos de Personas</h1>

   <form action="{{route('store')}}" method="post" >

    @csrf
        <label for="">Apellido Paterno:
            <input type="text" name="apellido_paterno" class="form-control" >
        </label>
        <br>
        <label for="">Apellido Materno:
            <input type="text" name="apellido_materno"  class="form-control" >
        </label>
        <br>
        <label for="">Nombre:
            <input type="text" name="nombre"   class="form-control" >
        </label>
        <br>
        <label for="">Fecha de Nacimiento:
            <input type="date" name="fecha_nacimiento"  class="form-control" >
        </label>
        <br>
        <label for="">Sexo:
            <select name="sexo" class="form-control" >
                <option value="feminino">Feminino</option>
                <option value="masculino">Masculino</option>
              </select>
        </label>
        <br>
        <button class="btn btn-info">Agregar datos</button>
        
   </form>

    
@endsection