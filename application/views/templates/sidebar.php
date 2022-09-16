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
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Home'); ?>">
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
        <a class="nav-link" href="<?php echo base_url('C_Guru/daftar_guru'); ?>">
          <i class="fas fa-fw fa-chalkboard-teacher"></i>
          <span>Guru</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('C_siswa/daftar_siswa'); ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Siswa</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('C_mapel/daftar_mapel'); ?>">
          <i class="fas fa-chalkboard"></i>
          <span>Mata Pelajaran</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('C_kelas/daftar_kelas'); ?>">
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
