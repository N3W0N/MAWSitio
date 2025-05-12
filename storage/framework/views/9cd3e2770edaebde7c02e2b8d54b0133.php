<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device - width, initial-scale = 1.0">
        <meta name = "csrf-token" content = "<?php echo e(csrf_token()); ?>">
        <tittle><?php echo $__env->yieldContent('titulo'); ?></tittle>
        <link rel = "stylesheet" href = "<?php echo e(asset('css/General.css')); ?>">
        <script>
            window.CSRF_TOKEN = "<?php echo e(csrf_token()); ?>";
        </script>
    </head>
    <body>
        <div class = "Inicio">
            <div class = "InicioIzquierda">
                <img src = "Assets/Jamon.png" style = "border-bottom-left-radius: 30px; background-color: rgb(0, 0, 0); width: 100%; height: 100%;">
            </div>
            <div class = "InicioDerecha">
                <div style = "width: 100%; height: 90%;"></div>
                <div style = "width: 100%; height: 10%; display: flex; justify-content: right; padding-right: 30px;">
                    <table>
                        <thead>
                            <tr>
                                <th><h1>Inicio</h1></th>
                                <th><h1>Catalogo</h1></th>
                                <th><h1>Resultado</h1></th>
                                <th><h1>About us</h1></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div style = "height: auto; width: 100vw; position: absolute;">
            <div style = "width: 70%; display: flex; justify-content: center; position: absolute; right: 0px;">
                <div onclick = "Mostrar(0)" class = "Empresa" style = "border-radius: 0px; border-bottom-left-radius: 30px;"><a>Mision</a></div>
                <div onclick = "Mostrar(1)" class = "Empresa" style = "border-radius: 0px;"><a>Vision</a></div>
                <div onclick = "Mostrar(2)" class = "Empresa" style = "border-radius: 0px; border-bottom-right-radius: 30px;"><a>Valores</a></div>
            </div>
            <p id = "Texto" style = "background-color: rgba(255, 207, 117, 0.59); position: absolute; right: 0px; top: 30px; width: 50%; text-align: justify; margin-right: 10%;"></p>
        </div>
        <a href = "http://localhost/Example-app/public/">Click aqui😒</a>
        <script>
            function Mostrar(opciones){
                let hola = document.getElementById("Texto");
                let texto = [
                    "Es la guía de todas nuestras acciones. Buscamos alimentar, deleitar y servir a nuestro mundo, siendo una empresa altamente productiva y plenamente humana. Día a día queremos alcanzar nuestros logros y avanzar en nuestros propósitos.",
                    "Esto es lo que constituye nuestra razón de ser como empresa. Nuestros principios y valores son los que definen nuestra personalidad y forma de ser. Los valores sólo se entienden en conjunto como un complemento integral. Hacer de nuestro negocio un negocio, ser productivos. Alcanzar los niveles de rentabilidad establecidos.",
                    "Servimos con pasión. Nos entregamos en todo lo que hacemos. Trabajamos en equipo. Colaboramos, sumamos esfuerzos, multiplicamos logros. Construimos confianza. Cultivamos cada relación con integridad. Entregamos calidad. Ofrecemos diariamente productos y servicios de calidad superior. Operamos con efectividad."
                ]

                if(hola.textContent == texto[opciones]){
                    hola.style.padding = "0px";
                    hola.textContent = "";
                }else{
                    hola.style.padding = "20px";
                    hola.textContent = texto[opciones];
                }
            }
        </script>
    </body>
</html><?php /**PATH C:\xampp\htdocs\Mejora_BPC\resources\views/welcome.blade.php ENDPATH**/ ?>