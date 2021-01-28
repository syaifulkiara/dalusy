<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-dark navbar-purple">
  <div class="container">
    <a href="<?php echo base_url('dashboard') ?>" class="navbar-brand">
      <img src="<?php echo base_url('assets') ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">APLIKASI</span>
    </a>

    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="<?php echo base_url('dashboard') ?>" class="nav-link active">Home</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('profile') ?>" class="nav-link">Profile</a>
        </li>
        <li class="nav-item dropdown">
          <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Overtime</a>
          <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
            <li><a href="<?php echo base_url('overtime') ?>" class="dropdown-item">My Overtime </a></li>
            <li><a href="<?php echo base_url('overtime/tambah') ?>" class="dropdown-item">Tambah Overtime</a></li>
              </ul>
            </li>
        <li class="nav-item">
          <a href="<?php echo base_url('project') ?>" class="nav-link">Project</a>
        </li>

        
            <!-- End Level two -->
          </ul>
        </li>
      </ul>
    </div>

    <!-- Right navbar links -->
    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto"> 
     
       <?php if($this->fungsi->user_login()->akses_level == 1 ){ ?>
       <li class="nav-item">
          <a href="<?php echo base_url('user') ?>" class="nav-link">Management Users</a>
        </li>
      <?php } ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('profile') ?>">
          <i class="fas fa-user"></i> <?php echo $this->session->userdata('nama_user'); ?>
          (<?php echo $this->session->userdata('akses_level'); ?>)
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-warning" href="<?php echo base_url('login/logout') ?>">
          <i class="fas fa-sign-out-alt"></i>Logout
        </a>
      </li>
    </ul>
  </div>
</nav>
<!-- /.navbar -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
   <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">

          <h1 class="m-0"> <?php echo $title ?></h1>
        </div><!-- /.col -->
        <div class="float-right" style="font-size: 25px; font-family: arial; color: #dc3545; ">
           <?php echo hari_ini(date('w'))?>,  <?php echo tgl_indo(date('Y-m-d')) ?>
          </div>
          <div style="font-size: 25px; font-family: arial; color: #17a2b8; "> &nbsp;<i class="fa fa-clock"></i> <span id="jam"></span>
          </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
   <div class="container">

       <?php 
        if($this->session->flashdata('sukses')){
        ?>

        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <i class="icon fas fa-check"></i>
          <?php echo $this->session->flashdata('sukses'); ?>
        </div>

        <?php } ?>

        <!-- validasi error -->
        <?php echo validation_errors('<div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <i class="icon fas fa-check"></i>','</div>') ?>