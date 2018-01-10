<?php $__env->startSection('title','Blog Sekolah koding'); ?>

<?php $__env->startSection('content'); ?>
	<h1>Edit Data</h1>

	<form action="/blog/<?php echo e($blog->id); ?>" method="post">
		<input type="text" name="title" value="<?php echo e($blog->title); ?>"><br>
		<textarea name="description" rows="8" cols="40"> <?php echo e($blog->description); ?> </textarea><br>

		<input type="submit" name="submit" value="Edit">
		<?php echo e(csrf_field()); ?>

		<input type="hidden" name="_method" value="PUT">
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>