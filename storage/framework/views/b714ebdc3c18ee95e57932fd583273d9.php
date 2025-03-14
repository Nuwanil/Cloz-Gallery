<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" /  >
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/logo.png" type="">
      <title>Cloz-Gallery</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

      <style type="text/css">
                .font_size{
                    text-align:center;
                    font-size: 40px;
                    padding-top: 20px;
                }
                .center{
                    margin:auto;
                    width: 50%;
                    text-align: center;
                    margin-top: 30px;                   
                }
                .gray-table td {
                    color: rgb(212, 211, 211);
                }
                .img_size{
                    height: 100px !important;
                    width: auto !important;
                }
                .option1 {
                display: inline-block;
                background-color: #f7444e;
                border: 1px solid #f7444e;
                color: #ffffff;
                border-radius: 20px;
                padding: 8px 16px; /* Adjust padding to increase height */
                line-height: 1.5; /* Adjust line height for vertical centering */
            }

            .option1:hover {
                background-color: transparent;
                color: #f7444e;
            }
    </style>

   </head>

   <body>
      <div class="hero_area">

         <!-- header section starts -->
         <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

         <div>
             <Table class="table table-dark center gray-table">
                <thead>
                    <tr style="font-weight: bold;">
                       
                        <td>Product Title</td>
                        <td>Quantity</td>
                        <td>Price</td>
                        <td>Payment Status</td>
                        <td>Delivery Status</td>
                        <td>Image</td>
                        <td>Cancel Order</td>
                      
                    </tr>
                </thead>
                <tbody>
                    
                <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($order->product_title); ?></td>
                            <td><?php echo e($order->quantity); ?></td>
                            <td><?php echo e($order->price); ?></td>
                            <td><?php echo e($order->payment_status); ?></td>
                            <td><?php echo e($order->delivery_status); ?></td>
                             
                            <td>
                                <img class="img_size" src="product/<?php echo e($order->image); ?>">
                            </td>
                            <td>
                                <?php if($order->delivery_status=='processing'): ?>
                                <a onclick="return confirm('Are you sure to cancel this order?')"
                                 class="option1" href="<?php echo e(url('cancel_order',$order->id)); ?>">Cancel Order</a>
                            
                                <?php else: ?>
                                <p style="color:green;">Not Allowed</p>
                                <?php endif; ?>
                            </td>
                            
                        </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </Table>
         </div>

      </div>





         <div class="cpy_" style="position: fixed; bottom: 0;height:70px; width: 100%;">
         <p class="mx-auto">© All Rights Reserved <br>

         <h5 style="color:#fff;">Cloz Gallery</h5>

         </p>
      </div>

      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>





  </body>
</html>

<?php /**PATH G:\laravel\Cloz-Gallery\resources\views/home/order.blade.php ENDPATH**/ ?>