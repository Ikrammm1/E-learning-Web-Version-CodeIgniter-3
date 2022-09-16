<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
              <img src="<?= base_url('assets/_image/');?>LogoSMK.png" alt="E-Learning SMKN 2 Barabai" width="40%">
        </div>
        <div class="sidebar-brand-text mx-3">SMKN 2 Barabai</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Administrator
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item" >
        <a class="nav-link" href="<?php echo base_url('Guru'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->

      <!-- Nav Item - Tables -->

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Guru/daftar_materi'); ?>">
          <i class="fas fa-book"></i>
          <span>Materi</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Guru/daftar_tugas'); ?>">
          <i class="fas fa-book"></i>
          <span>Tugas</span></a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Guru/daftar_kelas'); ?>">
          <i class="fas fa-university"></i>
          <span>Kelas</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
