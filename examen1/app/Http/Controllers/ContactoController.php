<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
    //


    public function index(){

        $contactos = Contacto::all(); 
        return view('verContactos', compact ('contactos')); 
        
         }

         public function agregar(){

            return view ('agregarContacto'); 
          }
    
}
