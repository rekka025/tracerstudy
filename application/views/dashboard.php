
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
       
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
             
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
           
            <div >
            <li class="nav-item d-flex align-items-center">
            
           
           <a class="btn btn-danger" href="<?= base_url('auth'); ?>"> <i class="fa fa-user " > </i>  Login Admin </a>
                    
                   
                </li>
            </div>
            
           
            
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
       
              </a>
              
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Alumni</p>
                <h4 class="mb-0"><?= $total_alumni ?></h4>
              </div>
            </div>
          
            <div class="card-footer p-3">
            
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-danger shadow-danger text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Total Responden</p>
                <h4 class="mb-0"><?= $total_responden ?></h4>
              </div>
            </div>
           
            <div class="card-footer p-3">
              
            </div>
          </div>
        </div>
    
      
        <div class="row mt-4">
        <div class="col-lg-6 col-md-6 mt-4 mb-4">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient shadow-primary border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-pie" class="chart-canvas" height="170"></canvas>
                 
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">Status Alumni</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 mt-4 mb-4">
          <div class="card z-index-2  ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-radient shadow-primary border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-bar" class="chart-canvas" height="300"></canvas>
                 
                </div>
              </div>
            </div>
           
            <div class="card-body">
              <h6 class="mb-0 "> Hubungan Bidang Studi Dengan Pekerjaan </h6>
             
            </div>
          </div>
        </div>
       
      </div>
      <div >
        <div style="width:98%">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Jenis Perusahaan/Intansi/Institusi Tempat Bekerja Alumni</h6>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tempat Kerja</th>
                      <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total Alumni</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Persentase</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"> Intansi Pemerintah </h6>
                          </div>
                        </div>
                      </td>
                      <td class="text-center" >
                        <span class="text-sm font-weight-bold"> <?= $intansi_pemerintah?> </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"></span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold"> <?php $jmlInstansi=($intansi_pemerintah/$total_responden*100) ?><?php echo number_format($jmlInstansi);  ?> <?= '%' ?></span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info " style="width:<?= number_format($jmlInstansi);?>%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">BUMN/BUMD </h6>
                          </div>
                        </div>
                      </td>
                      <td class="text-center" >
                        <span class="text-sm font-weight-bold"> <?= $bumn?> </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold">  </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold"> <?php $jmlInstansi=($bumn/$total_responden*100) ?><?php echo number_format($jmlInstansi);  ?> <?= '%' ?></span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info " style="width:<?= number_format($jmlInstansi);?>%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Institusi/Organisasi Multilateral </h6>
                          </div>
                        </div>
                      </td>
                      <td class="text-center" >
                        <span class="text-sm font-weight-bold"> <?= $institusi?> </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold">  </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold"> <?php $jmlInstansi=($institusi/$total_responden*100) ?><?php echo number_format($jmlInstansi);  ?> <?= '%' ?></span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info " style="width:<?= number_format($jmlInstansi);?>%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                      
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Organisasi non-profit/<br>Lembaga Swadaya Masyarakat</h6>
                          </div>
                        </div>
                      </td>
                      <td class="text-center" >
                        <span class="text-sm font-weight-bold"> <?= $organisasi_non_profit?> </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold"> <?php $jmlInstansi=($organisasi_non_profit/$total_responden*100) ?><?php echo number_format($jmlInstansi);  ?> <?= '%' ?></span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info " style="width:<?= number_format($jmlInstansi);?>%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                        
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Perusahaan Swasta</h6>
                          </div>
                        </div>
                      </td>
                      <td class="text-center" >
                        <span class="text-sm font-weight-bold"> <?= $prusahaan_swasta?> </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold">  </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold"> <?php $jmlInstansi=($prusahaan_swasta/$total_responden*100) ?><?php echo number_format($jmlInstansi);  ?> <?= '%' ?></span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info " style="width:<?= number_format($jmlInstansi);?>%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Wiraswasta/Perusahaan Sendiri</h6>
                          </div>
                        </div>
                      </td>
                      <td class="text-center" >
                        <span class="text-sm font-weight-bold"> <?= $wiraswasta?> </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold">  </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold"> <?php $jmlInstansi=($wiraswasta/$total_responden*100) ?><?php echo number_format($jmlInstansi);  ?> <?= '%' ?></span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info " style="width:<?= number_format($jmlInstansi);?>%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                         
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Lainnya</h6>
                          </div>
                        </div>
                      </td>
                      <td class="text-center" >
                        <span class="text-sm font-weight-bold"> <?= $lainnya?> </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold">  </span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold"> <?php $jmlInstansi=($lainnya/$total_responden*100) ?><?php echo number_format($jmlInstansi);  ?> <?= '%' ?></span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info " style="width:<?= number_format($jmlInstansi);?>%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        </div>
      

