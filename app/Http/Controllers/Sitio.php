<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sitio extends Controller{
    function Catalogo(){
        return view('Catalogo');
    }
    
    function Productos($Seccion, $Producto){
        return view('Productos', Compact('Seccion', 'Producto'));
    }

    function Servicios($Servicio, $Imagen){
        return view('Servicios', compact('Servicio', 'Imagen'));
    }

    function Resultado(){
        return view('Resultados');
    }

    function AboutUs(){
        return view('AboutUs');
    }
}