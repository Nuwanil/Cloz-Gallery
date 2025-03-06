<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <style type="text/css">
                .div_center{
                    text-align:center;
                    padding-top:40px;
                }
                .h2font{
                    font-size: 40px;
                    padding-bottom: 40px;
                }
                .input_color{
                    color: black;
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
                

                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <div class="div_center">
                    <h2 class="h2font">Add Category</h2>

                    <form action="<?php echo e(url('/add_category')); ?>" method="POST">
                        <?php echo csrf_field(); ?> 
                        <input class="input_color" type="text" name="category" placeholder="Write Category name">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                    </form>
                    
                </div>  

                
                <table class="table table-dark center gray-table">
                    <thead>
                        <tr style="font-weight: bold;">
                            <td>Category Name Data</td>
                            <td>Action Data</td>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($data->category_name); ?></td>
                                <td>
                                    <a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="<?php echo e(url('delete_category',$data->id)); ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
                
                


            </div>
        </div>


    
        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>
<?php /**PATH G:\laravel\Cloz-Gallery\resources\views/admin/category.blade.php ENDPATH**/ ?>