<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header"><?php echo e(__('View Role')); ?></div>

        <div class="card-body">

            <a href="<?php echo e(route('roles.index')); ?>" class="btn btn-light">Back to List</a>

            <br /><br />



                <table class="table table-borderless">

                    <tr>
                        <th width="25%">ID</th>
                        <td><?php echo e($role->id); ?></td>
                    </tr>
                    <tr>
                        <th width="25%">Title</th>
                        <td><?php echo e($role->title); ?></td>
                    </tr>
                    <tr>
                        <th width="25%">Short Code</th>
                        <td><?php echo e($role->short_code ?? "--"); ?></td>
                    </tr>
                    <tr>
                        <th width="25%">Permissions</th>
                        <td>
                            <?php $__empty_1 = true; $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="badge badge-info"><?php echo e($permission->name); ?></div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                No Permissions
                            <?php endif; ?>
                       </td>
                    </tr>

                </table>




        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\permissiongate\resources\views/admin/roles/show.blade.php ENDPATH**/ ?>