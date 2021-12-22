<?php $__env->startSection('title', 'Products'); ?>
    <?php $__env->startSection('content'); ?>

    <div class="container pt-4">
      <h2>Products</h2>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_create')): ?>
      <a class="btn btn-primary" href="<?php echo e(route('products.create')); ?>"> Create New Product</a>
        <?php endif; ?>

        <a class="btn btn-primary" href="<?php echo e(route('export.pdf')); ?>"> Export pdf</a>



        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_destroy')): ?>
        <button type="button" class="btn btn-primary" href="<?php echo e(url('subcategory/deleted-records')); ?>"> Deleted Records</button>
        <?php endif; ?>
        <div class="table-responsive">
        <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Url</th>
                <th scope="col">Sub Category Name</th>
                  <th scope="col">Category Name</th>
                  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_edit')): ?>
                <th scope="col">Action</th>
                  <?php endif; ?>
              </tr>
            </thead>
            <tbody>

                    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>


              <tr>
                <td><?php echo e($product->id); ?></td>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->slug); ?></td>
                <td><?php echo e($product->subcategory->name); ?></td>
                  <td><?php echo e($product->subcategory->category->name); ?></td>

                <td>
                    <form action="<?php echo e(route('products.destroy',$product->id)); ?>" method="POST">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_edit')): ?>
                        <a class="btn btn-primary" href="<?php echo e(route('products.edit',$product->id)); ?>">Edit</a>
                        <?php endif; ?>
                        <?php echo csrf_field(); ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('product_delete')): ?>
                        <?php echo method_field('DELETE'); ?>

                        <button type="submit" class="btn btn-danger">Delete</button>
                        <?php endif; ?>
                    </form>
                </td>

              </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <br/>
                        <h2>No Products found!</h2>
                    <?php endif; ?>
                    <br/>
            </tbody>
          </table>
        </div>
        <?php echo e($products->links('vendor.pagination.custom')); ?>

    </div>
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
























<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\permissiongate\resources\views/admin/product/index.blade.php ENDPATH**/ ?>