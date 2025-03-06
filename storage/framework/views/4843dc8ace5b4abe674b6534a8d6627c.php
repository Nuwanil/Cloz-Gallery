<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style>
        .div_center{
            text-align: center;
            padding-top:40px;
        }
        .font_size{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .text_color{
            color:black;
            padding-bottom:20px;
        }
        label{
            display: inline-block;
            width:200px;
        }
        .div_design{
            padding:8px;
        }
        .half-width-container {
    width: 50%;
    margin: 0 auto;
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
                <div class="row justify-content-center">
                    <div class="col-md-6"> <!-- Adjust the number based on your preference -->
                        <div class="alert alert-success">
                            <?php echo e(session()->get('message')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            


                <div class="div_center">
                    <h1 class="font_size">Add Product</h1>

                    <form action="<?php echo e(url('/add_product')); ?>" method="POST" enctype="multipart/form-data">

                    <?php echo csrf_field(); ?>
                        <div class="div_design">
                            <label>Product Title</label>
                            <input class="text_color" type="text" name="title" placeholder="Write a title" required="">
                        </div>
                        <div class="div_design">
                            <label>Product Description</label>
                            <input class="text_color" type="text" name="description" required="" placeholder="Write a description">
                        </div>
                        <div class="div_design">
                            <label>Product Price</label>
                            <input class="text_color" type="number" name="price" required="" placeholder="Write the price">
                        </div>
                        <div class="div_design">
                            <label>Discount Price</label>
                            <input class="text_color" type="number" name="dis_price" placeholder="Write the Discount">
                        </div>
                        <div class="div_design">
                            <label>Product Quantity</label>
                            <input class="text_color" type="number" name="quantity" required="" min="0" placeholder="Write the Quantity">
                        </div>
                        <div class="div_design">
                            <label>Product Category</label>
                            <select class="text_color" name="category" required="">
                                <option value="" selected="">Add a category here</option>

                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->category_name); ?>"><?php echo e($category->category_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>
                        </div>
                        <div class="div_design">
                            <label>Product Image Here</label>
                            <input type="file" name="image" min="0" placeholder="Write a title" required="">
                        </div>
                        <div class="div_design">
                            <input type="submit" value="Add Product" class="btn btn-primary">
                        </div>
                    </form>

                </div>

            </div>
        </div>


        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>
<?php /**PATH G:\laravel\Cloz-Gallery\resources\views/admin/product.blade.php ENDPATH**/ ?>