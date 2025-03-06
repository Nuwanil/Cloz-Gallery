<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Order Details</h2>

    Customer Name :<h3><?php echo e($order->name); ?></h3>

    Customer Email :<h3><?php echo e($order->email); ?></h3>

    Customer Phone :<h3><?php echo e($order->phone); ?></h3>

    Customer Address :<h3><?php echo e($order->address); ?></h3>

    Customer Id :<h3><?php echo e($order->user_id); ?></h3>
    
    Product Name :<h3><?php echo e($order->product_title); ?></h3>

    Product Price :<h3><?php echo e($order->price); ?></h3>

    Product Quantity :<h3><?php echo e($order->quantity); ?></h3>

    Product Status :<h3><?php echo e($order->payment_status); ?></h3>

    Product Id :<h3><?php echo e($order->product_id); ?></h3>
    <br><br>
    <img height="250" width="auto" src="/product/<?php echo e($order->image); ?>">

</body>
</html><?php /**PATH G:\laravel\Cloz-Gallery\resources\views/admin/pdf.blade.php ENDPATH**/ ?>