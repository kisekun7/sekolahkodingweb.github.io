<?php $__env->startSection('title','Blog Sekolah koding'); ?>

<?php $__env->startSection('content'); ?>
	<h1>Create Blog</h1>

	<form action="/blog" method="post">
		<input type="text" name="title" value=" <?php echo e(old('title')); ?> "><br>
			<?php if($errors->has('title')): ?>
			<p> <?php echo e($errors->first('title')); ?> </p>
			<?php endif; ?>
		<textarea name="description" rows="8" cols="40"><?php echo e(old('description')); ?></textarea><br>
			<?php if($errors->has('description')): ?>
			<p> <?php echo e($errors->first('description')); ?> </p>
			<?php endif; ?>
		<input type="submit" name="submit" value="Create">
		<?php echo e(csrf_field()); ?>

	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>