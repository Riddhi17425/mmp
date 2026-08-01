<!-- Main Sidebar Container -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->

     <a href="<?php echo e(url('admin/dashboard')); ?>" class="brand-link">

        <span class="brand-text font-weight-light pl-5">Admin MMP Filter</span>

    </a>

    <div class="sidebar">

        <!-- Sidebar user panel (optional) -->

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="image">

                <img src="<?php echo e(asset('public/admin_public/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2"

                    alt="User Image">

            </div>

            <div class="info">

                <a href="#" class="d-block">Admin MMP Filter</a>

            </div>

        </div>



        <!-- SidebarSearch Form -->

        <div class="form-inline">

            <div class="input-group" data-widget="sidebar-search">

                <input class="form-control form-control-sidebar" type="search" placeholder="Search"

                    aria-label="Search">

                <div class="input-group-append">

                    <button class="btn btn-sidebar">

                        <i class="fas fa-search fa-fw"></i>

                    </button>

                </div>

            </div>

        </div>



        <!-- Sidebar Menu -->

         <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"

                data-accordion="false">

                <!-- Add icons to the links using the .nav-icon class

             with font-awesome or any other icon font library -->

                <li class="nav-item menu-open">

                <li class="nav-item">

                    <a href="<?php echo e(route ('admin/dashboard')); ?>" class="nav-link">

                        <i class="far fa-circle nav-icon"></i>

                        <p>Dashboard</p>

                    </a>

                </li>



                <li class="nav-item">

                    <a href="<?php echo e(route ('admin/blog')); ?>" class="nav-link">

                        <i class="far fa-comment-alt nav-icon"></i>

                        <p>Blog</p>

                    </a>

                </li>

                <li class="nav-item">

                    <a href="<?php echo e(route ('admin/casestudy')); ?>" class="nav-link">

                        <i class="far fa-comment-alt nav-icon"></i>

                        <p>Case Study</p>

                    </a>

                </li>

                <li class="nav-item">

                    <a href="<?php echo e(route ('admin/faq')); ?>" class="nav-link">

                        <i class="far fa-comment-alt nav-icon"></i>

                        <p>Blog Faqs</p>

                    </a>

                </li>

                <li class="nav-item">

                    <a href="<?php echo e(route ('admin/producttrust')); ?>" class="nav-link">

                        <i class="far fa-circle nav-icon"></i>

                        <p>Product Trust</p>

                    </a>

                </li>

                <li class="nav-item">

                    <a href="<?php echo e(url ('admin/displayourbrands')); ?>" class="nav-link">

                        <i class="far fa-user nav-icon"></i>

                        <p>Our Brand</p>

                    </a>

                </li>

                <li class="nav-item">

                    <a href="<?php echo e(url ('admin/event')); ?>" class="nav-link">

                        <i class="far fa-user nav-icon"></i>

                        <p>Event</p>

                    </a>

                </li>

                <li class="nav-item">

                    <a href="<?php echo e(url ('admin/certificate')); ?>" class="nav-link">

                        <i class="far fa-user nav-icon"></i>

                        <p>Certificate</p>

                    </a>

                </li>

                </li>

                <li class="nav-item">

                    <a href="<?php echo e(url ('admin/product')); ?>" class="nav-link">

                        <i class="fas fa-barcode nav-icon"></i>

                        <p>Product</p>

                    </a>

                </li>

                <li class="nav-item">

                    <a href="<?php echo e(url ('admin/category')); ?>" class="nav-link">

                        <i class="fas fa-shopping-cart nav-icon"></i>

                        <p>Category</p>

                    </a>

                </li>

                <li class="nav-item">

                    <a href="<?php echo e(url ('admin/video')); ?>" class="nav-link">

                        <i class="fas fa-shopping-cart nav-icon"></i>

                        <p>Video</p>

                    </a>

                </li>

                 <li class="nav-item">

                    <a href="<?php echo e(url ('admin/landinginq')); ?>" class="nav-link">

                        <i class="fas fa-shopping-cart nav-icon"></i>

                        <p>Landin Inquiry</p>

                    </a>

                </li>

                <li class="nav-item">
                    <a href="<?php echo e(route('admin/review')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-star"></i>
                        <p>Reviews</p>
                    </a>
                </li>

                <li class="nav-item">

                  <a class="nav-link" href="<?php echo e(route('logout')); ?>"

                  onclick="event.preventDefault();

                          document.getElementById('logout-form').submit();">

                        <i class="far fa-arrow-alt-circle-right nav-icon"></i>

                        <p>LogOut</p>

                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">

                      <?php echo csrf_field(); ?>

                  </form>

                </li>

            </ul>

        </nav>

        <!-- /.sidebar-menu -->

    </div>

</aside>
<?php /**PATH C:\Intelliworkz\mmp\resources\views/layouts/adminSidebar.blade.php ENDPATH**/ ?>