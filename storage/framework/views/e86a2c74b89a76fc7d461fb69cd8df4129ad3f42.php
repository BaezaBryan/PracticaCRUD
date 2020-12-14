<?php if(isset($user) and is_object($user)): ?>
    <?php
        $title='Modificación de un Usuario';
        $boton = 'Actualizar';
        $id = $user->poetcode;
        $firstname = $user->firstname;
        $surname = $user->surname;
        $address = $user->adress;
        $postcode = $user->postcode;
        $telephonenumeber = $user->telephonenumeber;
    ?>
<?php else: ?>
    <?php
        $title='Alta de Usuario';
        $boton = 'Dar de alta';
        $id = '';
        $firstname = '';
        $surname = '';
        $address = '';
        $postcode = '';
        $telephonenumeber = '';
    ?>
<?php endif; ?>
<?php $__env->startSection('title','Mostrar Poetas'); ?>
<?php $__env->startSection('header'); ?>
     <center><strong><h1><?php echo e($title); ?></h1></strong></center>
##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('navbar'); ?>
##parent-placeholder-c63e3c1cfa2ff651ad4cfadea3e21265ffcf8ca3##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<br>
<form action="<?php echo e(isset($user) ? action('poetcontroller@update') :action('poetcontroller@store')); ?>" method="post" > 
<?php echo e(csrf_field()); ?>

<?php if(isset($user) and is_object($user)): ?>
<input type="hidden" name="id" value="<?php echo e($id); ?>">
<?php endif; ?>
<label for="Firstname">Firstname</label>
<input type="text" name="firstname" value="<?php echo e($firstname); ?>">
<br>
<label for="Surname">Surname</label>
<input type="text" name="surname" value="<?php echo e($surname); ?>">
<br>
<label for="Address">Address</label>
<input type="text" name="address" value="<?php echo e($address); ?>">
<br>
<label for="PostCode">Post Code</label>
<input type="text" name="postcode" value="<?php echo e($postcode); ?>">
<br>
<label for="TelephoneNumber">Telephone Number</label>
<input type="text" name="telephonenumber" value="<?php echo e($telephonenumeber); ?>">
<br>
<input type="submit" value="<?php echo e($boton); ?>" > 
</form>
<br>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<h4>Derechos Reservados - <?php echo e(date('y')); ?></h4>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>