 
 
 <?php $__env->startSection('title', 'Sub-Category'); ?>
    <?php $__env->startSection('content'); ?>

    <div class="container pt-4">
      <h2>Sub Categories</h2>
      <a class="btn btn-primary" href="<?php echo e(route('subcategories.create')); ?>"> Create New Sub Category</a>
        <a class="btn btn-primary" href="<?php echo e(url('subcategory/deleted-records')); ?>"> Deleted Records</a>
        <div class="table-responsive">
        <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Url</th>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


              <tr>
                <td><?php echo e($subcategory->id); ?></td>
                <td><?php echo e($subcategory->name); ?></td>
                <td><?php echo e($subcategory->slug); ?></td>
                <td><?php echo e($subcategory->category->name); ?></td>
                <td>
                    <form action="<?php echo e(route('subcategories.destroy',$subcategory->id)); ?>" method="POST">

                        <a class="btn btn-primary" href="<?php echo e(route('subcategories.edit',$subcategory->id)); ?>">Edit</a>

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <?php echo e($subcategories->links('vendor.pagination.custom')); ?>

    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\permissiongate\resources\views/admin/subcategory/index.blade.php ENDPATH**/ ?>