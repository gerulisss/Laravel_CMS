<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
      <title> <?php if(isset($title)): ?>
              <?php echo e($title); ?> |
          <?php endif; ?>
          <?php echo e(config('app.name')); ?></title>
    <!-- MDB -->
      <style>
          /* Start by setting display:none to make this hidden.
   Then we position it in relation to the viewport window
   with position:fixed. Width, height, top and left speak
   for themselves. Background we set to 80% white with
   our animation centered, and no-repeating */
          .modal {
              display:    none;
              position:   fixed;
              z-index:    1000;
              top:        0;
              left:       0;
              height:     100%;
              width:      100%;
              background: rgba( 255, 255, 255, .8 )
              url('http://i.stack.imgur.com/FhHRx.gif')
              50% 50%
              no-repeat;
          }

          /* When the body has the loading class, we turn
             the scrollbar off with overflow:hidden */
          body.loading .modal {
              overflow: hidden;
          }

          /* Anytime the body has the loading class, our
             modal element will be visible */
          body.loading .modal {
              display: block;
          }
      </style>
      <link href="<?php echo e(asset('assets/css/loader.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/mdb.min.css')); ?>" rel="stylesheet">
      <link href="<?php echo e(asset('assets/css/custom.css')); ?>" rel="stylesheet" media="print">
    



  </head>
  <div id="fb-root"></div>
  <script>
      // (function(d, s, id) {
      //     var js, fjs = d.getElementsByTagName(s)[0];
      //     if (d.getElementById(id)) return;
      //     js = d.createElement(s); js.id = id;
      //     js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4&appId=241110544128";
      //     fjs.parentNode.insertBefore(js, fjs);
      // }(document, 'script', 'facebook-jssdk'));
  </script>
  <script>
      // function fbShare(url, title, descr, image, winWidth, winHeight) {
      //     var winTop = (screen.height / 2) - (winHeight / 2);
      //     var winLeft = (screen.width / 2) - (winWidth / 2);
      //     window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
      // }
  </script>
  <body>
      <?php echo $__env->make('frontend.includes.front-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main>











            <?php echo $__env->yieldContent('content'); ?>
        </main>

        <?php echo $__env->make('frontend.includes.front-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- MDB -->






      <div id="cover"><img src="<?php echo e(asset('assets/icons/loading.gif')); ?>" width="35px"><br/> loading...</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>








    <script type="text/javascript" src="<?php echo e(asset('assets/js/mdb.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
  </body>
</html>
<?php /**PATH D:\laragon\www\permissiongate\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>