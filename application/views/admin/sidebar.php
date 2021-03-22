<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="background-color: crimson;">
        <img src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><strong>CI Web Project</strong></span>
    </a>

    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="<?php echo base_url()?>/admin" class="d-block">CI Web</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo base_url() ?>/admin" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Home </p>
                    </a>
                </li>
                <!-- Categories -->
                <li class="nav-item menu-open">
                    <a href="<?php echo base_url() ?>categories" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Categories
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>categories/create" class="nav-link active">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>Create Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>categories/display" class="nav-link">
                                <i class="nav-icon fas fa-eye"></i>
                                <p>View Categories</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Article -->
                <li class="nav-item">
            <a href="<?php echo base_url() ?>admin/article" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Article
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url() ?>article/insert" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Create Article</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url() ?>article/article_display" class="nav-link">
                  <i class="nav-icon fas fa-eye"></i>
                  <p>View Article</p>
                </a>
              </li>
              
            </ul>
          </li>
                
                <!-- Product -->
                <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Product
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-plus"></i>
                  <p>Create Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-eye"></i>
                  <p>View Product</p>
                </a>
              </li>
              
            </ul>
          </li>

          <!-- setting -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-sun"></i>
              <p>
                Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-key"></i>
                  <p>Change Password</p>
                </a>
              </li>
              
              
            </ul>
          </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>



<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020-2021 <a href="#">CI Web Project</a>.</strong> All rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
</body>

</html>