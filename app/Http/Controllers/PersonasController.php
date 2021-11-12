<?php

namespace App\Http\Controllers;
use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index(){
        $personas = Personas::orderBy('id', 'desc')->paginate(5);
        return view('personas', compact('personas'));
    }
    public function edit(Personas $personas){
        return view('edit', compact('personas'));
       
    }
     public function update(Request $request , Personas $personas){
        
        $personas->apellido_paterno=$request->apellido_paterno;
        $personas->apellido_materno=$request->apellido_materno;
        $personas->nombre=$request->nombre;
        $personas->fecha_nacimiento=$request->fecha_nacimiento;
        $personas->sexo=$request->sexo;
        $edad = Carbon\Carbon::parse($personas->fecha_nacimiento)->age;

        $personas->save();
        return redirect()->route('index',$personas); 
    }
    public function destroy(Personas $personas){
        $personas->delete();
        return redirect()->route('index');
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $personas=new Personas();

        $personas->apellido_paterno=$request->apellido_paterno;
        $personas->apellido_materno=$request->apellido_materno;
        $personas->nombre=$request->nombre;
        $personas->fecha_nacimiento=$request->fecha_nacimiento;
        $personas->sexo=$request->sexo;
        
        $personas->save();
        return redirect()->route('index',$personas);
    }
    
}
