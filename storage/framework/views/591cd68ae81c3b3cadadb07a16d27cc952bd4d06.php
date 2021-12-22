    
    
    <?php $__env->startSection('title', 'Category'); ?>
    <?php $__env->startSection('content'); ?>

<div class="container pt-4">
  <h2>Categories</h2>
  <a class="btn btn-primary" href="<?php echo e(route('categories.create')); ?>"> Add Category</a>
    <a class="btn btn-primary" href="<?php echo e(url('category/deleted-records')); ?>"> Deleted Records</a>
    <div class="table-responsive">
    <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Url</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


          <tr>
            <td><?php echo e($category->id); ?></td>
            <td><?php echo e($category->name); ?></td>
            <td><?php echo e($category->slug); ?></td>
            <td>
                <form action="<?php echo e(route('categories.destroy',$category->id)); ?>" method="POST">

                    <a class="btn btn-primary" href="<?php echo e(route('categories.edit',$category->id)); ?>">Edit</a>

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
    <?php echo e($categories->links('vendor.pagination.custom')); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\permissiongate\resources\views/admin/category/index.blade.php ENDPATH**/ ?>