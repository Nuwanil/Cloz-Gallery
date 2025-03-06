<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </head>
  <body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
            <?php echo $__env->make('admin.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->

        <!-- partial:partials/_navbar.html -->
        <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->

        <?php echo $__env->make('admin.body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- container-scroller -->
        <!-- plugins:js -->
    
        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End custom js for this page -->

        <script>
          document.addEventListener("DOMContentLoaded", function(event) { 
              var scrollpos = localStorage.getItem('scrollpos');
              if (scrollpos) window.scrollTo(0, scrollpos);
          });

          window.onbeforeunload = function(e) {
              localStorage.setItem('scrollpos', window.scrollY);
          };
      </script>
  </body>
</html>
<?php /**PATH G:\laravel\Cloz-Gallery\resources\views/admin/home.blade.php ENDPATH**/ ?>