@extends('Base')
@section('titulo', 'Inicio')
@section('contenido')
<h1 class = "Titulo">Servicios</h1>
<div class = "Seccion">
    <div class = "ImagenesSeccion" id = "InicioServicios">
        <a id ="ImagenUrl1" style = "height: 80%; width: 40%;" href = "{{ route('Servicios', ['Servicio' => 'Actividades', 'Imagen' => urlencode('Actividades.png')]) }}">
            <img id = "ImgServicio" src = "Imagenes/Servicios/Actividades.png" style = "height: 100%; width: 100%;">
        </a>
        <a id ="ImagenUrl2" style = "height: 80%; width: 40%;" href = "{{ route('Servicios', ['Servicio' => 'Cafeteria', 'Imagen' => urlencode('Cafeteria.png')]) }}">
            <img id = "ImgServicio2" src = "Imagenes/Servicios/Cafeteria.png" style = "height: 100%; width: 100%;">
        </a>
    </div>
    <div class = "ImagenesSeccion" style = "padding: 0px; height: 20%; border: 5px solid rgba(0, 0, 0, 0.4); background-color: rgb(241, 183, 95); margin: 0px;">
        <p onclick = "Servicios(-1, 'ImgServicio')">&lt;Anterior</p>
        <p onclick = "Servicios(1, 'ImgServicio')">Siguiente></p>
    </div>
</div>
<h1 class = "Titulo">Resultados</h1>
<div class = "Seccion">
    <div class = "ImagenesSeccion" style = "display: block;">
        <div style = "display: flex; justify-content: center; text-align: center; padding-top: 15px;">
            <h2 style = "width: 50%; text-align: center;">Antes</h2>
            <h2 style = "width: 50%; text-align: center;">Despues</h2>
        </div>
        <div class = "ImagenesSeccion" style = "height: 80%; align-items: stretch;">
            <img style = "height: 90%;" id = "ImgResultados" src = "Imagenes/Resultados/CafeteriaAntes.png">
            <img style = "height: 90%;" id = "ImgResultados2" src = "Imagenes/Resultados/CafeteriaDespues.png">
        </div>
    </div>
    <div class = "ImagenesSeccion" style = "padding: 0px; height: 20%; border: 5px solid rgba(0, 0, 0, 0.4); background-color: rgb(241, 183, 95); margin: 0px;">
        <p style = "cursor: pointer;" onclick = "Servicios(-1, 'ImgResultados')">&lt;Anterior</p>
        <p style = "cursor: pointer;" onclick = "Servicios(1, 'ImgResultados')">Siguiente></p>
    </div>
</div>
<script>
    function Servicios(direccion, Seccion){
        let objeto = document.getElementById(Seccion);
        let objeto2 = document.getElementById(Seccion + "2");
        let imagenes = Seccion === 'ImgServicio'? ["Imagenes/Servicios/Actividades.png", "Imagenes/Servicios/Cafeteria.png", "Imagenes/Servicios/Clases.png", "Imagenes/Servicios/Computacion.png", "Imagenes/Servicios/Papeleria.png", "Imagenes/Servicios/Soporte.png"] : ["Imagenes/Resultados/CafeteriaAntes.png", "Imagenes/Resultados/CafeteriaDespues.png", "Imagenes/Resultados/DeportivaAntes.png", "Imagenes/Resultados/DeportivaDespues.png", "Imagenes/Resultados/MapaAntes.png", "Imagenes/Resultados/MapaDespues.png", "Imagenes/Resultados/ComputacionAntes.png", "Imagenes/Resultados/ComputacionDespues.png",];
        let urls = ["{{ route('Servicios', ['Servicio' => 'Actividades', 'Imagen' => urlencode('Actividades.png')]) }}", "{{ route('Servicios', ['Servicio' => 'Cafeteria', 'Imagen' => urlencode('Cafeteria.png')]) }}", "{{ route('Servicios', ['Servicio' => 'Clases', 'Imagen' => urlencode('Clases.png')]) }}", "{{ route('Servicios', ['Servicio' => 'Computacion', 'Imagen' => urlencode('Computacion.png')]) }}", "{{ route('Servicios', ['Servicio' => 'Papeleria', 'Imagen' => urlencode('Papeleria.png')]) }}", "{{ route('Servicios', ['Servicio' => 'Soporte', 'Imagen' => urlencode('Soporte.png')]) }}"]
        let contador = 0;

        imagenes.forEach(function(imagen, i){
            if ((objeto.src.endsWith(imagen) && contador == 0)){
                contador = (i + 2) % (imagenes.length);
                if(direccion < 0){ 
                    contador = i != 0? (i - 2) % (imagenes.length) : imagenes.length - 2;
                }
                objeto.src = imagenes[contador];
                objeto2.src = imagenes[contador + 1];
                if(imagenes[0] === "Imagenes/Servicios/Actividades.png"){
                    document.getElementById("ImagenUrl1").href = urls[contador];
                    document.getElementById("ImagenUrl2").href = urls[contador + 1];
                }
            }
        })
    }
</script>
@endsection