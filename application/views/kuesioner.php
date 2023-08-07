<!DOCTYPE html>
<html lang="en">
  <head>



<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/'); ?>material/assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="<?php echo base_url('assets/'); ?>material/assets/img/favicon.png">

<title>
  
   Material Dashboard 2  by Creative Tim
  

  

  
</title>



<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="<?php echo base_url('assets/'); ?>material/assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="<?php echo base_url('assets/'); ?>material/assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->



<link id="pagestyle" href="<?php echo base_url('assets/'); ?>material/assets/css/material-dashboard.css?v=3.0.5" rel="stylesheet" />

<script src="<?php echo base_url('assets/'); ?>bootstrap.bundle.min.js">
  
</script>


      <style>
div.example {
  background-color: lightgrey;
  padding: 20px;
}

@media screen and (min-width: 601px) {
  div.example {
    font-size: 80px;
  }
}

@media screen and (max-width: 600px) {
  div.example {
    font-size: 30px;
  }
}
</style>
   </head>
   <body>

 
      <div class="mb-5 "></div>
      <div class="container-fluid d-flex justify-content-center">
         <div class="col-xl-8 col-lg-6">
            <div class="card shadow mb-5">
             
               <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Form Tracer Study</h4>
               
                </div>
               
               <div class="card-body col-xl  container  d-flex justify-content-center">
                                                  <form class="user col-lg" method="post" action="<?= base_url('kuesioner/update') ?>">
                                                  <?= $this->session->flashdata('pesan');
                                                  ?>
                                                     <div class="mb-3">
                                                        <h2>Identitas</h2>
                                                     </div>
                                                     <div class="row justify-content-md-center ">
                                                        <div class="col-lg mb-2 ">
                                                           <div>
                                                              <label>Nim</label>
                                                           </div>
                                                           <div>
                                                           <input disabled type="text" class="col-md form-control"  name="nim" value="<?= $user['nim']; ?>">
                                                           </div>
                                                        </div>
                     
                                                        <div class="col-lg mb-2 input-group input-group-outline">
                                                           <div class="col">
                                                              <label >NIK</label>
                                                              <div>
                                                              <input type="text" class="form-control form-control-user" name="nik"  value="<?= $user['nik']; ?>" required onchange="nikerr()">
                                                              <script type="text/javascript">
                              function valueChanged()
                              {
                                 if($('.nik').is(":checked"))   
                                       $(".nikerr").show();
                                 else
                                       $(".nikerr").hide();
                              }
                              </script>
                           <span class="nikerr" style="color:red;"><?php echo form_error('nik'); ?></span>
                                                              </div>
                                                           </div>
                                                        </div>
                                                        
                                                     </div>
                                                     <div class="row justify-content-md-center ">
                                                     <div class="col-lg mb-2">
                                                           <div>
                                                              <label>Nama Mahasiswa</label>
                                                              <div>
                                                              <input disabled type="text" class="col-md form-control" name="nama" value="<?= $user['nama']; ?>">
                                                              </div>
                                                           </div>
                                                        </div>
                                                     </div>
                                                     <div class="row justify-content-md-center ">
                                                     <div class="col-lg mb-2 input-group input-group-outline">
                                                           <div class="col">
                                                              <label>Email</label>
                                                           <div>
                                                           <input hidden type="text" class="col-md"  name="nim" value="<?= $user['nim']; ?>">
                                                              <input  type="text" class="form-control form-control-user"  name="email" value="<?= $user['email']; ?>">                                                  
                                                           </div>
                                                         </div>
                                                        </div>
                                                    
                                                        
                                                        <div class="col-lg mb-2 input-group input-group-outline">
                                                           <div class="col">
                                                              <label>No Hp</label>
                                                              <div>
                                                              <input type="text"  class="form-control form-control-user"  name="hp" value="<?= $user['hp']; ?>">
                                                               
                                                              </div>
                                                           </div>
                                                        </div>
                                                     </div>
                                                     <div class="row justify-content-md-center ">
                                                        <div class="col-lg mb-4">
                                                           <div>
                                                              <label>Angkatan</label>
                                                           </div>
                                                           <div>
                                                              <input type="text" disabled class="col-md form-control" name="angkatan" value="<?= $user['angkatan']; ?>">
                                                           </div>
                                                        </div>
                                                        <div class="col-lg mb-4">
                                                           <div>
                                                              <label>Tahun Lulus</label>
                                                              <div>
                                                              <input type="text" disabled class="col-md form-control" name="tahun_lulus" value="<?= $user['tahun_lulus']; ?>">
                                                              </div>
                                                           </div>
                                                        </div>
                                                        
                                                     </div>
                                                     
                                                     <div class="row justify-content-md-center ">
                                                     <button type="submit" class="btn btn-primary btn-user btn-block">
                                                          EDIT
                                                    </button>
                                                     </div>
                                                  </form>
                  
               </div>
               <div class="card-header">
                  <h3>Kuesioner</h3>
               </div>
               <div class="card-body col-xl mb-3 container  d-flex justify-content-center">
               <div class="form_error">
		  
		</div>
      
      
      
      <form method="post" action="<?= base_url('kuesioner/add') ?>">
                  <input hidden type="text" class="col-md" name="nim" value="<?= $user['nim']; ?>">
                  <div class="ml-4">
                     <ol class="list-decimal">
                        <li class="mb-3">Jelaskan status Anda saat ini? * </li>
                        <div class="mb-3">
                           <div class="form-check " >
                           
                              <input id="1_status"  name="f8" type="radio" class="form-check-input" value="1" onchange="valueChanged()"  <?php echo set_radio('f8', '1'); ?>  >
                              <label for="1_status" class="ml-3  text-gray-700">Bekerja (full time / part time)</label>
                           </div>
                           <div class="form-check">
                              <input id="2_status" name="f8" type="radio" class="form-check-input" value="2" onchange="valueChanged()" <?php echo set_radio('f8', '2'); ?>>
                              <label for="2_status" class="ml-3  text-gray-700">Belum memungkinkan bekerja </label>
                           </div>
                           <div class="form-check">
                              <input id="3_status" name="f8" type="radio" class="form-check-input" value="3" onchange="valueChanged()"<?php echo set_radio('f8', '3'); ?>>
                              <label for="3_status" class="ml-3 text-gray-700">Wiraswasta </label>
                           </div>
                           <div class="form-check">
                              <input id="4_status" name="f8" type="radio" class="form-check-input" value="4" onchange="valueChanged()"<?php echo set_radio('f8', '4'); ?>>
                              <label for="4_status" class="ml-3  text-gray-700">Melanjutkan Pendidikan </label>
                           </div>
                           <div class="form-check ">
                              <input id="5_status" name="f8" type="radio" class="form-check-input " value="5" onchange="valueChanged()"<?php echo set_radio('f8', '5'); ?>>
                              <label for="5_status" class=" ml-3  text-gray-700"   >Tidak kerja tetapi sedang mencari kerja</label>     
                             
                           </div>
                     
                              <script type="text/javascript">
                              function valueChanged()
                              {
                                 if($('.f8').is(":checked"))   
                                       $(".error").show();
                                 else
                                       $(".error").hide();
                              }
                              </script>
                           <span class="error" style="color:red;"><?php echo form_error('f8'); ?></span>
                        </div>
                        <li class="mb-3">Apakah Anda telah mendapatkan pekerjaan &lt;= 6 bulan / termasuk bekerja sebelum lulus? (f504)</li>
                        <div class="mb-3 ">
                           <div>
                              <div class="form-check">
                                 <input id="pekerjaan-ya" name="f504" type="radio" class="form-check-input" value="1" onchange="f504err()" <?php echo set_radio('f504', '1'); ?>>
                                 <label for="pekerjaan-ya" class="ml-3 block text-sm font-medium text-gray-700">Ya </label>
                              </div>
                              <div class="form-check">
                                 <input id="pekerjaan-tidak" name="f504" type="radio" class="form-check-input" value="0" onchange="f504err()" <?php echo set_radio('f504', '2'); ?>>
                                 <label for="pekerjaan-tidak" class="ml-3 block text-sm font-medium text-gray-700">Tidak </label>
                              </div>
                              <script type="text/javascript">
                              function f504err()
                              {
                                 if($('.f504').is(":checked"))   
                                       $(".f504err").show();
                                 else
                                       $(".f504err").hide();
                              }
                              </script>
                           <span class="f504err" style="color:red;"> <?php echo form_error('f504'); ?></span>
                             
                           </div>
               
                           <div class=" mt-2">
                              <div class="col-span-6 sm:col-span-3 ">
                                 <label for="getJob" class="block text-sm font-medium text-gray-700">Dalam berapa bulan Anda mendapatkan pekerjaan? </label><br>
                                 <div class="input-group input-group-outline">
                                 <input type="number" name="f502" id="getJob" class="form-control col-9" onchange="f502err()" value="<?php echo set_value('f502'); ?>" ></div>
                                 <script type="text/javascript">
                              function f502err()
                              {
                                 if($('.f502').is(":checked"))   
                                       $(".f502err").show();
                                 else
                                       $(".f502err").hide();
                              }
                              </script>
                           <span class="f502err"  style="color:red;"> <?php echo form_error('f502'); ?></span>
                              </div>
                              <div class="col-span-6 mt-2 sm:col-span-3">
                                 <label for="averageSalary" class="block text-sm font-medium text-gray-700">Berapa rata-rata pendapatan Anda per bulan? (take home pay)? </label><br>
                                 <div class="input-group input-group-outline">
                                 <input type="number" name="f505" id="getJob" class="form-control col-9" onchange="f505err()" value="<?php echo set_value('f505'); ?>"  ></div>
                                 <script type="text/javascript">
                              function f505err()
                              {
                                 if($('.f505').is(":checked"))   
                                       $(".f505err").show();
                                 else
                                       $(".f505err").hide();
                              }
                              </script>
                           <span class="f505err"  style="color:red;"> <?php echo form_error('f505'); ?></span>
                              </div>
                           </div>
                        </div>
                       
               <li class="mb-3">Dimana lokasi tempat Anda bekerja? </li>
                <div class="mb-3">
                  <div >
                    <div class=" mb-3">
                      <label for="nim" class="block text-sm font-medium text-gray-700">Provinsi</label>
                      <div class="input-group input-group-outline">
                      <select name="provinsi" id="provinsi" class="form-control col-9">
                        <option value="0">-PILIH-</option>
                           <?php foreach ($provinsi as $prov): ?>
                            <option value="<?= $prov->id_prov ?>"><?= $prov->nama_prov ?></option>
                           <?php endforeach?>
                      </select>
                      
                     </div>
                   </div>
                   <div class="col-span-6 sm:col-span-3">
                        <div>
                        <label for="nim" class="block text-sm font-medium text-gray-700">Kota/Kabupaten</label>
                        <div class="input-group input-group-outline">
                        <select name="kabkota" id="kabkota" class="form-control col-9">
                        
                        <option value="0">-PILIH-</option>
                        </select>       </div>               
                        </div>
                     </div>
                  </div>
               </div>                       
                <li class="mb-3">Apa jenis perusahaan/intansi/institusi tempat anda bekerja sekarang?</li>
                        <div class="space-y-4 mb-4">
                        <div class="form-check">
                              <input id="1_typeCompany" name="f1101" type="radio" class="form-check-input" value="1" onchange="f1101err()"   <?php echo set_radio('f1101', '1'); ?>>
                              <label for="1_typeCompany" class="ml-3 block text-sm font-medium text-gray-700">Intansi pemerintah </label>
                           </div>
                           <div class="form-check">
                              <input id="6_typeCompany" name="f1101" type="radio" class="form-check-input" value="6" onchange="f1101err()"  <?php echo set_radio('f504', '6'); ?>>
                              <label for="6_typeCompany" class="ml-3 text-gray-700">BUMN/BUMD </label>
                           </div>
                           <div class="form-check">
                              <input id="7_typeCompany" name="f1101" type="radio" class="form-check-input" value="7" onchange="f1101err()"  <?php echo set_radio('f504', '7'); ?>>
                              <label for="7_typeCompany" class="ml-3  text-gray-700">Institusi/Organisasi Multilateral </label>
                           </div>
                           <div class="form-check">
                              <input id="2_typeCompany" name="f1101" type="radio" class="form-check-input" value="2" onchange="f1101err()"  <?php echo set_radio('f504', '2'); ?>>
                              <label for="2_typeCompany" class="ml-3  text-gray-700">Organisasi non-profit/Lembaga Swadaya Masyarakat </label>
                           </div>
                            <div class="form-check">
                              <input id="3_typeCompany" name="f1101" type="radio" class="form-check-input" value="3" onchange="f1101err()"  <?php echo set_radio('f504', '3'); ?>>
                              <label for="3_typeCompany" class="ml-3 text-gray-700">Perusahaan swasta </label>
                           </div>
                            <div class="form-check">
                              <input id="4_typeCompany" name="f1101" type="radio" class="form-check-input" value="4" onchange="f1101err()"  <?php echo set_radio('f504', '4'); ?>>
                              <label for="4_typeCompany" class="ml-3  text-gray-700">Wiraswasta/perusahaan sendiri </label>
                           </div>
                           <div class="form-check">
                              <input id="5_typeCompany" name="f1101" type="radio" class="form-check-input" value="5" onchange="f1101err()"  <?php echo set_radio('f504', '5'); ?>>
                              <label for="5_typeCompany" class="ml-3  text-gray-700">Lainnya, tuliskan </label>
                           </div>
                           <div class="col-span-6 sm:col-span-3">
                              <div class="input-group input-group-outline">
                              <input type="text" name="f1102" id="f1102" placeholder="f1101" class="form-control col-5" >
                              </div>
                           <script type="text/javascript">
                              function f1101err()
                              {
                                 if($('.f1101').is(":checked"))   
                                       $(".f1101err").show();
                                 else
                                       $(".f1101err").hide();
                              }
                              </script>
                              <span class="f1101err"  style="color:red;"> <?php echo form_error('f1101'); ?></span>
                             
                           
                           </div>
                         
                        <li class="mb-4">Apa nama perusahaan/kantor tempat Anda bekerja?</li>
                        <div class="mb-4">
                           <div class="grid grid-cols-6 gap-6 mt-4">
                              <div class="col-span-6 sm:col-span-3">
                              <div class="input-group input-group-outline">
                                 <input type="text" name="f5b" id="f5b" class="form-control col-9"></div>
                              </div>
                           </div>
                        </div>
                        <div id="Status3" class="desc">
                        <li class="mb-3">Bila berwiraswasta, apa posisi/jabatan Anda saat ini? <br><font size="2"><i>(Lewati Jika Tidak Berwiraswasta)</i></font> </li>
                        <div class="mb-4">
                           <div class="grid grid-cols-6 gap-6 mt-4">
                              <div class="col-span-6 sm:col-span-3">
                                 <div class="input-group input-group-outline">
                                 <select id="f5c" name="f5c" class=" form-control col-9" >
                                    <option>Silahkan Pilih</option>
                                    <option>Founder </option>
                                    <option>Co-Founder </option>
                                    <option>Staff </option>
                                    <option>Freelance/Kerja Lepas </option>
                                 </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                           </div>
                        <li class="mb-4">Apa tingkat tempat kerja Anda? </li>
                        <div class="mb-4">
                           <div class="grid grid-cols-6 gap-6 mt-4">
                              <div class="col-span-6 sm:col-span-3">
                              <div class="input-group input-group-outline">
                                 <select id="f5d" name="f5d" class="form-control col-9">
                                    <option>Silahkan Pilih</option>
                                    <option value="1">Lokal/Wilayah/Wiraswasta tidak berbadan hukum </option>
                                    <option value="2">Nasional/Wiraswasta berbadan hukum </option>
                                    <option value="3">Multinasional/Internasional </option>
                                 </select>
                              </div>
                              </div>
                           </div>
                        </div>
                        
                        <li class="mb-4">Apakah Anda Melanjutkan Pendidikan ?</li>
                        <div class="mb-3 ">
                           <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                              <div class="form-check">
                                 <input name="s2"  type="radio" value="1" onchange="s2err()"  <?php echo set_radio('s2', '1'); ?>>
                                 <label for="pekerjaan-ya" class="ml-3 block text-sm font-medium text-gray-700">Ya </label>
                              </div>
                              <div class="form-check">
                                 <input name="s2" type="radio" value="2" onchange="s2err()"  <?php echo set_radio('s2', '2'); ?>>
                                 <label for="pekerjaan-tidak" class="ml-3 block text-sm font-medium text-gray-700">Tidak </label>
                              </div>
                              <script type="text/javascript">
                              function s2err()
                              {
                                 if($('.s2').is(":checked"))   
                                       $(".s2err").show();
                                 else
                                       $(".s2err").hide();
                              }
                              </script>
                              <span class="s2err"  style="color:red;">Silahkan dipilih</span>
                             
                           
                           </div>
                        </div>
                       
                        <div id="1" class="melanjutkan">
                        <li >Pertanyaan studi lanjut <br><font size="2"><i>(Lewati Jika Tidak Melanjutkan Pendidikan)</i></font> </li>
                        <div class="row mb-4 " >
                           <div class="grid grid-cols-5 col gap-6 mt-4 ">
                              <div class="col-span-9 sm:col-span-3 mb-3">
                              
                                 <label for="country" class="block text-sm font-medium text-gray-700">Sumber biaya </label>
                                 <div class="input-group input-group-outline">
                                 <select id="f18a" name="f18a" class="form-control col-9">
                                    <option>Silahkan Pilih</option>
                                    <option>Biaya Sendiri </option>
                                    <option>Beasiswa </option>
                                 </select>
                              </div>
                              </div>
                              <div class="col-span-9 sm:col-span-3">
                                 <div>
                                
                                    <label for="nim" class="block text-sm font-medium text-gray-700">Perguruan Tinggi </label>
                                    <div class="input-group input-group-outline">
                                    <input type="text"  class="form-control col">
                           </div>
                                 </div>
                              </div>
                           </div>
                           <div class="grid grid-cols-5 col gap-6 mt-4 ">
                              <div class="col-span-9 sm:col-span-3 mb-3">
                              
                                 <div>
                                 
                                    <label for="nim" class="block text-sm font-medium text-gray-700">Program Studi</label>
                                    <div class="input-group input-group-outline mb-3">
                                    <input type="text"  class="form-control col">
                           
                                 </div>
                              </div>
                              <div class="col-span-9 sm:col-span-3">
                                 
                                 <label for="f18d" class="block text-sm font-medium text-gray-700">Tanggal Masuk </label>
                                 <div class="input-group input-group-outline">
                                 <input type="date" name="f18d" id="f18d" class="form-control col">
                                 </div>
                              </div>
                           </div>
                        </div>
                           </div>
                        <li class="mb-3">Sebutkan sumberdana dalam pembiayaan kuliah? * (bukan ketika Studi Lanjut)  </li>
                        <div class="space-y-4 mb-4">
                        <div class="form-check">
                              <input id="4_status" name="f8" type="radio" class="form-check-input" value="4" onchange="f1201err()"   <?php echo set_radio('f1201', '4'); ?>>
                              <label for="4_status" class="ml-3  text-gray-700">Melanjutkan Pendidikan </label>
                           </div>
                           <div class="form-check">
                              <input id="1_sumberDana" name="f1201" type="radio" class="form-check-input" value="1"  onchange="f1201err()"   <?php echo set_radio('f1201', '1'); ?>>
                              <label for="1_sumberDana" class="ml-3 block text-sm font-medium text-gray-700">Biaya Sendiri/Keluarga </label>
                           </div>
                           <div class="form-check">
                              <input id="2_sumberDana" name="f1201" type="radio" class="form-check-input" value="2"  onchange="f1201err()"   <?php echo set_radio('f1201', '2'); ?>>
                              <label for="2_sumberDana" class="ml-3 block text-sm font-medium text-gray-700">Beasiswa ADIK </label>
                           </div>
                           <div class="form-check">
                              <input id="3_sumberDana" name="f1201" type="radio" class="form-check-input" value="3"  onchange="f1201err()"   <?php echo set_radio('f1201', '3'); ?>>
                              <label for="3_sumberDana" class="ml-3 block text-sm font-medium text-gray-700">Beasiswa BIDIKMISI </label>
                           </div>
                           <div class="form-check">
                              <input id="4_sumberDana" name="f1201" type="radio" class="form-check-input" value="4" onchange="f1201err()"   <?php echo set_radio('f1201', '4'); ?>>
                              <label for="4_sumberDana" class="ml-3 block text-sm font-medium text-gray-700">Beasiswa PPA </label>
                           </div>
                           <div class="form-check">
                              <input id="5_sumberDana" name="f1201" type="radio" class="form-check-input" value="5" onchange="f1201err()"   <?php echo set_radio('f1201', '5'); ?>>
                              <label for="5_sumberDana" class="ml-3 block text-sm font-medium text-gray-700">Beasiswa AFIRMASI </label>
                           </div>
                           <div class="form-check">
                              <input id="6_sumberDana" name="f1201" type="radio" class="form-check-input" value="6" onchange="f1201err()"   <?php echo set_radio('f1201', '6'); ?>>
                              <label for="6_sumberDana" class="ml-3 block text-sm font-medium text-gray-700">Beasiswa Perusahaan/Swasta </label>
                           </div>
                         
                          
                           <script type="text/javascript">
                              function f1201err()
                              {
                                 if($('.f1201'&&'f1202').is(":checked"))   
                                       $(".f1201err").show();
                                 else
                                       $(".f1201err").hide();
                              }
                              </script>
                              <span class="f1201err"  style="color:red;"> <?php echo form_error('f1201'); ?></span>
                             
                           
                           
                        </div>
                        <li class="mb-3">Seberapa erat hubungan bidang studi dengan pekerjaan Anda? * (f14)</li>
                        <div class="space-y-4 mb-4">
                           <div class="form-check">
                              <input id="1_hubunganBidangStudi" name="f14" type="radio" class="form-check-input" value="1" onchange="f14err()"   <?php echo set_radio('f14', '1'); ?>>
                              <label for="1_hubunganBidangStudi" class="ml-3 block text-sm font-medium text-gray-700">Sangat Erat </label>
                           </div>
                           <div class="form-check">
                              <input id="2_hubunganBidangStudi" name="f14" type="radio" class="form-check-input" value="2" onchange="f14err()"   <?php echo set_radio('f14', '2'); ?>>
                              <label for="2_hubunganBidangStudi" class="ml-3 block text-sm font-medium text-gray-700">Erat </label>
                           </div>
                           <div class="form-check">
                              <input id="3_hubunganBidangStudi" name="f14" type="radio" class="form-check-input" value="3" onchange="f14err()"   <?php echo set_radio('f14', '3'); ?>>
                              <label for="3_hubunganBidangStudi" class="ml-3 block text-sm font-medium text-gray-700">Cukup Erat </label>
                           </div>
                           <div class="form-check">
                              <input id="4_hubunganBidangStudi" name="f14" type="radio" class="form-check-input" value="4" onchange="f14err()"   <?php echo set_radio('f14', '4'); ?>>
                              <label for="4_hubunganBidangStudi" class="ml-3 block text-sm font-medium text-gray-700">Kurang Erat </label>
                           </div>
                           <div class="form-check">
                              <input id="5_hubunganBidangStudi" name="f14" type="radio" class="form-check-input" value="5" onchange="f14err()"   <?php echo set_radio('f14', '5'); ?>>
                              <label for="5_hubunganBidangStudi" class="ml-3 block text-sm font-medium text-gray-700">Tidak Sama Sekali </label>
                           </div>
                           <script type="text/javascript">
                              function f14err()
                              {
                                 if($('.f14').is(":checked"))   
                                       $(".f14err").show();
                                 else
                                       $(".f14err").hide();
                              }
                              </script>
                              <span class="f14err"  style="color:red;"> <?php echo form_error('f14'); ?></span>
                             
                        </div>
                        <li class="mb-3">Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini? * (f15)</li>
                        <div class="space-y-4 mb-4">
                           <div class="form-check">
                              <input id="1_kesesuaianTingkatPendidikan" name="f15" type="radio" class="form-check-input" value="1" onchange="f15err()"   <?php echo set_radio('f15', '1'); ?>>
                              <label for="1_kesesuaianTingkatPendidikan" class="ml-3 block text-sm font-medium text-gray-700">Setingkat Lebih Tinggi </label>
                           </div>
                           <div class="form-check">
                              <input id="2_kesesuaianTingkatPendidikan" name="f15" type="radio" class="form-check-input" value="2"  onchange="f15err()"   <?php echo set_radio('f15', '2'); ?>>
                              <label for="2_kesesuaianTingkatPendidikan" class="ml-3 block text-sm font-medium text-gray-700">Tingkat yang Sama </label>
                           </div>
                           <div class="form-check">
                              <input id="3_kesesuaianTingkatPendidikan" name="f15" type="radio" class="form-check-input" value="3" onchange="f15err()"   <?php echo set_radio('f15', '3'); ?>>
                              <label for="3_kesesuaianTingkatPendidikan" class="ml-3 block text-sm font-medium text-gray-700">Setingkat Lebih Rendah </label>
                           </div>
                           <div class="form-check">
                              <input id="4_kesesuaianTingkatPendidikan" name="f15" type="radio" class="form-check-input" value="4" onchange="f15err()"   <?php echo set_radio('f15', '4'); ?>>
                              <label for="4_kesesuaianTingkatPendidikan" class="ml-3 block text-sm font-medium text-gray-700">Tidak Perlu Pendidikan Tinggi </label>
                           </div>
                           <script type="text/javascript">
                              function f15err()
                              {
                                 if($('.f14').is(":checked"))   
                                       $(".f15err").show();
                                 else
                                       $(".f15err").hide();
                              }
                              </script>
                              <span class="f15err"  style="color:red;"> <?php echo form_error('f15'); ?></span>
                             
                        </div>
                        <li class="mb-3">Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda : kuasai? (A) Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan? (B) *</li>
                        <div class="space-y-4 mb-4">
                           <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                           
                              <div class="table-responsive">
                           <table role="radiogroup" aria-labelledby="label_5 sublabel_input_5_description" cellpadding="4" cellspacing="0" class="form-scale-table" data-component="scale">
                                 
                           <tr>
                                    <td colspan="7">A</td>
                                    <td colspan="7" >B</td>
                                 </tr>
                                 <tr>
                                    <td colspan="2" >Sangat Rendah</td>
                                    <td >            </td>
                                    <td colspan="2">Sangat Tinggi</td>
                                    <td ></td>
                                    <td colspan="2" >Sangat Rendah</td>
                                     <td ></td>
                                    <td colspan="2" >Sangat Tinggi</td>
                                 </tr>
                                 <tr>
                                    
                                 <th style="text-align:center"><label for="input_5_1">1</label></th>
                                 <th style="text-align:center"><label for="input_5_2">2</label></th>
                                 <th style="text-align:center"><label for="input_5_3">3</label></th>
                                 <th style="text-align:center"><label for="input_5_4">4</label></th>
                                 <th style="text-align:center"><label for="input_5_5">5</label></th>
                                    <th ></th>
                                 <th style="text-align:center"><label for="input_5_1">1</label></th>
                                 <th style="text-align:center"><label for="input_5_2">2</label></th>
                                 <th style="text-align:center"><label for="input_5_3">3</label></th>
                                 <th style="text-align:center"><label for="input_5_4">4</label></th>
                                 <th style="text-align:center"><label for="input_5_5">5</label></th>
                                 </tr>
                                 <tr>
                                 
                                    <td style="text-align:center">
                                       <input id="0_etika" name="f1761" type="radio"  value="1" onchange="f1761err()"   <?php echo set_radio('f1761', '1'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="1_etika" name="f1761" type="radio"  value="2" onchange="f1761err()"   <?php echo set_radio('f1761', '2'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="2_etika" name="f1761" type="radio"   value="3" onchange="f1761err()"   <?php echo set_radio('f1761', '3'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="3_etika" name="f1761" type="radio"  value="4" onchange="f1761err()"   <?php echo set_radio('f1761', '4'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="4_etika" name="f1761" type="radio" value="5" onchange="f1761err()"   <?php echo set_radio('f1761', '5'); ?>>
                                    </td>
                                    <td class="text-center  ">Etika  </span>
                                   
                                 </td>
                                 
                              
                                    <td style="text-align:center">
                                       <input id="0_etika2" name="f1762" type="radio"  value="1" onchange="f1762err()"   <?php echo set_radio('f1762', '1'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="1_etika2" name="f1762" type="radio"  value="2" onchange="f1762err()"   <?php echo set_radio('f1762', '2'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="2_etika2" name="f1762" type="radio"  value="3" onchange="f1762err()"   <?php echo set_radio('f1762', '3'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="3_etika2" name="f1762" type="radio"  value="4" onchange="f1762err()"   <?php echo set_radio('f1762', '4'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="4_etika2" name="f1762" type="radio"  value="5" onchange="f1762err()"   <?php echo set_radio('f1762', '5'); ?>>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td style="text-align:center">
                                       <input id="0_bidangIlmu" name="f1763" type="radio"  value="1" onchange="f1763err()"   <?php echo set_radio('f1763', '1'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="1_bidangIlmu" name="f1763" type="radio"  value="2" onchange="f1763err()"   <?php echo set_radio('f1763', '2'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="2_bidangIlmu" name="f1763" type="radio"  value="3" onchange="f1763err()"   <?php echo set_radio('f1763', '3'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="3_bidangIlmu" name="f1763" type="radio"  value="4" onchange="f1763err()"   <?php echo set_radio('f1763', '4'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="4_bidangIlmu" name="f1763" type="radio"  value="5" onchange="f1763err()"   <?php echo set_radio('f1763', '5'); ?>>
                                    </td>
                                    <td class="col- text-center">Keahlian berdasarkan bidang ilmu  </td>
                                    <td style="text-align:center">
                                       <input id="0_bidangIlmu2" name="f1764" type="radio"  value="1" onchange="f1764err()"   <?php echo set_radio('f1764', '1'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="1_bidangIlmu2" name="f1764" type="radio"  value="2" onchange="f1764err()"   <?php echo set_radio('f1764', '2'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="2_bidangIlmu2" name="f1764" type="radio"  value="3" onchange="f1764err()"   <?php echo set_radio('f1764', '3'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="3_bidangIlmu2" name="f1764" type="radio"  value="4" onchange="f1764err()"   <?php echo set_radio('f1764', '4'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="4_bidangIlmu2" name="f1764" type="radio"  value="5" onchange="f1764err()"   <?php echo set_radio('f1764', '5'); ?>>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td style="text-align:center">
                                       <input id="0_bahasaInggris" name="f1765" type="radio"  value="1" onchange="f1765err()"   <?php echo set_radio('f1765', '1'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="1_bahasaInggris" name="f1765" type="radio"  value="2" onchange="f1765err()"   <?php echo set_radio('f1765', '2'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="2_bahasaInggris" name="f1765" type="radio"  value="3" onchange="f1765err()"   <?php echo set_radio('f1765', '3'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="3_bahasaInggris" name="f1765" type="radio"  value="4" onchange="f1765err()"   <?php echo set_radio('f1765', '4'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="4_bahasaInggris" name="f1765" type="radio"  value="5" onchange="f1765err()"   <?php echo set_radio('f1765', '5'); ?>>
                                    </td>
                                    <td class="text-center">Bahasa Inggris</td>
                                    <td style="text-align:center">
                                       <input id="0_bahasaInggris2" name="f1766" type="radio"  value="1" onchange="f1766err()"   <?php echo set_radio('f1766', '1'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="1_bahasaInggris2" name="f1766" type="radio"  value="2" onchange="f1766err()"   <?php echo set_radio('f1766', '2'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="2_bahasaInggris2" name="f1766" type="radio"  value="3" onchange="f1766err()"   <?php echo set_radio('f1766', '3'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="3_bahasaInggris2" name="f1766" type="radio"  value="4" onchange="f1766err()"   <?php echo set_radio('f1766', '4'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="4_bahasaInggris2" name="f1766" type="radio"  value="5" onchange="f1766err()"   <?php echo set_radio('f1766', '5'); ?>>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td style="text-align:center">
                                       <input id="0_teknologiInformasi" name="f1767" type="radio"  value="1" onchange="f1767err()"   <?php echo set_radio('f1767', '1'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="1_teknologiInformasi" name="f1767" type="radio"  value="2" onchange="f1767err()"   <?php echo set_radio('f1767', '2'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="2_teknologiInformasi" name="f1767" type="radio"  value="3" onchange="f1767err()"   <?php echo set_radio('f1767', '3'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="3_teknologiInformasi" name="f1767" type="radio"  value="4" onchange="f1767err()"   <?php echo set_radio('f1767', '4'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="4_teknologiInformasi" name="f1767" type="radio"  value="5" onchange="f1767err()"   <?php echo set_radio('f1767', '5'); ?>>
                                    </td>
                                    <td class="text-center">Penggunaan Teknologi Informasi</td>
                                    <td style="text-align:center">
                                       <input id="0_teknologiInformasi2" name="f1768" type="radio"  value="1" onchange="f1768err()"   <?php echo set_radio('f1768', '1'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="1_teknologiInformasi2" name="f1768" type="radio"  value="2" onchange="f1768err()"   <?php echo set_radio('f1768', '2'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="2_teknologiInformasi2" name="f1768" type="radio"  value="3" onchange="f1768err()"   <?php echo set_radio('f1768', '3'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="3_teknologiInformasi2" name="f1768" type="radio"  value="4" onchange="f1768err()"   <?php echo set_radio('f1768', '4'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="4_teknologiInformasi2" name="f1768" type="radio"  value="5" onchange="f1768err()"   <?php echo set_radio('f1768', '5'); ?>>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td style="text-align:center">
                                       <input id="0_komunikasi" name="f1769" type="radio"  value="1" onchange="f1769err()"   <?php echo set_radio('f1769', '1'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="1_komunikasi" name="f1769" type="radio"  value="2" onchange="f1769err()"   <?php echo set_radio('f1769', '2'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="2_komunikasi" name="f1769" type="radio"  value="3" onchange="f1769err()"   <?php echo set_radio('f1769', '3'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="3_komunikasi" name="f1769" type="radio"  value="4" onchange="f1769err()"   <?php echo set_radio('f1769', '4'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="4_komunikasi" name="f1769" type="radio"  value="5" onchange="f1769err()"   <?php echo set_radio('f1769', '5'); ?>>
                                    </td>
                                    <td class=" text-center"  > Komunikasi </td>
                                    <td style="text-align:center">
                                       <input id="0_komunikasi2" name="f1770" type="radio"  value="1" onchange="f1770err()"   <?php echo set_radio('f1770', '1'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="1_komunikasi2" name="f1770" type="radio"  value="2" onchange="f1770err()"   <?php echo set_radio('f1770', '2'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="2_komunikasi2" name="f1770" type="radio"  value="3" onchange="f1770err()"   <?php echo set_radio('f1770', '3'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="3_komunikasi2" name="f1770" type="radio"  value="4" onchange="f1770err()"   <?php echo set_radio('f1770', '4'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="4_komunikasi2" name="f1770" type="radio"  value="5" onchange="f1770err()"   <?php echo set_radio('f1770', '5'); ?>>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td style="text-align:center">
                                       <input id="0_teamWork" name="f1771" type="radio"  value="1" onchange="f1771err()"   <?php echo set_radio('f1771', '1'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="1_teamWork" name="f1771" type="radio"  value="2" onchange="f1771err()"   <?php echo set_radio('f1771', '2'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="2_teamWork" name="f1771" type="radio"  value="3" onchange="f1771err()"   <?php echo set_radio('f1771', '3'); ?>>
                                    </td>
                                    <td style="text-align:center">
                                       <input id="3_teamWork" name="f1771" type="radio"  value="4" onchange="f1771err()"   <?php echo set_radio('f1771', '4'); ?>>
                                    </td>
                                    <td style="text-align:center"><input id="4_teamWork" name="f1771" type="radio"  value="5" onchange="f1771err()"   <?php echo set_radio('f1771', '5'); ?>></td>
                                    <td class=" text-center"> Kerja sama tim </td>
                                    <td style="text-align:center"><input id="0_teamWork2" name="f1772" type="radio"  value="1" onchange="f1772err()"   <?php echo set_radio('f1772', '1'); ?>></td>
                                    <td style="text-align:center"><input id="1_teamWork2" name="f1772" type="radio"  value="2" onchange="f1772err()"   <?php echo set_radio('f1772', '2'); ?>></td>
                                    <td style="text-align:center"><input id="2_teamWork2" name="f1772" type="radio"  value="3" onchange="f1772err()"   <?php echo set_radio('f1772', '3'); ?>></td>
                                    <td style="text-align:center"><input id="3_teamWork2" name="f1772" type="radio"  value="4" onchange="f1772err()"   <?php echo set_radio('f1772', '4'); ?>></td>
                                    <td style="text-align:center"><input id="4_teamWork2" name="f1772" type="radio"  value="5" onchange="f1772err()"   <?php echo set_radio('f1772', '5'); ?>></td>
                                 </tr>
                                 <tr>
                                    <td style="text-align:center"><input id="0_pengembangan" name="f1773" type="radio"  value="1" onchange="f1773err()"   <?php echo set_radio('f1773', '1'); ?>></td>
                                    <td style="text-align:center"><input id="1_pengembangan" name="f1773" type="radio"  value="2" onchange="f1773err()"   <?php echo set_radio('f1773', '2'); ?>></td>
                                    <td style="text-align:center"><input id="2_pengembangan" name="f1773" type="radio"  value="3" onchange="f1773err()"   <?php echo set_radio('f1773', '3'); ?>></td>
                                    <td style="text-align:center"><input id="3_pengembangan" name="f1773" type="radio"  value="4" onchange="f1773err()"   <?php echo set_radio('f1773', '4'); ?>></td>
                                    <td style="text-align:center"><input id="4_pengembangan" name="f1773" type="radio"  value="5" onchange="f1773err()"   <?php echo set_radio('f1773', '5'); ?>></td>
                                    <td class="text-center"> Pengembangan </td>
                                    <td style="text-align:center"><input id="0_pengembangan2" name="f1774" type="radio"  value="1" onchange="f1774err()"   <?php echo set_radio('f1774', '1'); ?>></td>
                                    <td style="text-align:center"><input id="1_pengembangan2" name="f1774" type="radio"  value="2" onchange="f1774err()"   <?php echo set_radio('f1774', '2'); ?>></td>
                                    <td style="text-align:center"><input id="2_pengembangan2" name="f1774" type="radio"  value="3" onchange="f1774err()"   <?php echo set_radio('f1774', '3'); ?>></td>
                                    <td style="text-align:center"><input id="3_pengembangan2" name="f1774" type="radio"  value="4" onchange="f1774err()"   <?php echo set_radio('f1774', '4'); ?>></td>
                                    <td style="text-align:center"><input id="4_pengembangan2" name="f1774" type="radio"  value="5" onchange="f1774err()"   <?php echo set_radio('f1774', '5'); ?>></td>
                                 </tr>
                            
                              </table>
                              </div>
                           </div>
                           <table>
                              <tr>
                                    <td class="col-md-4" style="text-align:center"><span class="f1761err"  style="color:red;"> <?php echo form_error('f1761'); ?>
                                    </td>
                                    <td class="col-md-4" style="text-align:center"></td>
                                    <td><span class="f1762err"  style="color:red;"> <?php echo form_error('f1762'); ?></span></td>
                              </tr>
                           </table>
                           
                          
                        
                           <script type="text/javascript">
                              function f1761err()
                              {
                                 if($('.f1761').is(":checked"))   
                                       $(".f1761err").show();
                                 else   
                                       $(".f1761err").hide();   
                              }
                              </script>
                                <script type="text/javascript">
                              function f1762err()
                              {
                                 if($('.f1762').is(":checked"))   
                                       $(".f1762err").show();
                                 else
                                       $(".f1762err").hide();
                              }
                              </script>
                              
                            
                             
                        </div>
                     
                  <li class="mb-4">Menurut anda seberapa besar penekanan pada metode pembelajaran dibawah ini dilaksanakan di program studi anda?</li>
                
                        <div class="row grid grid-cols-2 lg:grid-cols-3 gap-y-4">
                           <div class="col">
                              <label class="block text-sm font-medium text-gray-700 mb-2">Perkuliahan (f21)</label>
                              <div class="space-y-4 mb-4">
                                 <div class="form-check">
                                    <input id="1_perkuliahan" name="f21" type="radio" class="form-check-input" value="1" onchange="f21err()"   <?php echo set_radio('f21', '1'); ?>>
                                    <label for="1_perkuliahan" class="ml-3 block text-sm font-medium text-gray-700">Sangat Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="2_perkuliahan" name="f21" type="radio" class="form-check-input" value="2" onchange="f21err()"   <?php echo set_radio('f21', '2'); ?>>
                                    <label for="2_perkuliahan" class="ml-3 block text-sm font-medium text-gray-700">Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="3_perkuliahan" name="f21" type="radio" class="form-check-input" value="3" onchange="f21err()"   <?php echo set_radio('f21', '3'); ?>>
                                    <label for="3_perkuliahan" class="ml-3 block text-sm font-medium text-gray-700">Cukup Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="4_perkuliahan" name="f21" type="radio" class="form-check-input" value="4" onchange="f21err()"   <?php echo set_radio('f21', '4'); ?>>
                                    <label for="4_perkuliahan" class="ml-3 block text-sm font-medium text-gray-700">Kurang Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="5_perkuliahan" name="f21" type="radio" class="form-check-input" value="5" onchange="f21err()"   <?php echo set_radio('f21', '5'); ?>>
                                    <label for="5_perkuliahan" class="ml-3 block text-sm font-medium text-gray-700">Tidak Sama Sekali </label>
                                 </div>
                                 <span class="f21err"  style="color:red;"> <?php echo form_error('f21'); ?></span>
                              </div>
                           </div>
                           <script type="text/javascript">
                              function f21err()
                              {
                                 if($('.f21').is(":checked"))   
                                       $(".f21err").show();
                                 else   
                                       $(".f21err").hide();   
                              }
                              </script>
                           <div class="col">
                              <label class="block text-sm font-medium text-gray-700 mb-2">Demonstrasi (f22)</label>
                              <div class="space-y-4 mb-4">
                                 <div class="form-check">
                                    <input id="1_demontrasi" name="f22" type="radio" class="form-check-input" value="1"  onchange="f22err()"   <?php echo set_radio('f22', '1'); ?>>
                                    <label for="1_demontrasi" class="ml-3 block text-sm font-medium text-gray-700">Sangat Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="2_demontrasi" name="f22" type="radio" class="form-check-input" value="2" onchange="f22err()"   <?php echo set_radio('f22', '2'); ?>>
                                    <label for="2_demontrasi" class="ml-3 block text-sm font-medium text-gray-700">Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="3_demontrasi" name="f22" type="radio" class="form-check-input" value="3" onchange="f22err()"   <?php echo set_radio('f22', '3'); ?>>
                                    <label for="3_demontrasi" class="ml-3 block text-sm font-medium text-gray-700">Cukup Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="4_demontrasi" name="f22" type="radio" class="form-check-input" value="4" onchange="f22err()"   <?php echo set_radio('f22', '4'); ?>>
                                    <label for="4_demontrasi" class="ml-3 block text-sm font-medium text-gray-700">Kurang Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="5_demontrasi" name="f22" type="radio" class="form-check-input" value="5" onchange="f22err()"   <?php echo set_radio('f22', '5'); ?>>
                                    <label for="5_demontrasi" class="ml-3 block text-sm font-medium text-gray-700">Tidak Sama Sekali </label>
                                 </div>
                                 <span class="f22err"  style="color:red;"> <?php echo form_error('f22'); ?></span>
                              </div>
                           </div>
                           <script type="text/javascript">
                           function f22err()
                           {
                              if($('.f22').is(":checked"))   
                                    $(".f22err").show();
                              else   
                                    $(".f22err").hide();   
                           }
                           </script>
                           <div class="col">
                              <label class="block text-sm font-medium text-gray-700 mb-2">Partisipasi dalam proyek riset (f23)</label>
                              <div class="space-y-4 mb-4">
                                 <div class="form-check">
                                    <input id="1_partisipasi" name="f23" type="radio" class="form-check-input" value="1" onchange="f23err()"   <?php echo set_radio('f23', '1'); ?>>
                                    <label for="1_partisipasi" class="ml-3 block text-sm font-medium text-gray-700">Sangat Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="2_partisipasi" name="f23" type="radio" class="form-check-input" value="2" onchange="f23err()"   <?php echo set_radio('f23', '2'); ?>>
                                    <label for="2_partisipasi" class="ml-3 block text-sm font-medium text-gray-700">Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="3_partisipasi" name="f23" type="radio" class="form-check-input" value="3" onchange="f23err()"   <?php echo set_radio('f23', '3'); ?>>
                                    <label for="3_partisipasi" class="ml-3 block text-sm font-medium text-gray-700">Cukup Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="4_partisipasi" name="f23" type="radio" class="form-check-input" value="4" onchange="f23err()"   <?php echo set_radio('f23', '4'); ?>>
                                    <label for="4_partisipasi" class="ml-3 block text-sm font-medium text-gray-700">Kurang Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="5_partisipasi" name="f23" type="radio" class="form-check-input" value="5" onchange="f23err()"   <?php echo set_radio('f23', '5'); ?>>
                                    <label for="5_partisipasi" class="ml-3 block text-sm font-medium text-gray-700">Tidak Sama Sekali </label>
                                 </div>
                                 <span class="f23err"  style="color:red;"> <?php echo form_error('f23'); ?></span>
                              </div>
                           </div>
                           <script type="text/javascript">
                           function f23err()
                           {
                              if($('.f23').is(":checked"))   
                                    $(".f23err").show();
                              else   
                                    $(".f23err").hide();   
                           }
                           </script>
                           <div class="w-100"></div>
                           <div class="col">
                              <label class="block text-sm font-medium text-gray-700 mb-2">Magang (f24)</label>
                              <div class="space-y-4 mb-4">
                                 <div class="form-check">
                                    <input id="1_magang" name="f24" type="radio" class="form-check-input" value="1"  onchange="f24err()"   <?php echo set_radio('f24', '1'); ?>>
                                    <label for="1_magang" class="ml-3 block text-sm font-medium text-gray-700">Sangat Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="2_magang" name="f24" type="radio" class="form-check-input" value="2" onchange="f24err()"   <?php echo set_radio('f24', '2'); ?>>
                                    <label for="2_magang" class="ml-3 block text-sm font-medium text-gray-700">Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="3_magang" name="f24" type="radio" class="form-check-input" value="3" onchange="f24err()"   <?php echo set_radio('f24', '3'); ?>>
                                    <label for="3_magang" class="ml-3 block text-sm font-medium text-gray-700">Cukup Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="4_magang" name="f24" type="radio" class="form-check-input" value="4" onchange="f24err()"   <?php echo set_radio('f24', '4'); ?>>
                                    <label for="4_magang" class="ml-3 block text-sm font-medium text-gray-700">Kurang Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="5_magang" name="f24" type="radio" class="form-check-input" value="5" onchange="f24err()"   <?php echo set_radio('f24', '5'); ?>>
                                    <label for="5_magang" class="ml-3 block text-sm font-medium text-gray-700">Tidak Sama Sekali </label>
                                 </div>
                                 <span class="f24err"  style="color:red;"> <?php echo form_error('f24'); ?></span>
                              </div>
                           </div>
                           <script type="text/javascript">
                           function f24err()
                           {
                              if($('.f24').is(":checked"))   
                                    $(".f24err").show();
                              else   
                                    $(".f24err").hide();   
                           }
                           </script>
                           <div class="col">
                              <label class="block text-sm font-medium text-gray-700 mb-2">Praktikum (f25)</label>
                              <div class="space-y-4 mb-4">
                                 <div class="form-check">
                                    <input id="1_praktikum" name="f25" type="radio" class="form-check-input" value="1" onchange="f25err()"   <?php echo set_radio('f25', '1'); ?>>
                                    <label for="1_praktikum" class="ml-3 block text-sm font-medium text-gray-700">Sangat Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="2_praktikum" name="f25" type="radio" class="form-check-input" value="2" onchange="f25err()"   <?php echo set_radio('f25', '2'); ?>>
                                    <label for="2_praktikum" class="ml-3 block text-sm font-medium text-gray-700">Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="3_praktikum" name="f25" type="radio" class="form-check-input" value="3" onchange="f25err()"   <?php echo set_radio('f25', '3'); ?>>
                                    <label for="3_praktikum" class="ml-3 block text-sm font-medium text-gray-700">Cukup Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="4_praktikum" name="f25" type="radio" class="form-check-input" value="4" onchange="f25err()"   <?php echo set_radio('f25', '4'); ?>>
                                    <label for="4_praktikum" class="ml-3 block text-sm font-medium text-gray-700">Kurang Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="5_praktikum" name="f25" type="radio" class="form-check-input" value="5" onchange="f25err()"   <?php echo set_radio('f25', '5'); ?>>
                                    <label for="5_praktikum" class="ml-3 block text-sm font-medium text-gray-700">Tidak Sama Sekali </label>
                                 </div>
                                 <span class="f25err"  style="color:red;"> <?php echo form_error('f25'); ?></span>
                              </div>
                           </div>
                           <script type="text/javascript">
                           function f25err()
                           {
                              if($('.f25').is(":checked"))   
                                    $(".f25err").show();
                              else   
                                    $(".f25err").hide();   
                           }
                           </script>
                           <div class="col">
                              <label class="block text-sm font-medium text-gray-700 mb-2">Kerja Lapangan (f26)</label>
                              <div class="space-y-4 mb-4">
                                 <div class="form-check">
                                    <input id="1_kerjaLapangan" name="f26" type="radio" class="form-check-input" value="1" onchange="f26err()"   <?php echo set_radio('f26', '1'); ?>>
                                    <label for="1_kerjaLapangan" class="ml-3 block text-sm font-medium text-gray-700">Sangat Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="2_kerjaLapangan" name="f26" type="radio" class="form-check-input" value="2" onchange="f26err()"   <?php echo set_radio('f26', '2'); ?>>
                                    <label for="2_kerjaLapangan" class="ml-3 block text-sm font-medium text-gray-700">Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="3_kerjaLapangan" name="f26" type="radio" class="form-check-input" value="3" onchange="f26err()"   <?php echo set_radio('f26', '3'); ?>>
                                    <label for="3_kerjaLapangan" class="ml-3 block text-sm font-medium text-gray-700">Cukup Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="4_kerjaLapangan" name="f26" type="radio" class="form-check-input" value="4" onchange="f26err()"   <?php echo set_radio('f26', '4'); ?>>
                                    <label for="4_kerjaLapangan" class="ml-3 block text-sm font-medium text-gray-700">Kurang Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="5_kerjaLapangan" name="f26" type="radio" class="form-check-input" value="5" onchange="f26err()"   <?php echo set_radio('f26', '5'); ?>>
                                    <label for="5_kerjaLapangan" class="ml-3 block text-sm font-medium text-gray-700">Tidak Sama Sekali </label>
                                 </div>
                                 <span class="f26err"  style="color:red;"> <?php echo form_error('f26'); ?></span>
                              </div>
                           </div>
                           <script type="text/javascript">
                           function f26err()
                           {
                              if($('.f26').is(":checked"))   
                                    $(".f26err").show();
                              else   
                                    $(".f26err").hide();   
                           }
                           </script>
                           <div class="w-100"></div>
                           <div class="col">
                              <label class="block text-sm font-medium text-gray-700 mb-2">Diskusi (f27)</label>
                              <div class="space-y-4 mb-4">
                                 <div class="form-check">
                                    <input id="1_diskusi" name="f27" type="radio" class="form-check-input" value="1" onchange="f27err()"   <?php echo set_radio('f27', '1'); ?>>
                                    <label for="1_diskusi" class="ml-3 block text-sm font-medium text-gray-700">Sangat Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="2_diskusi" name="f27" type="radio" class="form-check-input" value="2" onchange="f27err()"   <?php echo set_radio('f27', '2'); ?>>
                                    <label for="2_diskusi" class="ml-3 block text-sm font-medium text-gray-700">Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="3_diskusi" name="f27" type="radio" class="form-check-input" value="3" onchange="f27err()"   <?php echo set_radio('f27', '3'); ?>>
                                    <label for="3_diskusi" class="ml-3 block text-sm font-medium text-gray-700">Cukup Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="4_diskusi" name="f27" type="radio" class="form-check-input" value="4" onchange="f27err()"   <?php echo set_radio('f27', '4'); ?>>
                                    <label for="4_diskusi" class="ml-3 block text-sm font-medium text-gray-700">Kurang Besar </label>
                                 </div>
                                 <div class="form-check">
                                    <input id="5_diskusi" name="f27" type="radio" class="form-check-input" value="5" onchange="f27err()"   <?php echo set_radio('f27', '5'); ?>>
                                    <label for="5_diskusi" class="ml-3 block text-sm font-medium text-gray-700">Tidak Sama Sekali </label>
                                 </div>
                                 <span class="f27err"  style="color:red;"> <?php echo form_error('f27'); ?></span>
                              </div>
                           </div>
                           <script type="text/javascript">
                           function f27err()
                           {
                              if($('.f27').is(":checked"))   
                                    $(".f27err").show();
                              else   
                                    $(".f27err").hide();   
                           }
                           </script>
                           
                        </div>
                
                        <li class="mb-4">Kapan anda mulai mencari pekerjaan? Mohon pekerjaan sambilan tidak dimasukkan</li>
                        <div class="space-y-4 mb-4">
                           <div class="form-check">
                              
                              <input id="sebelum" name="f301" type="radio" class="form-check-input" value="1">  <label for="sebelum" class="ml-3 block text-sm font-medium text-gray-700">Kira-kira  <input type="number" name="f302"  class=" focus:ring-indigo-500 h-10 w-20 text-indigo-600 text-sm"> bulan sebelum lulus </label>
                           </div>
                           <div class="form-check">
                              <input id="sesudah" name="f301" type="radio" class="form-check-input" value="2"> <label for="sesudah" class="ml-3 block text-sm font-medium text-gray-700">Kira-kira <input type="number" name="f303"  class="focus:ring-indigo-500 h-10 w-20 text-indigo-600 text-sm border-gray-300"> bulan sesudah lulus </label>
                           </div>
                           <div class="form-check">
                              <input id="tidak" name="f301" type="radio" class="form-check-input" value="3"> <label for="tidak" class="ml-3 block text-sm font-medium text-gray-700">Saya tidak mencari kerja</label>
                           </div>
                        </div>
                        <li class="mb-4">Bagaimana anda mencari pekerjaan tersebut? Jawaban bisa lebih dari satu</li>
                        <div class="space-y-4 mb-4">
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="0_f401" name="f401" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                             
                                 <label for="0_f401" class="font-medium text-gray-700">Melalui iklan di koran/majalah, brosur </label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="1_f402" name="f402" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                            
                                 <label for="1_f402" class="font-medium text-gray-700">Melamar ke perusahaan tanpa mengetahui lowongan yang ada </label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="2_f403" name="f403" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                              
                                 <label for="2_f403" class="font-medium text-gray-700">Pergikebursa/pamerankerja </label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="3_f404" name="f404" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                              
                                 <label for="3_f404" class="font-medium text-gray-700">Mencarilewatinternet/iklanonline/milis </label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="4_f405" name="f405" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                             
                                 <label for="4_f405" class="font-medium text-gray-700">Dihubungi oleh perusahaan </label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="5_f406" name="f406" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"  >
                             
                                 <label for="5_f406" class="font-medium text-gray-700">Menghubungi Kemenakertrans</label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="6_f407" name="f407" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                             
                                 <label for="6_f407" class="font-medium text-gray-700">Menghubungi agen tenaga kerja komersial/swasta </label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="7_f408" name="f408" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                             
                                 <label for="7_f408" class="font-medium text-gray-700">Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas </label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="8_f409" name="f409" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                             
                                 <label for="8_f409" class="font-medium text-gray-700">Menghubungikantorkemahasiswaan/hubunganalumni </label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="9_f410" name="f410" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                             
                                 <label for="9_f410" class="font-medium text-gray-700">Membangunjejaring(network)sejakmasihkuliah </label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="10_f411" name="f411" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                             
                                 <label for="10_f411" class="font-medium text-gray-700">Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.) </label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="11_f412" name="f412" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                             
                                 <label for="11_f412" class="font-medium text-gray-700">Membangun bisnis sendiri </label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="12_f413" name="f413" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                             
                                 <label for="12_f413" class="font-medium text-gray-700">Melalui penempatan kerja atau magang </label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="13_f414" name="f414" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                             
                                 <label for="13_f414" class="font-medium text-gray-700">Bekerja di tempat yang sama dengan tempat kerja semasa kuliah </label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="14_f415" name="f415" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                             
                                 <label for="14_f415" class="font-medium text-gray-700">Lainnya</label>
                              </div>
                           </div>
                           <div class="input-group input-group-outline">
                           <input type="text" name="f4016" id="f4016"  class="form-control">
                           </div>
                        </div>
                        <li class="mb-4">Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memeroleh pekerjaan pertama? (f6)</li>
                        <div class="space-y-4 mb-4 ">
                           <div class="flex flex-row h-full">
                              <div class="w-1/2">
                              <div class="input-group input-group-outline">   
                              <input type="number" max="100" name="f6" id="f6" class="form-control mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                              </div>   
                           </div>
                              <p class="my-auto ml-2">perusahaan/instansi/institusi</p>
                           </div>
                        </div>
                        <li class="mb-4">Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda? (f7)</li>
                        <div class="space-y-4 mb-4 ">
                           <div class="flex flex-row h-full">
                              <div class="w-1/2">
                              <div class="input-group input-group-outline">
                                 <input type="number" name="f7" max="100" id="f7" class="form-control mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                              </div>
                              </div>
                              <p class="my-auto ml-2">perusahaan/instansi/institusi</p>
                           </div>
                        </div>
                        <li class="mb-4">Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara? (f7a)</li>
                        <div class="space-y-4 mb-4 ">
                           <div class="flex flex-row h-full">
                              <div class="w-1/2">
                              <div class="input-group input-group-outline">
                                 <input type="number" name="f7a" max="100" id="f7a" class="form-control mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                              </div>
                              </div>
                              <p class="my-auto ml-2">perusahaan/instansi/institusi</p>
                           </div>
                        </div>
                        <li class="mb-4">Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir? Pilihlah satu jawaban (f1001)</li>
                        <div class="space-y-4 mb-4">
                           <div class="form-check">
                              <input id="1_activeSearch" name="f1001" type="radio" class="form-check-input">
                              <label for="1_activeSearch" class="ml-3 block text-sm font-medium text-gray-700">Tidak </label>
                           </div>
                           <div class="form-check">
                              <input id="2_activeSearch" name="f1001" type="radio" class="form-check-input">
                              <label for="2_activeSearch" class="ml-3 block text-sm font-medium text-gray-700">Tidak, tapi saya sedang menunggu hasil lamaran kerja </label>
                           </div>
                           <div class="form-check">
                              <input id="3_activeSearch" name="f1001" type="radio" class="form-check-input">
                              <label for="3_activeSearch" class="ml-3 block text-sm font-medium text-gray-700">Ya, saya akan mulai bekerja dalam 2 minggu ke depan </label>
                           </div>
                           <div class="form-check">
                              <input id="4_activeSearch" name="f1001" type="radio" class="form-check-input">
                              <label for="4_activeSearch" class="ml-3 block text-sm font-medium text-gray-700">Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan </label>
                           </div>
                           <div class="form-check">
                              <input id="5_activeSearch" name="f1001" type="radio" class="form-check-input">
                              <label for="5_activeSearch" class="ml-3 block text-sm font-medium text-gray-700">Lainnya </label>
                           </div>
                           <div class="input-group input-group-outline">
                           <input type="text" name="f1002" id="f1002" placeholder="f1002" class="form-control mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-1/2 shadow-sm sm:text-sm border-gray-300 rounded-md">
                           </div>
                        </div>
                        <li class="mb-4">Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan : pendidikan anda, mengapa anda mengambilnya? Jawaban bisa lebih dari satu</li>
                        <div class="space-y-4 mb-4">
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="0_f1601" name="f1601" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> 
                            
                                 <label for="0_f1601" class="font-medium text-gray-700">Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya. (f1601)</label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="1_f1602" name="f1602" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> 
                            
                                 <label for="1_f1602" class="font-medium text-gray-700">Saya belum mendapatkan pekerjaan yang lebih sesuai. (f1602)</label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="2_f1603" name="f1603" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> 
                            
                                 <label for="2_f1603" class="font-medium text-gray-700">Di pekerjaan ini saya memeroleh prospek karir yang baik. (f1603)</label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="3_f1604" name="f1604" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> 
                            
                                 <label for="3_f1604" class="font-medium text-gray-700">Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya. (f1604)</label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="4_f1605" name="f1605" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> 
                            
                                 <label for="4_f1605" class="font-medium text-gray-700">Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya. (f1605)</label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="5_f1606" name="f1606" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> 
                            
                                 <label for="5_f1606" class="font-medium text-gray-700">Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini. (f1606)</label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="6_f1607" name="f1607" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> 
                            
                                 <label for="6_f1607" class="font-medium text-gray-700">Pekerjaan saya saat ini lebih aman/terjamin/secure (f1607)</label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="7_f1608" name="f1608" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> 
                            
                                 <label for="7_f1608" class="font-medium text-gray-700">Pekerjaan saya saat ini lebih menarik (f1608)</label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="8_f1609" name="f1609" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> 
                            
                                 <label for="8_f1609" class="font-medium text-gray-700">Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll. (f1609)</label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="9_f1610" name="f1610" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> 
                            
                                 <label for="9_f1610" class="font-medium text-gray-700">Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya. (f1610)</label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="10_f1611" name="f1611" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> 
                            
                                 <label for="10_f1611" class="font-medium text-gray-700">Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya. (f1611)</label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="11_f1612" name="f1612" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> 
                            
                                 <label for="11_f1612" class="font-medium text-gray-700">Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya (f1612)</label>
                              </div>
                           </div>
                           <div class="relative flex items-start">
                              <div class="flex items-center h-5">
                                 <input id="12_f1613" name="f1613" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> 
                            
                                 <label for="12_f1613" class="font-medium text-gray-700">Lainnya (f1613)</label>
                              </div>
                           </div>
                           <div class="input-group input-group-outline">
                           <input type="text" name="f1614" id="f1614" placeholder="f1614" class="form-control mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-1/2 shadow-sm sm:text-sm border-gray-300 rounded-md">
                           </div>
                        </div>
                     </ol>
                  </div>
                  <div class="row justify-content-md-center ">
                     
                                                     <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                                                          SIMPAN
                                                    </button>
                                                     </div>
                                                     
             
                  
                 
                  </form>
               </div>
            </div>
         </div>
      </div>
      </div>






   <script src="<?php echo base_url('assets/'); ?>material/assets/js/core/popper.min.js" ></script>
   <script src="<?php echo base_url('assets/'); ?>material/assets/js/core/bootstrap.min.js" ></script>

   <script src="<?php echo base_url('assets/'); ?>material/assets/js/plugins/perfect-scrollbar.min.js" ></script>
   <script src="<?php echo base_url('assets/'); ?>material/assets/js/plugins/smooth-scrollbar.min.js" ></script>
   <script src="<?php echo base_url('assets/'); ?>material/assets/js/plugins/chartjs.min.js"></script>


      <!-- Bootstrap core JavaScript-->
      <script src="<?php echo base_url('assets/'); ?>vendor/jquery/jquery.min.js"></>
      <script src="<?php echo base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></>
      <!-- Core plugin JavaScript-->
      <script src="<?php echo base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="<?php echo base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
      <!-- Page level plugins -->
      <script src="<?php echo base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>
      <!-- Page level custom scripts -->
      <script src="<?php echo base_url('assets/'); ?>js/demo/chart-area-demo.js"></script>
      <script src="<?php echo base_url('assets/'); ?>js/demo/chart-pie-demo.js"></script>
      <script src="<?php echo base_url('assets/'); ?>js/jquery-3.6.4.js"></script>
      <script type="text/javascript">
		$(document).ready(function(){

			$('#provinsi').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('kuesioner/get_kota');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].id_kab_kota+'>'+data[i].nama_kab_kota+'</option>';
                        }
                        $('#kabkota').html(html);
                    }
                });
                return false;
            }); 
            
		});
	</script>

   </body>
</html>



