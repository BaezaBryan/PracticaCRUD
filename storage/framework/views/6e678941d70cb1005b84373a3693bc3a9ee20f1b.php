<?php $__env->startSection('navbar'); ?>
<nav class="navbar navbar-dark bg-dark">
<h3><a href="<?php echo e(action('poetcontroller@show',['id'=>$user->poetcode])); ?>">Inicio</a></h3>  
</nav>
  <?php echo $__env->yieldSection(); ?>
