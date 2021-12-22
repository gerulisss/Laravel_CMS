<?php $__env->startSection('title', 'Product Page'); ?>
<?php $__env->startSection('content'); ?>
<div class="container dark-grey-text mt-5">

    <!--Grid row-->
    <div class="row wow fadeIn">

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <img src="/uploads/products/<?php echo e($product->image); ?>" class="img-fluid" alt="" width="450px">

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <!--Content-->
        <div class="p-4">
            <h2><?php echo e($product->name); ?></h2>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_edit')): ?>
                <a class="btn btn-primary" href="<?php echo e(route('products.edit',$product->id)); ?>">Edit</a><br/>
            <?php endif; ?>
            <span>Sub Category: <?php echo e($product->subcategory->name); ?></span>
          <p class="lead font-weight-bold">Description</p>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolor suscipit libero eos atque quia ipsa
            sint voluptatibus!
            Beatae sit assumenda asperiores iure at maxime atque repellendus maiores quia sapiente.</p>

                           <a class="share btn btn-info" href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=http://www.zmfood.rokasm.lt/')">Share </a>
            <button onclick="window.print()" class="print btn btn-info"><i class="fas fa-download"></i></button>

        </div>
        <!--Content-->

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\permissiongate\resources\views/frontend/pages/products-view.blade.php ENDPATH**/ ?>