@extends('Base')
@section('titulo', 'Servicios')
@section('contenido')
<h1 id = "title" class = "Titulo" data-imagen = "{{ urldecode($Imagen) }}">{{ $Servicio }}</h1>
<div id = "foco">
    <div>
        <img id = "Imagen" src = "{{ asset('Imagenes/Inicio/Tienda.svg') }}">
        <p id = "Actividades" class = "Servicio">Este servicio busca fomentar el desarrollo integral a través de experiencias dinámicas y participativas. Se ofrece un espacio donde la creatividad, el trabajo en equipo y la expresión personal tienen un papel central, adaptándose a distintas necesidades y contextos. Las actividades pueden variar según los objetivos planteados, siempre con un enfoque que promueve la interacción positiva y el descubrimiento de nuevas habilidades. A través de estas propuestas se favorece un ambiente más enriquecedor y estimulante para la comunidad.</p>
        <p id = "Cafeteria" class = "Servicio">La cafetería escolar ofrece a los estudiantes y al personal un espacio accesible para adquirir alimentos y bebidas durante los descansos. Su objetivo es brindar opciones rápidas y prácticas que se ajusten a los gustos y necesidades de la comunidad educativa. En este espacio se pueden encontrar desde refrigerios tradicionales como galletas, jugos, frutas y botanas, hasta alimentos más completos como tortas, emparedados y bebidas calientes. Además de facilitar el acceso a alimentos durante la jornada escolar, la cafetería busca fomentar hábitos de consumo responsables, ofreciendo alternativas saludables dentro del menú. El servicio está disponible en horarios establecidos y cumple con las normativas escolares de higiene y seguridad alimentaria.</p>
        <p id = "Clases" class = "Servicio">A través de este servicio se ofrece un espacio enfocado en el desarrollo de conocimientos y habilidades en distintas áreas. El enfoque está centrado en facilitar la comprensión de los contenidos mediante estrategias que se adaptan a diferentes necesidades y estilos de aprendizaje. Las sesiones están diseñadas para promover la participación activa, el pensamiento crítico y la reflexión individual y grupal. Además de fortalecer el dominio de temas específicos, se busca que cada experiencia contribuya al crecimiento personal y académico de quienes participan. La flexibilidad y la claridad son aspectos clave que orientan la dinámica de este servicio.</p>  
        <p id = "Computacion" class = "Servicio">Este servicio proporciona un espacio orientado al uso y comprensión de herramientas tecnológicas en distintos niveles. A través de actividades prácticas y guiadas, se promueve el desarrollo de habilidades que permiten interactuar de forma más eficiente con plataformas digitales, aplicaciones y equipos. El enfoque es flexible, permitiendo abordar distintos temas según los intereses o necesidades que se presenten, sin limitarse a un área específica. Además de favorecer el dominio técnico, se busca estimular el pensamiento lógico, la creatividad y la capacidad de adaptación frente a entornos digitales en constante evolución. El servicio está diseñado para que la experiencia sea accesible, formativa y funcional para cada participante.</p>  
        <p id = "Papeleria" class = "Servicio">Este servicio está enfocado en facilitar el acceso a materiales y recursos que apoyen diferentes tipos de actividades dentro y fuera del entorno institucional. Se ofrece una variedad de artículos útiles para tareas cotidianas, organización, elaboración de trabajos y otras necesidades que puedan surgir. La disponibilidad se ajusta a lo que comúnmente se requiere, manteniendo una selección que combina funcionalidad y practicidad. Además, el servicio está pensado para que el acceso sea ágil, claro y cómodo, integrándose con las dinámicas propias del espacio al que pertenece. La atención a los detalles y la utilidad de cada elemento son parte esencial de su propuesta.</p>  
        <p id = "Soporte" class = "Servicio">Este servicio tiene como propósito brindar asistencia ante situaciones que puedan interrumpir el funcionamiento adecuado de los distintos recursos disponibles. Se centra en ofrecer soluciones oportunas a problemas técnicos, operativos o estructurales, procurando mantener la continuidad de las actividades sin mayores contratiempos. El enfoque está en atender de manera clara, eficiente y respetuosa cualquier necesidad que surja, adaptándose a la naturaleza del inconveniente. A través de este servicio, se busca generar un ambiente confiable, en el que los procesos puedan desarrollarse de forma fluida, sabiendo que existe un respaldo dispuesto a intervenir cuando sea necesario para restablecer el orden o resolver inquietudes.</p>    
    </div>
</div>
<h1 class = "Titulo">Servicios</h1>
<div class = "BaseCatalogo" style = "background-color: rgba(255, 202, 58, 0.49);">
    <div class = "Buscados" style = "background-color: rgba(255, 202, 58, 0.49);">
        <div onclick = "cambiodeservicio('{{ asset('Imagenes/Servicios/Actividades.png')}}', 'Actividades')" style = "background-image: url({{asset ('Imagenes/Servicios/Actividades.png') }});">
        </div>
        <div onclick = "cambiodeservicio('{{ asset('Imagenes/Servicios/Cafeteria.png')}}', 'Cafeteria')" style = "background-image: url({{asset ('Imagenes/Servicios/Cafeteria.png') }});">
        </div>
        <div onclick = "cambiodeservicio('{{ asset('Imagenes/Servicios/Clases.png')}}', 'Clases')" style = "background-image: url({{asset ('Imagenes/Servicios/Clases.png') }});">
        </div>
        <div onclick = "cambiodeservicio('{{ asset('Imagenes/Servicios/Computacion.png')}}', 'Computacion')" style = "background-image: url({{asset ('Imagenes/Servicios/Computacion.png') }});">
        </div>
        <div onclick = "cambiodeservicio('{{ asset('Imagenes/Servicios/Papeleria.png')}}', 'Papeleria')" style = "background-image: url({{asset ('Imagenes/Servicios/Papeleria.png') }});">
        </div>
        <div onclick = "cambiodeservicio('{{ asset('Imagenes/Servicios/Soporte.png')}}', 'Soporte')" style = "background-image: url({{asset ('Imagenes/Servicios/Soporte.png') }});">
        </div>
    </div>
</div>
<script>
    window.addEventListener("load", function (){   
        let titulo = document.getElementById('title');
        let basePath = "{{ asset('Imagenes/Servicios/') }}/";
        let imagen = basePath + titulo.dataset.imagen;

        cambiodeservicio(imagen, titulo.textContent);
    })

    function cambiodeservicio(Imagen, Texto){
        let parrafos = document.getElementsByClassName("Servicio");
        let Parrafo = document.getElementById(Texto);
        
        for(let i = 0; i < parrafos.length; i++){
            parrafos[i].style.margin = "0px";
            parrafos[i].style.fontSize = "0px";
        }
        
        document.getElementById("Imagen").src = Imagen;
        document.getElementById("title").textContent = Texto;
        Parrafo.style = "";
        Parrafo.style = "";

        document.getElementById("foco").scrollIntoView({ behavior: 'smooth' });
    }
</script>
@endsection