<?php $__env->startSection('title','Blog Sekolah koding'); ?>

<?php $__env->startSection('content'); ?>
	<h1>Selamat Datang di Rakaal Webisite</h1>
	<h2> <?php echo e($blog->title); ?> </h2>
	<hr>
	<p>
		<?php echo e($blog->description); ?>

	</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>