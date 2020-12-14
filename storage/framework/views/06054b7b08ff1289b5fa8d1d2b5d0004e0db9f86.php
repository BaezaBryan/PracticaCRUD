<?php $__env->startSection('title','practica'); ?>
<?php $__env->startSection('header'); ?>
<center><strong><h1><?php echo e($title); ?></h1></strong></center>
##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('navbar'); ?>
##parent-placeholder-c63e3c1cfa2ff651ad4cfadea3e21265ffcf8ca3##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<p><img src="/images/Miguel.jpg" alt="Migel Angel" align="left" width="20%" height="20%" class="img-thumbnail">  
Michelangelo Buonarroti (Caprese, 6 de marzo de 1475-Roma, 18 de febrero de 1564), conocido en español como Miguel Ángel, fue un arquitecto, escultor y pintor
 italiano renacentista, considerado uno de los más grandes artistas de la historia tanto por sus esculturas como por sus pinturas y obra arquitectónica.</p> <br>

 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"  >
  <div class="carousel-inner" >
    <div class="carousel-item active" >
      <center><img src="/images/m1.jpg"  alt="imagen1"  width="500" height="600"></center>
    </div>
    <div class="carousel-item">
      <center><img src="/images/m2.jpg"  alt="imagen2" width="500" height="600"></center>
    </div>
    <div class="carousel-item">
      <center><img src="/images/m3.jpg"  alt="imagen3" width="500" height="600"></center>
    </div>
    <div class="carousel-item">
      <center><img src="/images/m4.jpg"  alt="imagen4" width="500" height="600"></center>
    </div>
    <div class="carousel-item">
      <center><img src="/images/m5.jpg"  alt="imagen5" width="500" height="600"></center>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<h4>Derechos Reservados - <?php echo e(date('y')); ?></h4>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>