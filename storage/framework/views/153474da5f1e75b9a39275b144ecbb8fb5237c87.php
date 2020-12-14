<?php $__env->startSection('title','practica'); ?>
<?php $__env->startSection('header'); ?>
<center><strong><h1><?php echo e($title); ?></h1></strong></center>
##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('navbar'); ?>
##parent-placeholder-c63e3c1cfa2ff651ad4cfadea3e21265ffcf8ca3##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<H3>tabla de multiplicar de: <?php echo e($y); ?> <br>
    <?php $__currentLoopData = $mult; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $z): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h4><?php echo e($y); ?> x <?php echo e($x++); ?> = <?php echo e($z); ?></h4>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</h3>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<h4>Derechos Reservados - <?php echo e(date('y')); ?></h4>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>