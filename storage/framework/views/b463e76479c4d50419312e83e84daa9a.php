<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">

    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style type="text/css">
        label{
            display: inline-block;
            width:300px;
            font-size: 15px;
            font-weight: bold;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">


        <!-- partial:partials/_sidebar.html -->
            <?php echo $__env->make('admin.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->

        <!-- partial:partials/_navbar.html -->
        <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->


    <div class="main-panel">
        <div class="content-wrapper">

        <h2 style="text-align:center; font-size:25px;">Send Email to <?php echo e($order->email); ?></h2>

            <form action="<?php echo e(url('send_user_email',$order->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div style="padding-top:30px; padding-left:35%;">
                    <label>Email greeting: </label>
                    <input style="color:black;" type="text" name="greeting">
                </div>
                <div style="padding-top:30px; padding-left:35%;">
                    <label>Email first line: </label>
                    <input style="color:black;" type="text" name="firstline">
                </div>
                <div style="padding-top:30px; padding-left:35%;">
                    <label>Email body: </label>
                    <input style="color:black;" type="text" name="body">
                </div>
                <div style="padding-top:30px; padding-left:35%;">
                    <label>Email button name: </label>
                    <input style="color:black;" type="text" name="button">
                </div>
                <div style="padding-top:30px; padding-left:35%;">
                    <label>Email url: </label>
                    <input style="color:black;" type="text" name="url">
                </div>
                <div style="padding-top:30px; padding-left:35%;">
                    <label>Email last line: </label>
                    <input style="color:black;" type="text" name="lastline">
                </div>
                <div style="padding-top:30px; padding-left:35%;">
                    <input type="submit" value="Send Email" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>


        
    
        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End custom js for this page -->
  </body>
</html>
<?php /**PATH G:\laravel\Cloz-Gallery\resources\views/admin/email_info.blade.php ENDPATH**/ ?>