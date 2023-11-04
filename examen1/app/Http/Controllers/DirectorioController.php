<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directorio;

class DirectorioController extends Controller
{
    //



    public function index(){

        $directorios = Directorio::all(); 
        return view('directorio', compact ('directorios')); 
        
         }


        
    public function create(){

        return view ('crearEntrada'); 
      }


      public function store(Request $request){

       
        $codigoEntrada = $request->input("codigoEntrada");
        $existingDirectorio = Directorio::where('codigoEntrada', $codigoEntrada)->first();
    
        if ($existingDirectorio) {
             return redirect()->back()->with('error', 'El código de entrada ya existe');
        } else {
           
            $directorio = new Directorio(); 
            $directorio->codigoEntrada= $codigoEntrada; 
            $directorio->nombre = $request->input("nombre");
            $directorio->apellido = $request->input("apellido");
            $directorio->correo = $request->input("correo");
            $directorio->telefono = $request->input("telefono");
           
            $directorio->save(); 
            return redirect()->route('directorio.index');
       /* $directorio = new Directorio(); 
  
        $directorio->codigoEntrada= $request->input("codigoEntrada"); 
        $directorio->nombre = $request->input ("nombre");
        $directorio->apellido = $request->input ("apellido");
        $directorio->correo = $request->input ("correo");
        $directorio->telefono = $request->input ("telefono");
       
        $directorio->save(); 
        return redirect()->route('directorio.index');*/
  
      }
    }
  




      public function buscar(){

        return view ('buscarEntrada'); 
      }




      public function delete(){

        return view ('eliminarEntrada'); 
      }


}
