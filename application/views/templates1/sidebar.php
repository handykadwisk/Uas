<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-briefcase"></i>
        </div>
        <div class="sidebar-brand-text mx-3">BPJS </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <div class="sidebar-heading">
        Administrator
      </div>
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
            <!-- Heading -->
      <div class="sidebar-heading">
        Data
      </div>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/peminjaman') ?>">
          <i class="fas fa-fw fa-exchange-alt"></i>
          <span>Peminjaman</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/barang') ?>">
          <i class="fas fa-fw fa-briefcase"></i>
          <span>Barang</span></a>
      </li>

        <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/pengguna') ?>">
          <i class="fas fa-fw fa-user"></i>
          <span>User</span></a>
      </li>




      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      

      <!-- Divider -->
      <hr class="sidebar-divider">



   
      </li>
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
        <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
        <!-- Divider -->
    
        <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('auth/logout') ?>" >
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->