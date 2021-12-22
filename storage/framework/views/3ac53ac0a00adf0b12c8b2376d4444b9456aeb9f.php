<?php $__env->startSection('content'); ?>
<div class="container">
    <!--Section: Content-->
    <br>
    <section class="text-center">
      <h4 class="mb-5"><strong><?php echo e($subcategory->name); ?></strong></h4>
      <div class="row">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-12 mb-4">

            <div class="bg-image ripple" data-mdb-ripple-color="light">
              <img src="/uploads/products/<?php echo e($product->image); ?>" class="img-fluid" alt="zmfood"/>
                <a data-mdb-toggle="modal" data-mdb-target="#exampleModal<?php echo e($product->id); ?>">

                <div class="mask">
                    <div class="d-flex justify-content-center align-items-center h-100">
                  <h4 class="text-white mb-0"><?php echo e($product->name); ?></h4>
                </div>
                </div>
              </a>
            </div>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div
            class="modal fade"
            id="exampleModal<?php echo e($product->id); ?>"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo e($product->name); ?> || Category: <?php echo e($product->subcategory->category->name); ?></h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-mdb-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body"><img src="/uploads/products/<?php echo e($product->image); ?>" class="img-fluid" alt="zmfood"/></div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
    <!--Section: Content-->
  </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend' , ['title' => "{$subcategory->name}"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\permissiongate\resources\views/frontend/pages/products.blade.php ENDPATH**/ ?>