<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style type="text/css">
                .font_size{
                    text-align:center;
                    font-size: 40px;
                    padding-top: 20px;
                }
                .center {
    margin: auto;
    width: 90%; /* Adjust width as needed */
    text-align: center;
    margin-top: 30px;
}

                .gray-table td {
                    color: rgb(212, 211, 211);
                }
                .img_size{
                    width: 200px !important;
                    height: auto !important;
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

            <h2 class="font_size">All Orders</h2>
            <br>

            <div style= "padding-left:400px;  margin:auto; padding-bottom:30px;">
                <!-- <form method="get" action="<?php echo e(url('search')); ?>">
                    <input type="text" style="color:black" name="search" placeholder="Search for something">
                    <input type="submit" name="search" class="btn btn-primary">

                </form> -->
            </div>

            <div class="table-responsive">
                <Table class="table table-dark center gray-table">
                    <thead>
                        <tr style="font-weight: bold;">
                            <td>Name</td>
                            <td>Email</td>
                            <td>Address</td>
                            <td>Phone</td>
                            <td>Product Title</td>
                            <td>Quantity</td>
                            <td>Price</td>
                            <td>Payment Status</td>
                            <td>Delivery Status</td>
                            <td>Image</td>
                            <td>Delivered</td>
                            <td>Print PDF</td>
                            <td>Send Email</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($order->name); ?></td>
                                <td><?php echo e($order->email); ?></td>
                                <td><?php echo e($order->address); ?></td>
                                <td><?php echo e($order->phone); ?></td>
                                <td><?php echo e($order->product_title); ?></td>
                                <td><?php echo e($order->quantity); ?></td>
                                <td><?php echo e($order->price); ?></td>
                                <td><?php echo e($order->payment_status); ?></td>
                                <td><?php echo e($order->delivery_status); ?></td>
                                 
                                <td>
                                    <img class="img_size" src="/product/<?php echo e($order->image); ?>">
                                </td>
                                <td>
                                    <?php if($order->delivery_status=='processing'): ?>
                                        <a class="btn btn-primary" onclick="return confirm('Are you sure this product is delivered?')"
                                        href="<?php echo e(url('delivered',$order->id)); ?>">Delivered</a>
                                    <?php else: ?>
                                        <p style="color:green;">Delivered</p>
                                    <?php endif; ?>    
                                </td>
                                <td>
                                    <a href="<?php echo e(url('print_pdf',$order->id)); ?>" class="btn btn-secondary">Print PDF</a>
                                </td>
                                <td>
                                    <a href="<?php echo e(url('send_email',$order->id)); ?>" class="btn btn-info">Send Email</a>
                                </td>
                            </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td clospan="16">
                                    No data found
                                    </td>
                                </tr>

                        <?php endif; ?>
                    </tbody>
                </Table>
            </div>

            </div>
        </div>

      

        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End custom js for this page -->
  </body>
</html>
<?php /**PATH G:\laravel\Cloz-Gallery\resources\views/admin/order.blade.php ENDPATH**/ ?>