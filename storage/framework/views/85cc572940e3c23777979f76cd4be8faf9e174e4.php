<!doctype html>
<title>Site Maintenance | Example</title>
<style>
    body { text-align: center; padding: 150px; }
    h1 { font-size: 50px; }
    body { font: 20px Helvetica, sans-serif; color: #333; }
    article { display: block; text-align: left; width: 650px; margin: 0 auto; }
    a { color: #dc8100; text-decoration: none; }
    a:hover { color: #333; text-decoration: none; }
</style>
<img src="<?php echo e(asset('demo1/dist/assets/media/logos/zmfood-logo.png')); ?>" width="250" alt="zmfood">
<article>
    <h1>We&rsquo;ll be back soon!</h1>
    <div>
        <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to you can always <a href="mailto:<?php echo e(env('CONTACT_EMAIL')); ?>">contact us</a>, otherwise we&rsquo;ll be back online shortly!</p>
        <p>&mdash; Your company name The Team</p>
    </div>
</article>
<?php /**PATH D:\laragon\www\permissiongate\resources\views/errors/503.blade.php ENDPATH**/ ?>
