<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
           
          </div>
          <ul class="navbar-nav  justify-content-end">
            
            <div class="dropdown ">
            <li class="nav-item d-flex align-items-center">
            <button type="button"  class="btn success mt-3" data-bs-toggle="dropdown" >
            <i class="fa fa-user "></i>  Hi, <?= $user['nama']; ?>
                    </button>
                    <ul class="dropdown-menu" >
                       
                        <li><a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal"
                        data-bs-target="#logoutModal">Logout</a></li>
                    </ul>
                </li>
            </div>
            
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
           
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
         
              </a>
             
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End of Topbar -->
    <div class="container mb-5">
        <div class="row mt-2">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <div class="dropdown">
                    <button type="button" id="importexport" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Import/Export Excel
                    </button>
                    <ul class="dropdown-menu" >
                        
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Upload Excel</a></li>
                        <?= form_open_multipart('admin/responden/exportdata') ?>
                        <li><button class="dropdown-item" type="submit">Download Excel</button></li>
                        <?= $this->session->flashdata('pesan'); ?>
                        <?= form_close(); ?>
                       
                    </ul>
                    </div>
                     
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                 <thead>
                    <tr>
		            <th class="th-sm">No</th>
		            <th class="th-sm">NIM</th>
		            <th class="th-sm">Nama</th>
		            <th class="th-sm">Tanggal Isi</th>
		        </tr>
                 </thead>
                 <tbody>
                    <?php $i = 1;
		        	foreach($responden as $row):
                    ?>
		        <tr>
                <td><?= $i++; ?></td>
		            <td><?= $row->nim;?></td>
		            <td><?=$row->nama;?></td>
		            <td><?=$row->tanggal_isi;?></td>
		        </tr>
		       <?php endforeach; ?>
               </tbody>
		    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <?= form_open_multipart('admin/responden/uploaddata') ?>
                        <div class="form-row">
                            <div class="col-4">
                                <input type="file" class="form-control-file" id="importexcel" name="importexcel" accept=".xlsx,.xls">
                            </div>
                            <div class="col">
                                <?= $this->session->flashdata('pesan'); ?>
                            </div>
                        </div>
                              
                    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
          <?= form_close(); ?>  
        </div>
      </div>
    </div>
  </div>



 