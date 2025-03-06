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
                .center{
                    margin:auto;
                    width: 50%;
                    text-align: center;
                    margin-top: 30px;                   
                }
                .gray-table td {
                    color: rgb(212, 211, 211);
                }
                .img_size {
                    width: 200px !important;
                    height: auto !important;
                }
            </style>
  </head>

  <body>
    <div class="container-scroller">

        <?php echo $__env->make('admin.side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
        <div class="main-panel">
            <div class="content-wrapper">

            <?php if(session()->has('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(session()->get('message')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

            <h2 class="font_size">All Products</h2>

            <Table class="table table-dark center gray-table">
                <thead>
                    <tr style="font-weight: bold;">
                        <td>Product Title</td>
                        <td>Description</td>
                        <td>Quantity</td>
                        <td>Category</td>
                        <td>Price</td>
                        <td>Discount Price</td>
                        <td>Product Image</td>
                        <td>Delete</td>
                        <td>Edit</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($product->title); ?></td>
                            <td><?php echo e($product->description); ?></td>
                            <td><?php echo e($product->quantity); ?></td>
                            <td><?php echo e($product->category); ?></td>
                            <td><?php echo e($product->price); ?></td>
                            <td><?php echo e($product->discount_price); ?></td>
                            <td>
                                <img class="img_size" src="/product/<?php echo e($product->image); ?>">
                            </td>
                            <td>
                                <a class="btn btn-danger" onclick="return confirm('Are you sure delete this?')" href="<?php echo e(url('delete_product',$product->id)); ?>">Delete</a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="<?php echo e(url('/update_product',$product->id)); ?>">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </Table>

            </div>
        </div>
    
        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>
<?php /**PATH G:\laravel\Cloz-Gallery\resources\views/admin/show_product.blade.php ENDPATH**/ ?>