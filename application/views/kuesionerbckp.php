<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <title>Survey Form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="<?php echo base_url('assets/'); ?>css/style.css" rel="stylesheet">


</head>

<body>
    <div class="contain">

        <div class="wrapper">


            <div class="form">
                <h3>Identitas</h3>
                <form action="">
                    <p>
                        <label for="">Nim</label>
                        <input type="text" disabled>
                    </p>
                    <p>
                        <label for="">Nama Mahasiswa</label>
                        <input type="text" disabled>
                    </p>
                    <p>
                        <label for="">Email</label>
                        <input type="text">
                    </p>
                    <p>
                        <label for="">Nomer Hp</label>
                        <input type="text">
                    </p>
                    <p>
                        <label for="">Masuk Tahun</label>
                        <input type="text">
                    </p>
                    <p>
                        <label for="">Lulusan Tahun</label>
                        <input type="text">
                    </p>
                    <p class="full-width">
                        <button>Edit</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <div class="px-4 md:px-10 mx-auto w-full -m-24">
  <div class="flex flex-wrap mt-4">
    <div class="w-full mb-12 px-4">
      <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
          <div class="flex flex-wrap items-center">
            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
              <h3 class="font-semibold text-lg text-slate-700">Panduan Form</h3>
            </div>
          </div>
        </div>
        <div class="block w-full overflow-x-auto p-4">
          <div class="px-4">
            <p class="font-poppins font-semibold text-[1.25rem] text-[#515152">Identitas</p>
            <div class="mb-4">
              <div class="grid grid-cols-6 gap-6 mt-4">
                <div class="col-span-6 sm:col-span-3">
                  <label for="nomor_mhs" class="block text-sm font-medium text-gray-700">NIM (nimhsmsmh)</label>
                  <input type="text" name="nomor_mhs" id="nomor_mhs" disabled="" class="bg-gray-200 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="kode_pt" class="block text-sm font-medium text-gray-700">Kode PT (kdptimsmh)</label>
                  <input type="text" name="kode_pt" id="kode_pt" disabled="" class="bg-gray-200 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
              </div>
              <div class="grid grid-cols-6 gap-6 mt-4">
                <div class="col-span-6 sm:col-span-3">
                  <label for="tahun_lulus" class="block text-sm font-medium text-gray-700">Tahun Lulus (tahun_lulus)</label>
                  <input type="text" name="tahun_lulus" id="tahun_lulus" disabled="" class="bg-gray-200 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="kode_prodi" class="block text-sm font-medium text-gray-700">Kode Prodi (kdpstmsmh)</label>
                  <input type="text" name="kode_prodi" id="kode_prodi" disabled="" class="bg-gray-200 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
              </div>
              <div class="grid grid-cols-6 gap-6 mt-4">
                <div class="col-span-6 sm:col-span-3">
                  <label for="nama" class="block text-sm font-medium text-gray-700">Nama (nmmhsmsmh)</label>
                  <input type="text" name="nama" id="nama" disabled="" class="bg-gray-200 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="hp" class="block text-sm font-medium text-gray-700">Nomor Telepon/HP (telpomsmh)</label>
                  <input type="text" name="hp" id="hp" disabled="" class="bg-gray-200 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
              </div>
              <div class="grid grid-cols-6 gap-6 mt-4">
                <div class="col-span-6 sm:col-span-3">
                  <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email (emailmsmh)</label>
                  <input type="text" name="email" id="email" disabled="" class="bg-gray-200 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="nik" class="block text-sm font-medium text-gray-700">NIK (nik)</label>
                  <input type="text" name="nik" id="nik" disabled="" class="bg-gray-200 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
              </div>
              <div class="grid grid-cols-6 gap-6 mt-4">
                <div class="col-span-6 sm:col-span-3">
                  <label for="npwp" class="block text-sm font-medium text-gray-700">NPWP (npwp)</label>
                  <input type="text" name="npwp" id="npwp" class="disabled:bg-gray-200 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
              </div>
            </div>
            <p class="font-poppins font-semibold text-[1.25rem] text-[#515152">Kuesioner Wajib</p>
            <div class="ml-4 mt-[1.188rem]">
              <ol class="list-decimal">
                <li class="mb-4">Jelaskan status Anda saat ini? * (f8)</li>
                <div class="space-y-4 mb-4">
                  <div class="flex items-center">
                    <input id="1_status" name="f8" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                    <label for="1_status" class="ml-3 block text-sm font-medium text-gray-700">Bekerja (full time / part time) (1)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="2_status" name="f8" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">
                    <label for="2_status" class="ml-3 block text-sm font-medium text-gray-700">Belum memungkinkan bekerja (2)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="3_status" name="f8" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">
                    <label for="3_status" class="ml-3 block text-sm font-medium text-gray-700">Wiraswasta (3)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="4_status" name="f8" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">
                    <label for="4_status" class="ml-3 block text-sm font-medium text-gray-700">Melanjutkan Pendidikan (4)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="5_status" name="f8" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">
                    <label for="5_status" class="ml-3 block text-sm font-medium text-gray-700">Tidak kerja tetapi sedang mencari kerja (5)</label>
                  </div>
                </div>
                <li class="mb-4">Apakah Anda telah mendapatkan pekerjaan &lt;= 6 bulan / termasuk bekerja sebelum lulus? (f504)</li>
                <div class="mb-4">
                  <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                    <div class="flex items-center">
                      <input id="pekerjaan-ya" name="f504" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                      <label for="pekerjaan-ya" class="ml-3 block text-sm font-medium text-gray-700">Ya (1)</label>
                    </div>
                    <div class="flex items-center">
                      <input id="pekerjaan-tidak" name="f504" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="0">
                      <label for="pekerjaan-tidak" class="ml-3 block text-sm font-medium text-gray-700">Tidak (2)</label>
                    </div>
                  </div>
                  <div class="grid grid-cols-6 gap-6 mt-4">
                    <div class="col-span-6 sm:col-span-3">
                      <label for="getJob" class="block text-sm font-medium text-gray-700">Dalam berapa bulan Anda mendapatkan pekerjaan? (f502)</label>
                      <input type="number" name="f502" id="getJob" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                      <label for="averageSalary" class="block text-sm font-medium text-gray-700">Berapa rata-rata pendapatan Anda per bulan? (take home pay)? (f505)</label>
                      <input type="number" name="f505" id="getJob" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                  </div>
                </div>
                <li class="mb-4">Dimana lokasi tempat Anda bekerja? </li>
                <div class="mb-4">
                  <div class="grid grid-cols-6 gap-6 mt-4">
                    <div class="col-span-6 sm:col-span-3">
                      <label for="nim" class="block text-sm font-medium text-gray-700">Provinsi (f5a1)</label>
                      <input type="text" disabled="" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      <a class="text-xs text-blue-400 cursor-pointer mt-2" href="/panduan/master-provinsi.xlsx" download="">Unduh master kode provinsi</a>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                      <div>
                        <label for="nim" class="block text-sm font-medium text-gray-700">Kota/Kabupaten (f5a2)</label>
                        <input type="text" disabled="" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        <a class="text-xs text-blue-400 cursor-pointer mt-2" href="/panduan/master-kab-kota.xlsx" download="">Unduh master kode kabupaten kota</a>
                      </div>
                    </div>
                  </div>
                </div>
                <li class="mb-4">Apa jenis perusahaan/intansi/institusi tempat anda bekerja sekarang? (f1101)</li>
                <div class="space-y-4 mb-4">
                  <div class="flex items-center">
                    <input id="1_typeCompany" name="f1101" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                    <label for="1_typeCompany" class="ml-3 block text-sm font-medium text-gray-700">Intansi pemerintah (1)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="6_typeCompany" name="f1101" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="6">
                    <label for="6_typeCompany" class="ml-3 block text-sm font-medium text-gray-700">BUMN/BUMD (6)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="7_typeCompany" name="f1101" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="7">
                    <label for="7_typeCompany" class="ml-3 block text-sm font-medium text-gray-700">Institusi/Organisasi Multilateral (7)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="2_typeCompany" name="f1101" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">
                    <label for="2_typeCompany" class="ml-3 block text-sm font-medium text-gray-700">Organisasi non-profit/Lembaga Swadaya Masyarakat (2)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="3_typeCompany" name="f1101" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">
                    <label for="3_typeCompany" class="ml-3 block text-sm font-medium text-gray-700">Perusahaan swasta (3)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="4_typeCompany" name="f1101" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">
                    <label for="4_typeCompany" class="ml-3 block text-sm font-medium text-gray-700">Wiraswasta/perusahaan sendiri (4)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="5_typeCompany" name="f1101" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">
                    <label for="5_typeCompany" class="ml-3 block text-sm font-medium text-gray-700">Lainnya, tuliskan (5)</label>
                  </div>
                  <input type="text" name="f1102" id="f1102" placeholder="f1101" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-1/2 shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <li class="mb-4">Apa nama perusahaan/kantor tempat Anda bekerja? (f5b)</li>
                <div class="mb-4">
                  <div class="grid grid-cols-6 gap-6 mt-4">
                    <div class="col-span-6 sm:col-span-3">
                      <input type="text" name="f5b" id="f5b" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                  </div>
                </div>
                <li class="mb-4">Bila berwiraswasta, apa posisi/jabatan Anda saat ini? (Apabila 1 Menjawab [3] wiraswasta) (f5c)</li>
                <div class="mb-4">
                  <div class="grid grid-cols-6 gap-6 mt-4">
                    <div class="col-span-6 sm:col-span-3">
                      <select id="f5c" name="f5c" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option>Silahkan Pilih</option>
                        <option>Founder (1)</option>
                        <option>Co-Founder (2)</option>
                        <option>Staff (3)</option>
                        <option>Freelance/Kerja Lepas (4)</option>
                      </select>
                    </div>
                  </div>
                </div>
                <li class="mb-4">Apa tingkat tempat kerja Anda? (f5d)</li>
                <div class="mb-4">
                  <div class="grid grid-cols-6 gap-6 mt-4">
                    <div class="col-span-6 sm:col-span-3">
                      <select id="f5d" name="f5d" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option>Silahkan Pilih</option>
                        <option value="1">Lokal/Wilayah/Wiraswasta tidak berbadan hukum (1)</option>
                        <option value="2">Nasional/Wiraswasta berbadan hukum (2)</option>
                        <option value="3">Multinasional/Internasional (3)</option>
                      </select>
                    </div>
                  </div>
                </div>
                <li class="mb-4">Pertanyaan studi lanjut</li>
                <div class="mb-4">
                  <div class="grid grid-cols-6 gap-6 mt-4">
                    <div class="col-span-6 sm:col-span-3">
                      <label for="country" class="block text-sm font-medium text-gray-700">Sumber biaya (f18a)</label>
                      <select id="f18a" name="f18a" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                        <option>Silahkan Pilih</option>
                        <option>Biaya Sendiri (1)</option>
                        <option>Beasiswa (2)</option>
                      </select>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                      <div>
                        <label for="nim" class="block text-sm font-medium text-gray-700">Perguruan Tinggi (f18b)</label>
                        <input type="text" disabled="" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>
                    </div>
                  </div>
                  <div class="grid grid-cols-6 gap-6 mt-4">
                    <div class="col-span-6 sm:col-span-3">
                      <div>
                        <label for="nim" class="block text-sm font-medium text-gray-700">Program Studi (f18c)</label>
                        <input type="text" disabled="" placeholder="Silahkan pilih perguruan tinggi terlebih dahulu" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                      </div>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                      <label for="f18d" class="block text-sm font-medium text-gray-700">Tanggal Masuk (f18d)</label>
                      <input type="date" name="f18d" id="f18d" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                  </div>
                </div>
                <li class="mb-4">Sebutkan sumberdana dalam pembiayaan kuliah? * (bukan ketika Studi Lanjut) (f1201) </li>
                <div class="space-y-4 mb-4">
                  <div class="flex items-center">
                    <input id="1_sumberDana" name="f1201" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                    <label for="1_sumberDana" class="ml-3 block text-sm font-medium text-gray-700">Biaya Sendiri/Keluarga (1)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="2_sumberDana" name="f1201" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">
                    <label for="2_sumberDana" class="ml-3 block text-sm font-medium text-gray-700">Beasiswa ADIK (2)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="3_sumberDana" name="f1201" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">
                    <label for="3_sumberDana" class="ml-3 block text-sm font-medium text-gray-700">Beasiswa BIDIKMISI (3)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="4_sumberDana" name="f1201" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">
                    <label for="4_sumberDana" class="ml-3 block text-sm font-medium text-gray-700">Beasiswa PPA (4)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="5_sumberDana" name="f1201" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">
                    <label for="5_sumberDana" class="ml-3 block text-sm font-medium text-gray-700">Beasiswa AFIRMASI (5)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="6_sumberDana" name="f1201" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="6">
                    <label for="6_sumberDana" class="ml-3 block text-sm font-medium text-gray-700">Beasiswa Perusahaan/Swasta (6)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="7_sumberDana" name="f1201" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="7">
                    <label for="7_sumberDana" class="ml-3 block text-sm font-medium text-gray-700">Lainnya, tuliskan (7)</label>
                  </div>
                  <input type="text" name="f1202" id="f1202" placeholder="f1202" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-1/2 shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <li class="mb-4">Seberapa erat hubungan bidang studi dengan pekerjaan Anda? * (f14)</li>
                <div class="space-y-4 mb-4">
                  <div class="flex items-center">
                    <input id="1_hubunganBidangStudi" name="f14" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                    <label for="1_hubunganBidangStudi" class="ml-3 block text-sm font-medium text-gray-700">Sangat Erat (1)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="2_hubunganBidangStudi" name="f14" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">
                    <label for="2_hubunganBidangStudi" class="ml-3 block text-sm font-medium text-gray-700">Erat (2)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="3_hubunganBidangStudi" name="f14" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">
                    <label for="3_hubunganBidangStudi" class="ml-3 block text-sm font-medium text-gray-700">Cukup Erat (3)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="4_hubunganBidangStudi" name="f14" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">
                    <label for="4_hubunganBidangStudi" class="ml-3 block text-sm font-medium text-gray-700">Kurang Erat (4)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="5_hubunganBidangStudi" name="f14" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">
                    <label for="5_hubunganBidangStudi" class="ml-3 block text-sm font-medium text-gray-700">Tidak Sama Sekali (5)</label>
                  </div>
                </div>
                <li class="mb-4">Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini? * (f15)</li>
                <div class="space-y-4 mb-4">
                  <div class="flex items-center">
                    <input id="1_kesesuaianTingkatPendidikan" name="f15" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                    <label for="1_kesesuaianTingkatPendidikan" class="ml-3 block text-sm font-medium text-gray-700">Setingkat Lebih Tinggi (1)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="2_kesesuaianTingkatPendidikan" name="f15" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">
                    <label for="2_kesesuaianTingkatPendidikan" class="ml-3 block text-sm font-medium text-gray-700">Tingkat yang Sama (2)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="3_kesesuaianTingkatPendidikan" name="f15" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">
                    <label for="3_kesesuaianTingkatPendidikan" class="ml-3 block text-sm font-medium text-gray-700">Setingkat Lebih Rendah (3)</label>
                  </div>
                  <div class="flex items-center">
                    <input id="4_kesesuaianTingkatPendidikan" name="f15" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">
                    <label for="4_kesesuaianTingkatPendidikan" class="ml-3 block text-sm font-medium text-gray-700">Tidak Perlu Pendidikan Tinggi (4)</label>
                  </div>
                </div>
                <li class="mb-4">Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda : kuasai? (A) Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan? (B) *</li>
                <div class="space-y-4 mb-4">
                  <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                    <table class="divide-y divide-gray-300">
                      <tr>
                        <td colspan="6" class="px-0.5 lg:px-3 py-3.5">A</td>
                        <td colspan="6" class="px-0.5 lg:py-3.5">B</td>
                      </tr>
                      <tr>
                        <td colspan="3" class="px-0.5 lg:px-2 py-3.5">Sangat Rendah</td>
                        <td colspan="3" class="px-0.5 lg:px-2 py-3.5">Sangat Tinggi</td>
                        <td colspan="3" class="px-0.5 lg:px-2 py-3.5">Sangat Rendah</td>
                        <td colspan="3" class="px-0.5 lg:px-2 py-3.5">Sangat Tinggi</td>
                      </tr>
                      <tr>
                        <td class="px-[0.2rem] lg:px-5 py-3.5">1</td>
                        <td class="px-[0.2rem] lg:px-5 py-3.5">2</td>
                        <td class="px-[0.2rem] lg:px-5 py-3.5">3</td>
                        <td class="px-[0.2rem] lg:px-5 py-3.5">4</td>
                        <td class="px-[0.2rem] lg:px-5 py-3.5">5</td>
                        <td></td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">1</td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">2</td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">3</td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">4</td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">5</td>
                      </tr>
                      <tr>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="0_etika" name="f1761" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="1_etika" name="f1761" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="2_etika" name="f1761" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="3_etika" name="f1761" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="4_etika" name="f1761" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5 text-[0.7rem] lg:text-[1rem] text-center">(f1761) Etika (f1762)</td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="0_etika2" name="f1762" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="1_etika2" name="f1762" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="2_etika2" name="f1762" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="3_etika2" name="f1762" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="4_etika2" name="f1762" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">
                        </td>
                      </tr>
                      <tr>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="0_bidangIlmu" name="f1763" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="1_bidangIlmu" name="f1763" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="2_bidangIlmu" name="f1763" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="3_bidangIlmu" name="f1763" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="4_bidangIlmu" name="f1763" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5 text-[0.7rem] lg:text-[1rem] text-center">(f1763) Keahlian berdasarkan bidang ilmu (f1764)</td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="0_bidangIlmu2" name="f1764" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="1_bidangIlmu2" name="f1764" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="2_bidangIlmu2" name="f1764" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="3_bidangIlmu2" name="f1764" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="4_bidangIlmu2" name="f1764" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">
                        </td>
                      </tr>
                      <tr>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="0_bahasaInggris" name="f1765" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="1_bahasaInggris" name="f1765" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="2_bahasaInggris" name="f1765" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="3_bahasaInggris" name="f1765" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="4_bahasaInggris" name="f1765" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5 text-[0.7rem] lg:text-[1rem] text-center">(f1765) Bahasa Inggris (f1766)</td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="0_bahasaInggris2" name="f1766" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="1_bahasaInggris2" name="f1766" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="2_bahasaInggris2" name="f1766" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="3_bahasaInggris2" name="f1766" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="4_bahasaInggris2" name="f1766" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">
                        </td>
                      </tr>
                      <tr>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="0_teknologiInformasi" name="f1767" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="1_teknologiInformasi" name="f1767" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="2_teknologiInformasi" name="f1767" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="3_teknologiInformasi" name="f1767" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="4_teknologiInformasi" name="f1767" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5 text-[0.7rem] lg:text-[1rem] text-center">(f1767) Penggunaan Teknologi Informasi (f1768)</td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="0_teknologiInformasi2" name="f1768" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="1_teknologiInformasi2" name="f1768" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="2_teknologiInformasi2" name="f1768" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                          <input id="3_teknologiInformasi2" name="f1768" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">
                        </td>
                        <td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="4_teknologiInformasi2" name="f1768" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">undefined</td>
                      </tr>
                      <tr>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="0_komunikasi" name="f1769" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="1_komunikasi" name="f1769" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="2_komunikasi" name="f1769" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="3_komunikasi" name="f1769" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="4_komunikasi" name="f1769" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5 text-[0.7rem] lg:text-[1rem] text-center">(f1769) Komunikasi (f1770)</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="0_komunikasi2" name="f1770" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="1_komunikasi2" name="f1770" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="2_komunikasi2" name="f1770" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="3_komunikasi2" name="f1770" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="4_komunikasi2" name="f1770" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">undefined</td>undefined</tr>undefined<tr>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="0_teamWork" name="f1771" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="1_teamWork" name="f1771" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="2_teamWork" name="f1771" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="3_teamWork" name="f1771" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="4_teamWork" name="f1771" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5 text-[0.7rem] lg:text-[1rem] text-center">(f1771) Kerja sama tim (f1772)</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="0_teamWork2" name="f1772" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="1_teamWork2" name="f1772" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="2_teamWork2" name="f1772" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="3_teamWork2" name="f1772" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="4_teamWork2" name="f1772" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">undefined</td>undefined</tr>undefined<tr>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="0_pengembangan" name="f1773" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="1_pengembangan" name="f1773" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="2_pengembangan" name="f1773" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="3_pengembangan" name="f1773" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="4_pengembangan" name="f1773" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5 text-[0.7rem] lg:text-[1rem] text-center">(f1773) Pengembangan (f1774)</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="0_pengembangan2" name="f1774" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="1_pengembangan2" name="f1774" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="2_pengembangan2" name="f1774" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="3_pengembangan2" name="f1774" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">undefined</td>undefined<td class="px-[0.2rem] lg:px-3 py-3.5">undefined<input id="4_pengembangan2" name="f1774" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">undefined</td>undefined</tr>undefined
                    </table>undefined
                  </div>undefined
                </div>undefined<li class="mb-4">Menurut anda seberapa besar penekanan pada metode pembelajaran dibawah ini dilaksanakan di program studi anda?</li>undefined<div class="grid grid-cols-2 lg:grid-cols-3 gap-y-4">undefined<div>undefined<label class="block text-sm font-medium text-gray-700 mb-2">Perkuliahan (f21)</label>undefined<div class="space-y-4 mb-4">undefined<div class="flex items-center">undefined<input id="1_perkuliahan" name="f21" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">undefined<label for="1_perkuliahan" class="ml-3 block text-sm font-medium text-gray-700">Sangat Besar (1)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="2_perkuliahan" name="f21" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">undefined<label for="2_perkuliahan" class="ml-3 block text-sm font-medium text-gray-700">Besar (2)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="3_perkuliahan" name="f21" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">undefined<label for="3_perkuliahan" class="ml-3 block text-sm font-medium text-gray-700">Cukup Besar (3)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="4_perkuliahan" name="f21" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">undefined<label for="4_perkuliahan" class="ml-3 block text-sm font-medium text-gray-700">Kurang Besar (4)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="5_perkuliahan" name="f21" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">undefined<label for="5_perkuliahan" class="ml-3 block text-sm font-medium text-gray-700">Tidak Sama Sekali (5)</label>undefined</div>undefined</div>undefined</div>undefined<div>undefined<label class="block text-sm font-medium text-gray-700 mb-2">Demonstrasi (f22)</label>undefined<div class="space-y-4 mb-4">undefined<div class="flex items-center">undefined<input id="1_demontrasi" name="f22" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">undefined<label for="1_demontrasi" class="ml-3 block text-sm font-medium text-gray-700">Sangat Besar (1)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="2_demontrasi" name="f22" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">undefined<label for="2_demontrasi" class="ml-3 block text-sm font-medium text-gray-700">Besar (2)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="3_demontrasi" name="f22" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">undefined<label for="3_demontrasi" class="ml-3 block text-sm font-medium text-gray-700">Cukup Besar (3)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="4_demontrasi" name="f22" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">undefined<label for="4_demontrasi" class="ml-3 block text-sm font-medium text-gray-700">Kurang Besar (4)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="5_demontrasi" name="f22" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">undefined<label for="5_demontrasi" class="ml-3 block text-sm font-medium text-gray-700">Tidak Sama Sekali (5)</label>undefined</div>undefined</div>undefined</div>undefined<div>undefined<label class="block text-sm font-medium text-gray-700 mb-2">Partisipasi dalam proyek riset (f23)</label>undefined<div class="space-y-4 mb-4">undefined<div class="flex items-center">undefined<input id="1_partisipasi" name="f23" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">undefined<label for="1_partisipasi" class="ml-3 block text-sm font-medium text-gray-700">Sangat Besar (1)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="2_partisipasi" name="f23" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">undefined<label for="2_partisipasi" class="ml-3 block text-sm font-medium text-gray-700">Besar (2)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="3_partisipasi" name="f23" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">undefined<label for="3_partisipasi" class="ml-3 block text-sm font-medium text-gray-700">Cukup Besar (3)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="4_partisipasi" name="f23" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">undefined<label for="4_partisipasi" class="ml-3 block text-sm font-medium text-gray-700">Kurang Besar (4)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="5_partisipasi" name="f23" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">undefined<label for="5_partisipasi" class="ml-3 block text-sm font-medium text-gray-700">Tidak Sama Sekali (5)</label>undefined</div>undefined</div>undefined</div>undefined<div>undefined<label class="block text-sm font-medium text-gray-700 mb-2">Magang (f24)</label>undefined<div class="space-y-4 mb-4">undefined<div class="flex items-center">undefined<input id="1_magang" name="f24" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">undefined<label for="1_magang" class="ml-3 block text-sm font-medium text-gray-700">Sangat Besar (1)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="2_magang" name="f24" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">undefined<label for="2_magang" class="ml-3 block text-sm font-medium text-gray-700">Besar (2)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="3_magang" name="f24" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">undefined<label for="3_magang" class="ml-3 block text-sm font-medium text-gray-700">Cukup Besar (3)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="4_magang" name="f24" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">undefined<label for="4_magang" class="ml-3 block text-sm font-medium text-gray-700">Kurang Besar (4)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="5_magang" name="f24" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">undefined<label for="5_magang" class="ml-3 block text-sm font-medium text-gray-700">Tidak Sama Sekali (5)</label>undefined</div>undefined</div>undefined</div>undefined<div>undefined<label class="block text-sm font-medium text-gray-700 mb-2">Praktikum (f25)</label>undefined<div class="space-y-4 mb-4">undefined<div class="flex items-center">undefined<input id="1_praktikum" name="f25" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">undefined<label for="1_praktikum" class="ml-3 block text-sm font-medium text-gray-700">Sangat Besar (1)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="2_praktikum" name="f25" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">undefined<label for="2_praktikum" class="ml-3 block text-sm font-medium text-gray-700">Besar (2)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="3_praktikum" name="f25" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">undefined<label for="3_praktikum" class="ml-3 block text-sm font-medium text-gray-700">Cukup Besar (3)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="4_praktikum" name="f25" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">undefined<label for="4_praktikum" class="ml-3 block text-sm font-medium text-gray-700">Kurang Besar (4)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="5_praktikum" name="f25" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">undefined<label for="5_praktikum" class="ml-3 block text-sm font-medium text-gray-700">Tidak Sama Sekali (5)</label>undefined</div>undefined</div>undefined</div>undefined<div>undefined<label class="block text-sm font-medium text-gray-700 mb-2">Kerja Lapangan (f26)</label>undefined<div class="space-y-4 mb-4">undefined<div class="flex items-center">undefined<input id="1_kerjaLapangan" name="f26" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">undefined<label for="1_kerjaLapangan" class="ml-3 block text-sm font-medium text-gray-700">Sangat Besar (1)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="2_kerjaLapangan" name="f26" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">undefined<label for="2_kerjaLapangan" class="ml-3 block text-sm font-medium text-gray-700">Besar (2)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="3_kerjaLapangan" name="f26" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">undefined<label for="3_kerjaLapangan" class="ml-3 block text-sm font-medium text-gray-700">Cukup Besar (3)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="4_kerjaLapangan" name="f26" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">undefined<label for="4_kerjaLapangan" class="ml-3 block text-sm font-medium text-gray-700">Kurang Besar (4)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="5_kerjaLapangan" name="f26" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">undefined<label for="5_kerjaLapangan" class="ml-3 block text-sm font-medium text-gray-700">Tidak Sama Sekali (5)</label>undefined</div>undefined</div>undefined</div>undefined<div>undefined<label class="block text-sm font-medium text-gray-700 mb-2">Diskusi (f27)</label>undefined<div class="space-y-4 mb-4">undefined<div class="flex items-center">undefined<input id="1_diskusi" name="f27" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1">undefined<label for="1_diskusi" class="ml-3 block text-sm font-medium text-gray-700">Sangat Besar (1)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="2_diskusi" name="f27" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2">undefined<label for="2_diskusi" class="ml-3 block text-sm font-medium text-gray-700">Besar (2)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="3_diskusi" name="f27" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">undefined<label for="3_diskusi" class="ml-3 block text-sm font-medium text-gray-700">Cukup Besar (3)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="4_diskusi" name="f27" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="4">undefined<label for="4_diskusi" class="ml-3 block text-sm font-medium text-gray-700">Kurang Besar (4)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="5_diskusi" name="f27" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="5">undefined<label for="5_diskusi" class="ml-3 block text-sm font-medium text-gray-700">Tidak Sama Sekali (5)</label>undefined</div>undefined</div>undefined</div>undefined</div>undefined<li class="mb-4">Kapan anda mulai mencari pekerjaan? Mohon pekerjaan sambilan tidak dimasukkan</li>undefined<div class="space-y-4 mb-4">undefined<div class="flex items-center">undefined<input id="sebelum" name="f301" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="1"> (1)(f301)undefined<label for="sebelum" class="ml-3 block text-sm font-medium text-gray-700">Kira-kira undefined<input type="number" name="f302" placeholder="f302" class="focus:ring-indigo-500 h-10 w-20 text-indigo-600 text-sm border-gray-300"> bulan sebelum lulusundefined</label>undefined</div>undefined<div class="flex items-center">undefined<input id="sesudah" name="f301" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="2"> (2)(f301)undefined<label for="sesudah" class="ml-3 block text-sm font-medium text-gray-700">Kira-kira undefined<input type="number" name="f303" placeholder="f303" class="focus:ring-indigo-500 h-10 w-20 text-indigo-600 text-sm border-gray-300"> bulan sesudah lulusundefined</label>undefined</div>undefined<div class="flex items-center">undefined<input id="tidak" name="f301" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="3">(3)(f301)undefined<label for="tidak" class="ml-3 block text-sm font-medium text-gray-700">Saya tidak mencari kerja</label>undefined</div>undefined</div>undefined<li class="mb-4">Bagaimana anda mencari pekerjaan tersebut? Jawaban bisa lebih dari satu</li>undefined<div class="space-y-4 mb-4">undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="0_f401" name="f401" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">(0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="0_f401" class="font-medium text-gray-700">Melalui iklan di koran/majalah, brosur (f401)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="1_f402" name="f402" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">(0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="1_f402" class="font-medium text-gray-700">Melamar ke perusahaan tanpa mengetahui lowongan yang ada (f402)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="2_f403" name="f403" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">(0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="2_f403" class="font-medium text-gray-700">Pergikebursa/pamerankerja (f403)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="3_f404" name="f404" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">(0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="3_f404" class="font-medium text-gray-700">Mencarilewatinternet/iklanonline/milis (f404)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="4_f405" name="f405" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">(0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="4_f405" class="font-medium text-gray-700">Dihubungi oleh perusahaan (f405)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="5_f406" name="f406" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">(0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="5_f406" class="font-medium text-gray-700">Menghubungi Kemenakertrans (f406)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="6_f407" name="f407" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">(0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="6_f407" class="font-medium text-gray-700">Menghubungi agen tenaga kerja komersial/swasta (f407)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="7_f408" name="f408" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">(0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="7_f408" class="font-medium text-gray-700">Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas (f408)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="8_f409" name="f409" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">(0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="8_f409" class="font-medium text-gray-700">Menghubungikantorkemahasiswaan/hubunganalumni (f409)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="9_f410" name="f410" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">(0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="9_f410" class="font-medium text-gray-700">Membangunjejaring(network)sejakmasihkuliah (f410)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="10_f411" name="f411" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">(0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="10_f411" class="font-medium text-gray-700">Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.) (f411)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="11_f412" name="f412" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">(0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="11_f412" class="font-medium text-gray-700">Membangun bisnis sendiri (f412)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="12_f413" name="f413" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">(0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="12_f413" class="font-medium text-gray-700">Melalui penempatan kerja atau magang (f413)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="13_f414" name="f414" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">(0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="13_f414" class="font-medium text-gray-700">Bekerja di tempat yang sama dengan tempat kerja semasa kuliah (f414)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="14_f415" name="f415" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">(0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="14_f415" class="font-medium text-gray-700">Lainnya (f415)</label>undefined</div>undefined</div>undefined<input type="text" name="f4016" id="f4016" placeholder="f4016" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-1/2 shadow-sm sm:text-sm border-gray-300 rounded-md">undefined</div>undefined<li class="mb-4">Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memeroleh pekerjaan pertama? (f6)</li>undefined<div class="space-y-4 mb-4 ">undefined<div class="flex flex-row h-full">undefined<div class="w-1/2">undefined<input type="number" max="100" name="f6" id="f6" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">undefined</div>undefined<p class="my-auto ml-2">perusahaan/instansi/institusi</p>undefined</div>undefined</div>undefined<li class="mb-4">Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda? (f7)</li>undefined<div class="space-y-4 mb-4 ">undefined<div class="flex flex-row h-full">undefined<div class="w-1/2">undefined<input type="number" name="f7" max="100" id="f7" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">undefined</div>undefined<p class="my-auto ml-2">perusahaan/instansi/institusi</p>undefined</div>undefined</div>undefined<li class="mb-4">Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara? (f7a)</li>undefined<div class="space-y-4 mb-4 ">undefined<div class="flex flex-row h-full">undefined<div class="w-1/2">undefined<input type="number" name="f7a" max="100" id="f7a" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">undefined</div>undefined<p class="my-auto ml-2">perusahaan/instansi/institusi</p>undefined</div>undefined</div>undefined<li class="mb-4">Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir? Pilihlah satu jawaban (f1001)</li>undefined<div class="space-y-4 mb-4">undefined<div class="flex items-center">undefined<input id="1_activeSearch" name="f1001" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">undefined<label for="1_activeSearch" class="ml-3 block text-sm font-medium text-gray-700">Tidak (1)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="2_activeSearch" name="f1001" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">undefined<label for="2_activeSearch" class="ml-3 block text-sm font-medium text-gray-700">Tidak, tapi saya sedang menunggu hasil lamaran kerja (2)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="3_activeSearch" name="f1001" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">undefined<label for="3_activeSearch" class="ml-3 block text-sm font-medium text-gray-700">Ya, saya akan mulai bekerja dalam 2 minggu ke depan (3)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="4_activeSearch" name="f1001" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">undefined<label for="4_activeSearch" class="ml-3 block text-sm font-medium text-gray-700">Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan (4)</label>undefined</div>undefined<div class="flex items-center">undefined<input id="5_activeSearch" name="f1001" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">undefined<label for="5_activeSearch" class="ml-3 block text-sm font-medium text-gray-700">Lainnya (5)</label>undefined</div>undefined<input type="text" name="f1002" id="f1002" placeholder="f1002" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-1/2 shadow-sm sm:text-sm border-gray-300 rounded-md">undefined</div>undefined<li class="mb-4">Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan : pendidikan anda, mengapa anda mengambilnya? Jawaban bisa lebih dari satu</li>undefined<div class="space-y-4 mb-4">undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="0_f1601" name="f1601" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> (0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="0_f1601" class="font-medium text-gray-700">Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya. (f1601)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="1_f1602" name="f1602" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> (0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="1_f1602" class="font-medium text-gray-700">Saya belum mendapatkan pekerjaan yang lebih sesuai. (f1602)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="2_f1603" name="f1603" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> (0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="2_f1603" class="font-medium text-gray-700">Di pekerjaan ini saya memeroleh prospek karir yang baik. (f1603)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="3_f1604" name="f1604" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> (0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="3_f1604" class="font-medium text-gray-700">Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya. (f1604)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="4_f1605" name="f1605" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> (0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="4_f1605" class="font-medium text-gray-700">Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya. (f1605)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="5_f1606" name="f1606" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> (0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="5_f1606" class="font-medium text-gray-700">Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini. (f1606)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="6_f1607" name="f1607" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> (0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="6_f1607" class="font-medium text-gray-700">Pekerjaan saya saat ini lebih aman/terjamin/secure (f1607)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="7_f1608" name="f1608" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> (0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="7_f1608" class="font-medium text-gray-700">Pekerjaan saya saat ini lebih menarik (f1608)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="8_f1609" name="f1609" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> (0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="8_f1609" class="font-medium text-gray-700">Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll. (f1609)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="9_f1610" name="f1610" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> (0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="9_f1610" class="font-medium text-gray-700">Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya. (f1610)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="10_f1611" name="f1611" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> (0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="10_f1611" class="font-medium text-gray-700">Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya. (f1611)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="11_f1612" name="f1612" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> (0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="11_f1612" class="font-medium text-gray-700">Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya (f1612)</label>undefined</div>undefined</div>undefined<div class="relative flex items-start">undefined<div class="flex items-center h-5">undefined<input id="12_f1613" name="f1613" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"> (0/1)undefined</div>undefined<div class="ml-3 text-sm">undefined<label for="12_f1613" class="font-medium text-gray-700">Lainnya (f1613)</label>undefined</div>undefined</div>undefined<input type="text" name="f1614" id="f1614" placeholder="f1614" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-1/2 shadow-sm sm:text-sm border-gray-300 rounded-md">undefined</div>undefined
              </ol>undefined
            </div>undefined
          </div>undefined
        </div>undefined
      </div>undefined
    </div>undefined
  </div>undefined<footer class="block py-4">undefined<div class="container mx-auto px-4">undefined
      <hr class="mb-4 border-b-1 border-slate-200">undefined<div class="flex flex-wrap items-center md:justify-between justify-center">undefined<div class="w-full md:w-4/12 px-4">undefined<div class="text-sm text-slate-500 font-semibold py-1 text-center md:text-left">Copyright © 2023 undefined<a href="https://www.creative-tim.com?ref=nnjs-footer-admin" class="text-slate-500 hover:text-slate-700 text-sm font-semibold py-1">Tracer Study</a>undefined</div>undefined</div>undefined<div class="w-full md:w-8/12 px-4">undefined<ul class="flex flex-wrap list-none md:justify-end justify-center">undefined<li>undefined<a href="#" class="text-slate-600 hover:text-slate-800 text-sm font-semibold block py-1 px-3">About Us</a>undefined</li>undefined<li>undefined<a href="#" class="text-slate-600 hover:text-slate-800 text-sm font-semibold block py-1 px-3">Blog</a>undefined</li>undefined<li>undefined<a href="#" class="text-slate-600 hover:text-slate-800 text-sm font-semibold block py-1 px-3">MIT License</a>undefined</li>undefined</ul>undefined</div>undefined</div>undefined
    </div>undefined</footer>undefined
</div>



</body>


</html>