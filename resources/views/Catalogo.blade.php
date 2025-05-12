@extends('Base')
@section('titulo', 'Catalogo')
@section('contenido')
<h1 class = "Titulo">Secciones</h1>
<div class = "BaseCatalogo">
    <div id = "Catalogo" class = "SeccionesCatalogo">
        <a href = "{{ route('Productos', ['Seccion' => '0', 'Producto' => '0']) }}"><div style = "background-image: url('Imagenes/Catalogo/Astronomia.png');">
        </div></a>
        <a href = "{{ route('Productos', ['Seccion' => '1', 'Producto' => '0']) }}"><div style = "background-image: url('Imagenes/Catalogo/Geografia.png');">
        </div></a>
        <a href = "{{ route('Productos', ['Seccion' => '2', 'Producto' => '0']) }}"><div style = "background-image: url('Imagenes/Catalogo/Historia.png');">
        </div></a>
        <a href = "{{ route('Productos', ['Seccion' => '3', 'Producto' => '0']) }}"><div style = "background-image: url('Imagenes/Catalogo/Idiomas.png');">
        </div></a>
        <a href = "{{ route('Productos', ['Seccion' => '4', 'Producto' => '0']) }}"><div style = "background-image: url('Imagenes/Catalogo/Matematicas.png');">
        </div></a>
        <a href = "{{ route('Productos', ['Seccion' => '5', 'Producto' => '0']) }}"><div style = "background-image: url('Imagenes/Catalogo/Ciencia.png');">
        </div></a>
        <a href = "{{ route('Productos', ['Seccion' => '6', 'Producto' => '0']) }}"><div style = "background-image: url('Imagenes/Catalogo/Programacion.svg');">
        </div></a>
    </div>
    <div class = "Vermas">
        <button onclick = "VerMas()">Ver mas</button>
    </div>
</div>
<h1 class = "Titulo">Los mas buscados</h1>
<div class = "BaseCatalogo">
    <div id = "MasBuscados" class = "Buscados">
        <a href = "{{ route('Productos', ['Seccion' => '0', 'Producto' => '0']) }}"><div style = "background-image: url('Imagenes/Catalogo/Astronomia.png');">
        </div></a>
        <a href = "{{ route('Productos', ['Seccion' => '0', 'Producto' => '1']) }}"><div style = "background-image: url('Imagenes/Catalogo/Astrologia.png');">
        </div></a>
        <a href = "{{ route('Productos', ['Seccion' => '1', 'Producto' => '0']) }}"><div style = "background-image: url('Imagenes/Catalogo/Geografia.png');">
        </div></a>
        <a href = "{{ route('Productos', ['Seccion' => '2', 'Producto' => '0']) }}"><div style = "background-image: url('Imagenes/Catalogo/Historia.png');">
        </div></a>
        <a href = "{{ route('Productos', ['Seccion' => '3', 'Producto' => '0']) }}"><div style = "background-image: url('Imagenes/Catalogo/Idiomas.png');">
        </div></a>
        <a href = "{{ route('Productos', ['Seccion' => '4', 'Producto' => '0']) }}"><div style = "background-image: url('Imagenes/Catalogo/Matematicas.png');">
        </div></a>
        <a href = "{{ route('Productos', ['Seccion' => '4', 'Producto' => '1']) }}"><div style = "background-image: url('Imagenes/Catalogo/Geometria.png');">
        </div></a>
        <a href = "{{ route('Productos', ['Seccion' => '5', 'Producto' => '0']) }}"><div style = "background-image: url('Imagenes/Catalogo/Ciencia.png');">
        </div></a>
        <a href = "{{ route('Productos', ['Seccion' => '5', 'Producto' => '2']) }}"><div style = "background-image: url('Imagenes/Catalogo/Fisica.png');">
        </div></a>
        <a href = "{{ route('Productos', ['Seccion' => '6', 'Producto' => '0']) }}"><div style = "background-image: url('Imagenes/Catalogo/Programacion.svg');">
        </div></a>
    </div>
    <div class = "Vermas">
        <a href = "{{ route('Productos', ['Seccion' => '7', 'Producto' => 'A']) }}"><button>Ver Todo</button></a>
    </div>
</div>
<script>
    function VerMas(){
        document.getElementById('Catalogo').style.height = document.getElementById('Catalogo').style.height === "auto"? "240px" : "auto";
    }
</script>
@endsection