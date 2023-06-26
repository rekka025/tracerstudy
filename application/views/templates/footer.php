 
<footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a class="font-weight-bold" target="_blank">Badan Pusat Digital</a>
                for a better web.
              </div>
            </div>
        
          </div>
        </div>
      </footer>
    </div>
  </main>
  
  



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
  <script>
    



    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
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