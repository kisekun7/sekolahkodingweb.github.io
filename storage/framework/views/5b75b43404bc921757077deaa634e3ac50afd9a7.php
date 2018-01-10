<?php $__env->startSection('title','Blog Sekolah koding'); ?>

<?php $__env->startSection('content'); ?>
	<h1>Selamat Datang di Rakaal Webisite</h1>
	<p> Rakaal Web</p>

	<hr>

	<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li>
			<a href="/blog/<?php echo e($blog->id); ?>"><?php echo e($blog->title); ?></a>
			<form action="/blog/<?php echo e($blog->id); ?>" method="post">
				<input type="submit" name="submit" value="Delete">
				<?php echo e(csrf_field()); ?>

				<input type="hidden" name="_method" value="DELETE">
			</form>
		</li>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>