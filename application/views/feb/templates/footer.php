 
<footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a class="font-weight-bold" target="_blank">Badan Pusat Digital dan IT</a>
                for a better web.
              </div>
            </div>
         
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!-- script status alumni -->
  <script>
                    var ctx = document.getElementById("chart-pie").getContext("2d");
                    new Chart(ctx, {
                      type: "pie",
                      data: {
                        labels: ["Bekerja", "Belum Memungkinkan Bekerja", "Wiraswasta", "Melanjutkan Pendidikan", "Tidak Bekerja"],
                        datasets: [{
                    data: [
                      {value: <?php echo $bekerja; ?>},
                      {value: <?php echo $blm_memungkinkan_bkjr; ?>},
                      {value: <?php echo $wiraswasta1; ?>},
                      {value: <?php echo $melanjutkan_pendidikan; ?>},
                      {value: <?php echo $tidakbekerja; ?>},
                            ],
                    
                    hoverOffset: 4
                    }]
                      },
                      options: {
                        responsive: true,
                        maintainAspectRatio: true,
                        plugins: {
                          legend: {
                            display: true,
                          }
                        },
                       
                      
                      },
                      
            });
          

                  </script>
  
   <!-- script hubungan bidang studi dengan pekerjaan -->
   <script>
                  
                  var ctx = document.getElementById("chart-bar").getContext("2d");
                  new Chart(ctx, {
                    
                    type: "bar",
                    data: {
                      
                      labels: ["Sangat Erat", "Erat", "Cukup Erat", "Kurang Erat", "Tidak Sama Sekali"],
                      datasets: [{
                       
                        data: [
                     <?php echo $sangat_erat; ?>,
                     <?php echo $erat; ?>,
                     <?php echo $cukup; ?>,
                     <?php echo $kurang; ?>,
                     <?php echo $tidak; ?>,
                          ],
                          backgroundColor: [
                  'rgba(255, 99, 132, 2.2)',
                  'rgba(255, 159, 64, 3.2)',
                  'rgba(255, 205, 86, 4.2)',
                  'rgba(75, 192, 192, 5.2)',
                  'rgba(54, 162, 235, 4.2)',
                  'rgba(153, 102, 255, 2.2)',
                  'rgba(201, 203, 207, 3.2)'
                ],
               
                  
                  hoverOffset: 4
                  }]
                    },
                    options: {
                      plugins: {
        legend: {
          display: false,
        }
                },
              
          },
        });
                </script>



<!--   Core JS Files   -->
<script src="<?php echo base_url('assets/'); ?>material/assets/js/core/popper.min.js" ></script>
<script src="<?php echo base_url('assets/'); ?>material/assets/js/core/bootstrap.min.js" ></script>

<script src="<?php echo base_url('assets/'); ?>material/assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="<?php echo base_url('assets/'); ?>material/assets/js/plugins/smooth-scrollbar.min.js" ></script>
<script src="<?php echo base_url('assets/'); ?>material/assets/js/plugins/chartjs.min.js"></script>

<!-- Datatables-->
<script src="<?php echo base_url('assets/'); ?>vendor/datatables/jquery-3.5.1.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendor/datatables/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendor/datatables/1.13.4/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {
    $('#example').DataTable();
});
    </script>
    

   



<!--footer-->
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</scrip>






    <!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="<?php echo base_url('assets/'); ?>material/assets/js/material-dashboard.min.js?v=3.0.5"></script>
  </body>

</html>