<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header"><?php echo e(__('Roles List')); ?></div>

        <div class="card-body">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_create')): ?>
            <a href="<?php echo e(route('roles.create')); ?>" class="btn btn-primary">Add New Role</a>
            <?php endif; ?>

            <br /><br />



                <table class="table table-borderless table-hover">
                            <tr class="bg-info text-light">
                                <th class="text-center">ID</th>
                                <th>Title</th>
                                <th>Short Code</th>
                                <th>
                                    &nbsp;
                                </th>
                            </tr>
                    <?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="text-center"><?php echo e($role->id); ?></td>
                            <td><?php echo e($role->title); ?></td>
                            <td><?php echo e($role->short_code ?? '--'); ?></td>
                            <td>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_show')): ?>
                                        <a href="<?php echo e(route('roles.show', $role->id)); ?>" class="btn btn-sm btn-success">View</a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_edit')): ?>
                                        <a href="<?php echo e(route('roles.edit', $role->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <?php endif; ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_delete')): ?>
                                        <form action="<?php echo e(route('roles.destroy', $role->id)); ?>" class="d-inline-block" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="100%" class="text-center text-muted py-3">No Roles Found</td>
                            </tr>
                    <?php endif; ?>
                </table>




            <?php if($roles->total() > $roles->perPage()): ?>
            <br><br>
                    <?php echo e($roles->links('vendor.pagination.custom')); ?>

            <?php endif; ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\permissiongate\resources\views/admin/roles/index.blade.php ENDPATH**/ ?>