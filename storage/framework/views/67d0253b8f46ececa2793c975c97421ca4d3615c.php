<?php $__env->startSection('content'); ?>
     
      <br>
      <div class="container">
        <!--Section: Content-->
        <section class="text-center">
          <h4 class="mb-5"><strong><?php echo e(__('Production')); ?></strong></h4>
          <div class="row">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card">
                <div class="bg-image ripple" data-mdb-ripple-color="light">
                  <img src="https://mdbootstrap.com/img/new/standard/nature/002.jpg" class="img-fluid" />
                  <a href="<?php echo e(url($item->slug)); ?>">
                    <div class="mask">
                        <div class="d-flex justify-content-center align-items-center h-100">
                      <h5 class="text-white mb-0"><?php echo e($item->name); ?></h5>
                    </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>

        </section>
        <!--Section: Content-->
      </div>

  <!-- Main layout -->
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend' , ['title' => __('Production')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\permissiongate\resources\views/frontend/pages/production.blade.php ENDPATH**/ ?>