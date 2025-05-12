
<?php $__env->startSection('titulo', 'Resultados'); ?>
<?php $__env->startSection('contenido'); ?>
<h1 class = "Titulo">Resultados</h1>
<p class = "TextResults">A lo largo del tiempo, pequeños cambios han ido transformando los espacios que forman parte de la experiencia diaria. Aquí reunimos algunos de los resultados visibles, donde el antes y el después hablan por sí solos. Son mejoras pensadas para hacer del entorno un lugar más funcional, cómodo y adaptado a las necesidades de todos los que lo utilizan.</p>
<div class = "BaseCatalogo" style = "background-color: rgba(255, 202, 58, 0.49); padding: 3vw;">
    <div style = "width: 100%; display: flex; justify-content: center;">
        <div style = "display: flex; justify-content: left; flex-wrap: wrap; width: 100%; min-width: 220px;">
            <div class = "Resultados" style = "background-image: url('<?php echo e(asset ('Imagenes/Resultados/ArtisticaDespues.png')); ?>');">    
                <img src = "<?php echo e(asset ('Imagenes/Resultados/ArtisticaAntes.png')); ?>">
            </div>
            <div class = "Resultados" style = "background-image: url('<?php echo e(asset ('Imagenes/Resultados/CafeteriaDespues.png')); ?>');">
                <img src = "<?php echo e(asset ('Imagenes/Resultados/CafeteriaAntes.png')); ?>">
            </div>
            <div class = "Resultados" style = "background-image: url('<?php echo e(asset ('Imagenes/Resultados/ComputacionDespues.png')); ?>');">  
                <img src = "<?php echo e(asset ('Imagenes/Resultados/ComputacionAntes.png')); ?>">
            </div>
            <div class = "Resultados" style = "background-image: url('<?php echo e(asset ('Imagenes/Resultados/DeportivaDespues.png')); ?>');">     
                <img src = "<?php echo e(asset ('Imagenes/Resultados/DeportivaAntes.png')); ?>">
            </div>
            <div class = "Resultados" style = "background-image: url('<?php echo e(asset ('Imagenes/Resultados/MapaDespues.png')); ?>');">
                <img src = "<?php echo e(asset ('Imagenes/Resultados/MapaAntes.png')); ?>">
            </div>
            <div class = "Resultados" style = "background-image: url('<?php echo e(asset ('Imagenes/Resultados/UtilesDespues.png')); ?>');">  
                <img src = "<?php echo e(asset ('Imagenes/Resultados/UtilesAntes.png')); ?>">
            </div>
        </div>
    </div>
</div>
<p class = "TextResults">Esto es solo una parte del trabajo realizado.
Seguimos explorando formas de mejorar, adaptarnos y responder a las necesidades del entorno. Cada resultado es un punto de partida para nuevos cambios, siempre con la intención de aportar algo útil, funcional y duradero.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Base', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Mejora_BPC\resources\views/Resultados.blade.php ENDPATH**/ ?>