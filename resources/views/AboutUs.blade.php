@extends('Base')
@section('titulo', 'About us')
@section('contenido')
<h1 class = "Titulo">About Us</h1>
<section id="AboutUs" class="AboutUs">
    <div class="AboutContainer">
        <div class="AboutText">
            <h2>¿Quiénes somos?</h2>
            <p>
                Somos una institución comprometida con el crecimiento académico, tecnológico y personal de nuestra comunidad. 
                Nuestro enfoque es ofrecer un entorno donde aprender, compartir y avanzar esté al alcance de todos.
                A través de distintos servicios y proyectos, trabajamos para facilitar herramientas y espacios que impulsen 
                el desarrollo escolar y social.
            </p>
            <p>
                Más allá de las aulas, fomentamos actividades que fortalecen el trabajo en equipo, la creatividad y 
                la responsabilidad. Creemos que cada mejora cuenta, y nuestro esfuerzo se refleja en cada rincón renovado, 
                cada computadora encendida y cada libro entregado.
            </p>
        </div>

        <div class="AboutImage">
            <img src="{{ asset('Imagenes/Inicio/AboutUs.svg') }}" alt="Ilustración de equipo trabajando">
        </div>
    </div>
</section>
@endsection