<?php $__env->startSection('title','practica'); ?>
<?php $__env->startSection('header'); ?>
<center><strong><h1><?php echo e($title); ?></h1></strong></center>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<form action="<?php echo e(action('ControllerPractica@validarlogin')); ?>" method = "POST">
    <?php echo e(csrf_field()); ?>

    <label for="user">Usuario</label>
    <input type="text" name="user"> 
    <br>
    <label for="pass">Password</label>
    <input type="password" name="pass"> 
    <br>
    <label for="llave">LLave</label>
    <input type="text" name="llave"> 
    <br>
    <input type="submit" value="Enviar"  class="p-3 mb-2 bg-secondary text-white">
</form>
<br>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<h4>Derechos Reservados - <?php echo e(date('y')); ?></h4>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.logins', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>