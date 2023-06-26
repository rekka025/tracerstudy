<body class="g-sidenav-show  bg-gray-100">
    
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

<div class="sidenav-header">
  <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
  
  <div class="navbar-brand m-0 "  >
    <img src="<?php echo base_url('assets/'); ?>logo/logountag.png" class="navbar-brand-img h-100" alt="main_logo">
    <span class="ms-1 font-weight-bold text-white">Tracer Study</span>
   
  </div>
</div>


<hr class="horizontal light mt-0 mb-2">

<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
  <ul class="navbar-nav">
    
<li class="nav-item ">
<a <?= $this->uri->segment(1) == 'dashboard'|| $this->uri->segment(1) == ''? 'class="nav-link text-white active bg-gradient-primary"':'class="nav-link text-white "'?> href="<?= base_url('dashboard/admin'); ?>">
  
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10" >dashboard</i>
    </div>
  
  <span class="nav-link-text ms-1">Dashboard</span>
</a>
</li>


<li class="nav-item">
<a <?= $this->uri->segment(2) == 'alumni' ? 'class="nav-link text-white active bg-gradient-primary"':'class="nav-link text-white "'?> href="<?= base_url('admin/alumni');?>">
  
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10">table_view</i>
    </div>
  
  <span class="nav-link-text ms-1">Master Alumni</span>
</a>
</li>


<li class="nav-item">
<a <?= $this->uri->segment(2) == 'responden' ? 'class="nav-link text-white active bg-gradient-primary"':'class="nav-link text-white "'?>  href="<?= base_url('admin/responden');?>">
  
    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
      <i class="material-icons opacity-10">receipt_long</i>
    </div>
  
  <span class="nav-link-text ms-1">Master Responden</span>
</a>
</li>



  
  
  
</aside>
<main class="main-content border-radius-lg ">