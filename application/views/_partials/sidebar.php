<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('dashboard') ?>">
        <div class="sidebar-brand-icon">
        <img class="fas fa-fw fa-2x" src='<?php echo base_url('/assets/icon/shop.png') ?>'>
        </div>
        <div class="sidebar-brand-text mx-3">Toko Pakaian</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('dashboard') ?>">
          <i style="color: white" class="fas fa-fw fa-store"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Produk
      </div>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('kategori/kemeja') ?>">
          <i style="color: white" class="fas fa-fw fa-tshirt"></i>
          <span>Kemeja</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('kategori/celana') ?>">
          <img class="fas fa-fw" src='<?php echo base_url('assets/icon/fashion.png') ?>'>
          <span>Celana</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('kategori/sepatu') ?>">
        <img class="fas fa-fw" src='<?php echo base_url('assets/icon/shoes2.png') ?>'>
          <span>Sepatu</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('kategori/jaket') ?>">
        <img class="fas fa-fw" src='<?php echo base_url('assets/icon/sweatshirt.png') ?>'>
          <span>Jaket</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('kategori/topi') ?>">
          <i style="color: white" class="fas fa-fw fa-hat-cowboy"></i>
          <span>Topi</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link" href="<?php echo site_url('keranjang') ?>">
                <i class="fas fa-shopping-cart fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter"><?php echo $keranjang = $this->cart->total_items() ?></span>
              </a>
            </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                <i class="fas fa-user fa-fw mr-2 text-gray-400"></i>
              </a>

              <?php 
                if ($this->session->userdata('username') == FALSE){ ?>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="<?php echo site_url('auth/login') ?>">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Login
                  </a>
                </div>
              </li>
              <?php } else { ?>
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <?php if ($this->session->userdata('role_id') == 1){ ?>
                  <!-- Dropdown - User Information -->
                    <a class="dropdown-item" href="<?php echo site_url('admin/dashboard') ?>">
                      <i class="fas fa-user-shield fa-sm fa-fw mr-2 text-gray-400"></i>
                      admin
                    </a>
                    <div class="dropdown-divider"></div>
                <?php } ?>
                
                    <a class="dropdown-item" href="<?php echo site_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      Logout
                    </a>
                  </div>
                </li>
              <?php } ?>

          </ul>

        </nav>
        <!-- End of Topbar -->

