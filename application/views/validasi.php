
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        
          </ol>
        
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
           
           
            
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
             
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              
              </a>
            
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
   
 
    <div class="page-header align-items-start min-vh-80" >
      <span class="mask opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Halaman Kuesioner</h4>
               
                </div>
              </div>
        

              <div class="card-body">
            

              <?= $this->session->flashdata('message'); ?>
              <form class="user" method="post" action="<?= base_url('validasi') ?>">
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">NIM</label>
                    <input type="nim" class="form-control form-control-user" id="nim" name="nim"
                                                >
                    <br>
                    <?= form_error('nim', ' <small class="text-danger pl-3">', ' </small>'); ?>
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">NIK</label>
                    <input type="nik" class="form-control form-control-user" id="nik" name="nik"
                                                >
                                            <?= form_error('nik', ' <small class="text-danger pl-3">', ' </small>'); ?>
                  </div>
                  <div class="text-center">
                    <button type="submit"  class="btn bg-gradient-primary w-100 my-4 mb-2">Mulai Kuesioner</button>
                  </div>
                
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>


  </main>
