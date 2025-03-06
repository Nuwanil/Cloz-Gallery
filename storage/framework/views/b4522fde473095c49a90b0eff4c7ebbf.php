<header class="header_section">
    <div class="container">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img width="100" src="images/logo.png" alt="#" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item active">
                   <a class="nav-link" href="<?php echo e(url('/')); ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#products-section">Products</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="#about-section">About Us</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="#footer-section">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('show_cart')); ?>"><i class="fa fa-shopping-cart fa-lg"></i></a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="<?php echo e(url('show_order')); ?>">Order</a>
                </li>



                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <?php echo e(Auth::user()->name); ?>

                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo e(route('profile.show')); ?>"><?php echo e(__('Profile')); ?></a></li>
                                    <?php if(Laravel\Jetstream\Jetstream::hasApiFeatures()): ?>
                                        <li><a class="dropdown-item" href="<?php echo e(route('api-tokens.index')); ?>"><?php echo e(__('API Tokens')); ?></a></li>
                                    <?php endif; ?>
                                <li>
                                    <form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <?php echo e(__('Log Out')); ?>

                                        </a>
                                    </form>
                                </li>
                            </ul> 
                        </li>
                <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><i class="fa fa-user-circle"></i>Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><i class="fa fa-user-circle"></i>Register</a>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>

             </ul>
          </div>
       </nav>
    </div>
 </header>
<?php /**PATH G:\laravel\Cloz-Gallery\resources\views/home/header.blade.php ENDPATH**/ ?>