   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
       <!-- Brand Logo -->
       <a href="index.php" class="brand-link">
           <img src="<?php echo base_url('dist/img/AdminLTELogo.png')?>" alt=" AdminLTE Logo"
               class="brand-image img-circle elevation-3" style="opacity: 0.8" />
           <span class="brand-text font-weight-light">AdminLTE 3</span>
       </a>

       <!-- Sidebar -->
       <div class="sidebar">
           <!-- Sidebar user (optional) -->
           <div class="user-panel mt-3 pb-3 mb-3 d-flex">
               <div class="image">
                   <img src="<?php echo base_url('dist/img/user2-160x160.jpg')?>" class="img-circle elevation-2"
                       alt="User Image" />
               </div>
               <div class="info">
                   <a href="#" class="d-block">
                       <?php
                            if($this->session->has_userdata('USERNAME')){
                                echo $this->session->userdata('USERNAME');
                                echo ' - '.$this->session->userdata('ROLE');
                            }                   
                        ?>
                   </a>
               </div>
           </div>

           <!-- SidebarSearch Form -->
           <div class="form-inline">
               <div class="input-group" data-widget="sidebar-search">
                   <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                       aria-label="Search" />
                   <div class="input-group-append">
                       <button class="btn btn-sidebar">
                           <i class="fas fa-search fa-fw"></i>
                       </button>
                   </div>
               </div>
           </div>

           <!-- Sidebar Menu -->
           <nav class="mt-2">
               <?php
               if($this->session->userdata('ROLE')=='administrator'){
               ?>
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                   data-accordion="false">
                   <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-tachometer-alt"></i>
                           <p>
                               Pratikum Pemweb 2
                               <i class="right fas fa-angle-left"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="<?php echo base_url('index.html')?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Dashboard v1</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?php echo base_url('index2.html')?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Dashboard v2</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?php echo base_url('index3.html')?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Dashboard v3</p>
                               </a>
                           </li>
                       </ul>
                   </li>
                   <li class="nav-item">
                       <a href="../widgets.html" class="nav-link">
                           <i class="nav-icon fas fa-th"></i>
                           <p>
                               Widgets
                               <span class="right badge badge-danger">New</span>
                           </p>
                       </a>
                   </li>
                   <li class="nav-item menu-open">
                       <a href="#" class="nav-link active">
                           <i class="nav-icon fas fa-copy"></i>
                           <p>
                               Layout Options
                               <i class="fas fa-angle-left right"></i>
                               <span class="badge badge-info right">6</span>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="../layout/top-nav.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Top Navigation</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="../layout/top-nav-sidebar.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Top Navigation + Sidebar</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="../layout/boxed.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Boxed</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="../layout/fixed-sidebar.html" class="nav-link active">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Fixed Sidebar</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="../layout/fixed-sidebar-custom.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Fixed Sidebar <small>+ Custom Area</small></p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="../layout/fixed-topnav.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Fixed Navbar</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="../layout/fixed-footer.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Fixed Footer</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="../layout/collapsed-sidebar.html" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Collapsed Sidebar</p>
                               </a>
                           </li>
                       </ul>
                   </li>

               </ul>
               <?php
                }else{
                ?>
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                   data-accordion="false">
                   <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                   <li class="nav-item">
                       <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-tachometer-alt"></i>
                           <p>
                               Pratikum Pemweb 2
                               <i class="right fas fa-angle-left"></i>
                           </p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item">
                               <a href="<?php echo base_url('index.html')?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Dashboard v1</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?php echo base_url('index2.html')?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Dashboard v2</p>
                               </a>
                           </li>
                           <li class="nav-item">
                               <a href="<?php echo base_url('index3.html')?>" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Dashboard v3</p>
                               </a>
                           </li>
                       </ul>
                   </li>
               </ul>
               <?php
               }?>



           </nav>
           <!-- /.sidebar-menu -->
       </div>
       <!-- /.sidebar -->
   </aside>