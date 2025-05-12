<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device - width, initial-scale = 1.0">
        <meta name = "csrf-token" content = "<?php echo e(csrf_token()); ?>">
        <title><?php echo $__env->yieldContent('titulo'); ?></title>
        <link rel = "stylesheet" href = "<?php echo e(asset('css/General.css')); ?>">
        <link rel = "stylesheet" href = "<?php echo e(asset('css/Inicio.css')); ?>">
        <link rel = "stylesheet" href = "<?php echo e(asset('css/Catalogo.css')); ?>">
        <link rel = "stylesheet" href = "<?php echo e(asset('css/Servicios.css')); ?>">
        <link rel = "stylesheet" href = "<?php echo e(asset('css/Resultados.css')); ?>">
        <link rel = "stylesheet" href = "<?php echo e(asset('css/AboutUs.css')); ?>">
        <script>
            window.CSRF_TOKEN = "<?php echo e(csrf_token()); ?>";
        </script>
    </head>
    <body>
        <div id = "Inicio">
            <div id = "InicioIzquierda">
                <img src = "<?php echo e(asset('Imagenes/General/LogoTipo.png')); ?>" style = "background-color: rgb(0, 0, 0); width: 100%; height: 100%;">
            </div>
            <div id = "InicioDerecha">
                <div style = "width: 100%; height: 90%;"></div>
                <div style = "width: 100%; height: 10%; display: flex; justify-content: right;">
                    <table class = "BarraInicio">
                        <thead>
                            <tr>
                                <th><h1><a  class = "Link_Normal" href = "<?php echo e(route('Inicio')); ?>">Inicio</a></h1></th>
                                <th><h1><a class = "Link_Normal" href = "<?php echo e(route('Catalogo')); ?>">Catalogo</a></h1></th>
                                <th><h1><a class = "Link_Normal" href = "<?php echo e(route('Servicios', ['Servicio' => 'Actividades', 'Imagen' => urlencode('Actividades.png')])); ?>">Servicios</a></h1></th>
                                <th><h1><a class = "Link_Normal" href = "<?php echo e(route('Resultados')); ?>">Resultados</a></h1></th>
                                <th><h1><a class = "Link_Normal" href = "<?php echo e(route('AboutUs')); ?>">About us</a></h1></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div style = "height: auto; width: 100vw; position: absolute; display: flex; justify-content: center; padding: 0px;">
            <div style = "width: 100%; display: flex; justify-content: right; position: absolute; right: 0px; margin: 0px; padding-right: 25px;">
                <div onclick = "Mostrar(this, 0)" class = "Empresa" style = "border-radius: 0px; border-bottom-left-radius: 30px;"><a>Mision</a></div>
                <div onclick = "Mostrar(this, 1)" class = "Empresa" style = "border-radius: 0px;"><a>Vision</a></div>
                <div onclick = "Mostrar(this, 2)" class = "Empresa" style = "border-radius: 0px; border-bottom-right-radius: 30px;"><a>Valores</a></div>
            </div>
            <p id = "Texto" style = "min-width: 240px; box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.75); background-color: rgba(255, 207, 117, 0.59); position: absolute; right: 0px; top: 30px; width: 50%; text-align: justify; margin-right: 2.5%; z-index: 4;"></p>
        </div>
        <?php echo $__env->yieldContent('contenido'); ?>
        <h1 class = "Titulo">Contactos</h1>
        <div class = "Contactos">
            <div data-encendido = "0">
                <h2>About Us</h2>
                <h3>Mision</h3>
                <p>Es la guía de todas nuestras acciones. Buscamos alimentar, deleitar y servir a nuestro mundo, siendo una empresa altamente productiva y plenamente humana.</p>
                <h3>Vision</h3>
                <p>Esto es lo que constituye nuestra razón de ser como empresa. Nuestros principios y valores son los que definen nuestra personalidad y forma de ser.</p>
                <h3>Valores</h3>
                <p>Servimos con pasión. Nos entregamos en todo lo que hacemos. Trabajamos en equipo.</p>
                <h3>Direccion</h3>
                <p>Calz del Tecnológico 12950, Tomas Aquino, 22414 Tijuana, B.C.</p>
            </div>
            <div data-encendido = "0">
                <h2>Contactanos</h2>
                <h3>Horario de atencion</h3>
                <p style = "text-align: center;">Lunes - Viernes:  06:00 - 16:00</p>
                <p style = "text-align: center;">Sabado:  09:00 - 14:00</p>
                <h3>Telefono</h3>
                <p style = "text-align: center;">666 444 7777</p>
                <h3>Redes sociales</h3>
                <p style = "text-align: center;"><a>Facebook</a></p>
                <p style = "text-align: center;"><a>Instagram</a></p>
                <p style = "text-align: center;"><a>Whatsapp</a></p>
                <p style = "text-align: center;"><a>LinkedIn</a></p>
            </div>
            <div data-encendido = "0">
                <h2>O.N's Company</h2>
                <h3>Contactanos</h3>
                <p style = "text-align: center;">Telefono: 666 444 7777</p>
                <p style = "text-align: center;"><a>Facebook</a></p>
                <p style = "text-align: center;"><a>Instagram</a></p>
                <p style = "text-align: center;"><a>Whatsapp</a></p>
                <p style = "text-align: center;"><a>LinkedIn</a></p>
                <h3>Mision</h3>
                <p>Crear Jogos</p>
                <h3>Vision</h3>
                <p>Crear los jogos mas top que imaginas</p>
                <h3>Valores</h3>
                <p>Solo juegen los jogos</p>
                <h3>Direccion</h3>
                <p>Una casa en el planeta tierra</p>
            </div>
        </div>
        <div style = "display: flex; align-items: center; width: 100vw; height: 25px; text-align: center; background-color: rgb(2, 49, 121); color: white;">
            <h3 style = " font-size: clamp(8px, 2vw, 22px); width: 100%;">Sitio creado por Owen. Todos los derechos reservados pertenecen a O.N's Company.</h3>
        </div>
        <script>
            function Mostrar(elemento, opciones){
                let hola = document.getElementById("Texto");

                document.querySelectorAll('.Empresa').forEach(function (boton){
                    boton.style.boxShadow = "none";
                })

                let texto = [
                    "Es la guía de todas nuestras acciones. Buscamos alimentar, deleitar y servir a nuestro mundo, siendo una empresa altamente productiva y plenamente humana. Día a día queremos alcanzar nuestros logros y avanzar en nuestros propósitos.",
                    "Esto es lo que constituye nuestra razón de ser como empresa. Nuestros principios y valores son los que definen nuestra personalidad y forma de ser. Los valores sólo se entienden en conjunto como un complemento integral. Hacer de nuestro negocio un negocio, ser productivos. Alcanzar los niveles de rentabilidad establecidos.",
                    "Servimos con pasión. Nos entregamos en todo lo que hacemos. Trabajamos en equipo. Colaboramos, sumamos esfuerzos, multiplicamos logros. Construimos confianza. Cultivamos cada relación con integridad. Entregamos calidad. Ofrecemos diariamente productos y servicios de calidad superior. Operamos con efectividad."
                ]

                if(hola.textContent === texto[opciones]){
                    hola.style.padding = "0px";
                    hola.textContent = "";
                }else{
                    hola.style.padding = "20px";
                    hola.style.borderBottomLeftRadius = "20px";
                    hola.style.borderBottomRightRadius = "20px";
                    hola.textContent = texto[opciones];
                    elemento.style.boxShadow = "10px 10px 10px";
                }
            }

            window.addEventListener("load", function () {
                document.querySelectorAll(".BarraInicio th").forEach(function (titulo) {
                    if (titulo.textContent === document.title) {
                        titulo.style.backgroundColor = "rgb(38, 86, 175)";
                        titulo.style.borderBottomLeftRadius = "0px";
                        titulo.style.borderBottomRightRadius = "0px";
                    }
                })
                ajustarInicio();
            });

            function expandirDiv() {
              expander(this);
            }

            function ajustarInicio() {
                if (window.innerWidth < 600) {
                    document.getElementById("InicioIzquierda").style.width = "100%";
                    document.getElementById("InicioIzquierda").style.height = "50%";
                    document.getElementById("InicioIzquierda").style.borderRadius = "0px";
                
                    document.getElementById("InicioDerecha").style.width = "100%";
                    document.getElementById("InicioDerecha").style.height = "50%";
                    document.getElementById("InicioDerecha").style.borderRadius = "0px 0px 30px 30px";

                    document.querySelectorAll(".Contactos div").forEach(function (div){
                        div.style.width = "100%";
                        div.style.height = "40px";
                        div.classList.add("expand");
                        div.addEventListener("click", expandirDiv);
                    });
                } else {
                    // Opcional: restaurar estilos si vuelve a tamaño mayor
                    document.getElementById("InicioIzquierda").style = "";
                    document.getElementById("InicioDerecha").style = "";

                    document.querySelectorAll(".Contactos div").forEach(function (div){
                        div.style = "";
                        div.classList.remove("expand");
                        div.removeEventListener("click", expandirDiv);
                    });
                }
            }

            function activarporclase(clase, operacion, mas){
                let clases = document.getElementsByClassName(clase);
                    
                for(let i = 0; i < clases.length; i++){
                    if(clases[i].dataset.producto === document.getElementById("SeccionTitulo").dataset.producto && mas === "1"){ continue; }
                    clases[i].style.minHeight = (80 * operacion) + "px";
                    clases[i].style.minWidth = (103 * operacion) + "px";
                    clases[i].style.height = (17 * operacion) + "vw";
                    clases[i].style.width = (23 * operacion) + "vw";
                    clases[i].style.margin = (5 * operacion) + "px";
                }
                if(mas === "2"){
                    document.getElementById("Mas").style.minHeight = "0px";
                    document.getElementById("Mas").style.minWidth = "0px";
                    document.getElementById("Mas").style.height = "0px";
                    document.getElementById("Mas").style.width = "0px";
                    document.getElementById("Mas").style.margin = "0px";
                    document.getElementById("SeccionTitulo").textContent = "Productos y servicios";
                }
            }
            
            function expander(expanderdiv){
                let encendido = expanderdiv.dataset.encendido;
                document.querySelectorAll(".Contactos div").forEach(function (div){
                    div.style.height = "40px";
                    div.dataset.encendido = "0";
                });

                if(encendido === "0"){
                    expanderdiv.style.height = "auto";
                    expanderdiv.dataset.encendido = "1";
                }
            }
            window.addEventListener("resize", ajustarInicio);
        </script>
    </body>
</html><?php /**PATH C:\xampp\htdocs\Mejora_BPC\resources\views/Base.blade.php ENDPATH**/ ?>