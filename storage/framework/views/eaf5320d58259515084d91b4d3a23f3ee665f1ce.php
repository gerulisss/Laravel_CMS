<?php $__env->startSection('content'); ?>
    <div class="container">
        <br/>
        <h2 style="font-size: 50px;">404 Page - jusu puslapis nerastas</h2>
        <br/>
        <a href="<?php echo e(route('home-locale', app()->getLocale())); ?>" class="btn btn-info">Go to Homepage</a>
        <br/>
        <br/>
    </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend' , ['title' => '404 Page'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\permissiongate\resources\views/errors/404.blade.php ENDPATH**/ ?>