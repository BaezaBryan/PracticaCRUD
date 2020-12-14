<?php $__env->startSection('title','Practica CRUD'); ?>
<?php $__env->startSection('header'); ?>
<center><strong><h1>Practica CRUD</h1></strong></center>
##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('navbar'); ?>
##parent-placeholder-c63e3c1cfa2ff651ad4cfadea3e21265ffcf8ca3##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<div class="p-3 mb-2 bg-dark text-white">
<a href="<?php echo e(action('poetcontroller@create')); ?>"> Agregar Nuevo Poeta</a>
</div>

<table class="table table-dark table-striped">
<thead>
    <tr>
      <th scope="col">PoetCode</th>
      <th scope="col">Firstname</th>
      <th scope="col">Surname</th>
      <th scope="col">Address</th>
      <th scope="col">PostCode</th>
      <th scope="col">Telephone Number</th>
      <th scope="col">ACTUALIZAR</th>
      <th scope="col">BORRAR</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <tr>
        <th scope="row"><?php echo e($user->poetcode); ?></th>
        <td><?php echo e($user->firstname); ?></td>
        <td><?php echo e($user->surname); ?></td>
        <td><?php echo e($user->adress); ?></td>
        <td><?php echo e($user->postcode); ?></td>
        <td><?php echo e($user->telephonenumeber); ?></td>
        <td><a href="<?php echo e(action('poetcontroller@show',['id'=>$user->poetcode])); ?>">
        <img src="/images/actualizar.png" width="30" height="30" class="d-inline-block align-top" alt="img no found" loading="lazy"></td></a>
        <td><a href="<?php echo e(action('poetcontroller@destroy',['id'=>$user->poetcode])); ?>">
        <img src="/images/borrar.png" width="30" height="30" class="d-inline-block align-top" alt="img no found" loading="lazy"></td></a>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<br>
<div class="alert alert-success" role="alert">
  <?php echo e(session('Status')); ?>

</div>
<br>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<h4>Derechos Reservados - <?php echo e(date('y')); ?></h4>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>