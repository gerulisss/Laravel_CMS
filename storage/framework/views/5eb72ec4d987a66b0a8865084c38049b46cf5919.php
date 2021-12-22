<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header"><?php echo e(__('View User')); ?></div>

        <div class="card-body">

            <a href="<?php echo e(route('users.index')); ?>" class="btn btn-light">Back to List</a>

            <br /><br />



                <table class="table table-borderless">

                    <tr>
                        <th>ID</th>
                        <td><?php echo e($user->id); ?></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><?php echo e($user->name); ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo e($user->email); ?></td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td><?php echo e($user->role->title ?? '--'); ?></td>
                    </tr>

                </table>




        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\permissiongate\resources\views/admin/users/show.blade.php ENDPATH**/ ?>