        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Dashboard</span></li>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_panel_access')): ?>
                        <!-- dashboard-->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark  <?php if(request()->is('admin')): ?> is_active <?php endif; ?>" href="<?php echo e(route('admin.home')); ?>" aria-expanded="false">
                                <i class="mr-3 fas fa-tachometer-alt fa-fw" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <?php endif; ?>


                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['users_access','roles_access','permissions_access'])): ?>
                        <li class="sidebar-item">

                            <a class="sidebar-link has-arrow waves-effect waves-dark selected" href="javascript:void(0)" aria-expanded="false">

                                <i class="mr-3 mdi mdi-account" aria-hidden="true"></i>
                                <span class="hide-menu">Users Management</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level
                                <?php if(request()->is('admin/users') || request()->is('admin/users/*')): ?> in <?php endif; ?>
                                <?php if(request()->is('admin/roles') || request()->is('admin/roles/*')): ?> in <?php endif; ?>
                                <?php if(request()->is('admin/permissions') || request()->is('admin/permissions/*')): ?> in <?php endif; ?>
                            ">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('users_access')): ?>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link waves-effect waves-dark  <?php if(request()->is('admin/users') || request()->is('admin/users/*')): ?> is_active <?php endif; ?>" href="<?php echo e(route('admin.users.index')); ?>" aria-expanded="false">
                                            <i class="mr-3 mdi mdi-account-multiple" aria-hidden="true"></i>
                                            <span class="hide-menu">Users</span>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('roles_access')): ?>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link waves-effect waves-dark  <?php if(request()->is('admin/roles') || request()->is('admin/roles/*')): ?> is_active <?php endif; ?>" href="<?php echo e(route('admin.roles.index')); ?>" aria-expanded="false">
                                            <i class="mr-3 mdi mdi-star" aria-hidden="false"></i>
                                            <span class="hide-menu">Roles</span>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permissions_access')): ?>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link waves-effect waves-dark  <?php if(request()->is('admin/permissions') || request()->is('admin/permissions/*')): ?> is_active <?php endif; ?>" href="<?php echo e(route('admin.permissions.index')); ?>" aria-expanded="false">
                                            <i class="mr-3 mdi mdi-key" aria-hidden="false"></i>
                                            <span class="hide-menu">Permissions</span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    <?php endif; ?>

                        

                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
<?php /**PATH D:\laragon\www\permissiongate\resources\views/partial/admin/sidebar.blade.php ENDPATH**/ ?>