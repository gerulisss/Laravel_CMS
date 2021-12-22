<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="<?php echo e(asset('demo1/dist/assets/css/login.css')); ?>" rel="stylesheet">
</head>
<body class="align">
<div id="app">














                <!-- Right Side Of Navbar -->





































    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
        </div>
</body>
</html>
<?php /**PATH D:\laragon\www\permissiongate\resources\views/layouts/app.blade.php ENDPATH**/ ?>