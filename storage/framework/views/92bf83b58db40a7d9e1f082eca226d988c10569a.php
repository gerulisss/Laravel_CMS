<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header"><?php echo e(__('Permissions List')); ?></div>

        <div class="card-body">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_create')): ?>
            <a href="<?php echo e(route('permissions.create')); ?>" class="btn btn-primary">Add New Permission</a>
            <?php endif; ?>

            <br /><br />



                <table class="table table-borderless table-hover">
                            <tr class="bg-info text-light">
                                <th class="text-center">ID</th>
                                <th>Name</th>
                                <th>
                                    &nbsp;
                                </th>
                            </tr>
                    <?php $__empty_1 = true; $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="text-center"><?php echo e($permission->id); ?></td>
                            <td><?php echo e($permission->name); ?></td>
                            <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_edit')): ?>
                                        <a href="<?php echo e(route('permissions.edit', $permission->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_delete')): ?>
                                <form action="<?php echo e(route('permissions.destroy', $permission->id)); ?>" class="d-inline-block" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="100%" class="text-center text-muted py-3">No Permissions Found</td>
                            </tr>
                    <?php endif; ?>
                </table>




            <?php if($permissions->total() > $permissions->perPage()): ?>
            <br><br>
                    <?php echo e($permissions->links('vendor.pagination.custom')); ?>

            <?php endif; ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\permissiongate\resources\views/admin/permissions/index.blade.php ENDPATH**/ ?>