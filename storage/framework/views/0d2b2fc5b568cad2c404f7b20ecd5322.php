
<?php $__env->startSection('titulo', 'Catalogo'); ?>
<?php $__env->startSection('contenido'); ?>
<h1 id = "SeccionTitulo" class = "Titulo" data-seccion = "<?php echo e($Seccion); ?>" data-producto = "<?php echo e($Producto); ?>"><?php echo e($Seccion); ?></h1>
<div class = "BarraDeBusqueda">
    <p onclick = "activarporclase('SA', '1', '2')">Ver todo</p>
    <div class = "Buscar">
        <input id = "buscar" type = "search" placeholder = "Buscar"><button onclick = "buscar()" type = "button">🕵️‍♀️🔎</button>
    </div>
</div>
<div class = "BaseCatalogo">
    <div id = "MasBuscados" class = "Buscados">
        <div id = "astronomia" class = "S0 SA" data-producto = "0" style = "background-image: url(<?php echo e(asset ('Imagenes/Catalogo/Astronomia.png')); ?>);">
        </div>
        <div id = "astrologia" class = "S0 SA" data-producto = "1" style = "background-image: url(<?php echo e(asset ('Imagenes/Catalogo/Astrologia.png')); ?>);">
        </div>
        <div id = "geografia" class = "S1 SA" data-producto = "0" style = "background-image: url(<?php echo e(asset ('Imagenes/Catalogo/Geografia.png')); ?>);">
        </div>
        <div id = "historia" class = "S2 SA" data-producto = "0" style = "background-image: url(<?php echo e(asset ('Imagenes/Catalogo/Historia.png')); ?>);">
        </div>
        <div id = "idiomas" class = "S3 SA" data-producto = "0" style = "background-image: url(<?php echo e(asset ('Imagenes/Catalogo/Idiomas.png')); ?>);">
        </div>
        <div id = "matematicas" class = "S4 SA" data-producto = "0" style = "background-image: url(<?php echo e(asset ('Imagenes/Catalogo/Matematicas.png')); ?>);">
        </div>
        <div id = "geometria" class = "S4 SA" data-producto = "1" style = "background-image: url(<?php echo e(asset ('Imagenes/Catalogo/Geometria.png')); ?>);">
        </div>
        <div id = "ciencia" class = "S5 SA" data-producto = "0" style = "background-image: url(<?php echo e(asset ('Imagenes/Catalogo/Ciencia.png')); ?>);">
        </div>
        <div id = "biologia" class = "S5 SA" data-producto = "1" style = "background-image: url(<?php echo e(asset ('Imagenes/Catalogo/Biologia.png')); ?>);">
        </div>
        <div id = "fisica" class = "S5 SA" data-producto = "2" style = "background-image: url(<?php echo e(asset ('Imagenes/Catalogo/Fisica.png')); ?>);">
        </div>
        <div id = "quimica" class = "S5 SA" data-producto = "3" style = "background-image: url(<?php echo e(asset ('Imagenes/Catalogo/Quimica.png')); ?>);">
        </div>
        <div id = "programacion" class = "S6 SA" data-producto = "0" style = "background-image: url(<?php echo e(asset ('Imagenes/Catalogo/Programacion.png')); ?>);">
        </div>
        <div id = "Mas" onclick = "masomenos.call(this)" data-operacion = "1" style = "height: 17vw; background-image: url(<?php echo e(asset ('Imagenes/Catalogo/Vermas.png')); ?>);">
        </div>
        <p id = "noHay"></p>
    </div>
</div>
<script>
    window.addEventListener("load", function (){
        let Seccion = [ "Astrologia", "Geografia", "Historia", "Idiomas", "Matematicas", "Ciencia", "Programacion"];
        let aux = document.getElementById("SeccionTitulo").dataset.producto === "A"? "A" : document.getElementById("SeccionTitulo").textContent;
        let clases =  document.getElementsByClassName("S" + aux);
        
        activarporclase("SA", "0", "0");

        if(document.getElementById("SeccionTitulo").dataset.producto != "0" && document.getElementById("SeccionTitulo").dataset.producto != "A"){
            for(let i = 0; i < clases.length; i++){
                if(document.getElementById("SeccionTitulo").dataset.producto === clases[i].dataset.producto){  
                    clases[i].style.minHeight = "80px";
                    clases[i].style.minWidth = "103px";
                    clases[i].style.height = "17vw";
                    clases[i].style.width = "23vw";
                    clases[i].style.margin = "5px";
                    break;
                }
            }
        }else {
            document.getElementById("Mas").style.minHeight = "0px";
            document.getElementById("Mas").style.minWidth = "0px";
            document.getElementById("Mas").style.height = "0px";
            document.getElementById("Mas").style.width = "0px";
            document.getElementById("Mas").style.margin = "0px";
            activarporclase("S" + aux, "1", "0");
        }
        document.getElementById("SeccionTitulo").textContent = aux === "A"? "Productos y servicios" : Seccion[document.getElementById("SeccionTitulo").textContent];
    })

    function masomenos(){
        let clases = "S" + document.getElementById("SeccionTitulo").dataset.seccion;
        let operacion = this.getAttribute("data-operacion");
        let imagenes = ["url(<?php echo e(asset ('Imagenes/Catalogo/Vermas.png')); ?>)", "url(<?php echo e(asset ('Imagenes/Catalogo/Vermenos.png')); ?>)"]
        activarporclase(clases, operacion, "1");
        this.dataset.operacion = this.dataset.operacion === "0"? "1" : "0";
        this.style.backgroundImage = imagenes[operacion];
    }

    function buscar(){
        activarporclase("SA", "0", "0");

        let busqueda = document.getElementById("buscar").value.toLowerCase();
        let clases = document.querySelectorAll(".SA"); let aux = 0;

        if(busqueda != ""){
            clases.forEach(function (elemento){
                if(elemento.id.toLowerCase().includes(busqueda)){
                    elemento.style.minHeight = "80px";
                    elemento.style.minWidth = "103px";
                    elemento.style.height = "17vw";
                    elemento.style.width = "23vw";
                    elemento.style.margin = "5px";
                    aux = 1;
                }
            })
        } else{
            activarporclase("SA", "1", "0");
            aux = 1;
        }
        if(aux === 0){
            document.getElementById("noHay").textContent = "No hay coincidencias";
        } else{
            document.getElementById("noHay").textContent = "";
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Mejora_BPC\resources\views/Productos.blade.php ENDPATH**/ ?>