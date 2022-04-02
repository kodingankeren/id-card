<?php
   $width = 600;
   $height = 300;
   $font_1;
   $font_2;
   $font_3;
   $jarak_bawah;

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      :root{
         --warna_background: #ffff00;
         --lebar_print : 1011px;
         --tinggi_print : 638px;
      }
      body{font-size: 14pt;}
      .wrapper{width: 90%;margin: 15px auto;margin-bottom: 15px;}
      .wrap-id-card{
         background: var(--warna_background);
         width: var(--lebar_print);
         height: var(--tinggi_print);
         border: 1px solid #000;
      }
      .item-informasi{margin-top: 15px;}
      img{width: 100%;display: inline-block;}
      .bilah-kiri-belakang{width: 50%;float: left;}
      .bilah-kanan-belakang{width: 50%;float: left;}
      .atas{min-height: 450px;border-bottom: 1px solid #000;padding: 60px 15px 15px 60px;}
      .atas ol{padding: 0 0 0 15px;}
      .bawah{padding: 15px;}
      .bilah-kiri{width: 30%;float: left;}
      .bilah-kanan{width: 70%;float: left;}
      .text-center{text-align: center;}
      .text-right{text-align: right;}
      .mt-3{margin-top: 15px;}
      .p-3{padding: 15px;}
      .clear{clear: both;}
      .row::after{content:"";clear:both;display:table}
      .clear{clear: both;}
      .col-1 {width: 8.33%;}
      .col-2 {width: 16.66%;}
      .col-3 {width: 25%;}
      .col-4 {width: 33.33%;}
      .col-5 {width: 41.66%;}
      .col-6 {width: 50%;}
      .col-7 {width: 58.33%;}
      .col-8 {width: 66.66%;}
      .col-9 {width: 75%;}
      .col-10 {width: 83.33%;}
      .col-11 {width: 91.66%;}
      .col-12 {width: 100%;}
      .m-auto{margin: 0 auto;}
      .row [class*="col-"] {
         float: left;
      }
      .informasi-detail{
         padding-left: 15px;
      }
      .garis-kanan{border-right: 1px solid #000;height: var(--tinggi_print);}
      .logo{padding: 15px;margin-top: 15px;}
      .foto{margin-top: 60px;}
      .depan-bawah{margin-top: 60px;padding-left: 50px;}
      .informasi{margin-top: 30px;padding-left: 50px;}
      @media only screen and (max-width:768px){
      }
      @media print {
         .wrapper{width: 100%;margin: 15px auto;margin-bottom: 15px;}
      }
   </style>
</head>
<body>
   <div class="wrapper">
      <div class="wrap-id-card">
         <div class="bilah-kiri">
            <div class="garis-kanan">
               <div class="p-3">
                  <div class="logo">
                     <div class="col-8 m-auto">
                        <img src="logo.png" alt="">
                     </div>
                  </div>
                  <div class="foto">
                     <img src="foto.jpg" alt="">
                  </div>
               </div>
            </div>
         </div>
         <div class="bilah-kanan">
            <div class="p-3">
               <div class="text-center mt-3">
                  DINAS TENAGA KERJA <br>
                  KABUPATEN WONOGIRI <br>
                  Jl. Pemuda I No. 5 Wonogiri, 57612 Telp: 0273321029
               </div>
               <div class="informasi mt-3">
                  <div class="row item-informasi">
                     <div class="col-3">Nama </div>
                     <div class="col-1 text-center">:</div>
                     <div class="col-7">
                        Achmad Haerudin
                     </div>
                  </div>
                  <div class="row item-informasi">
                     <div class="col-3">Tingkat / Golongan </div>
                     <div class="col-1 text-center">:</div>
                     <div class="col-7">
                        Achmad
                     </div>
                  </div>
                  <div class="row item-informasi">
                     <div class="col-3">Npr / NIB </div>
                     <div class="col-1 text-center">:</div>
                     <div class="col-7">
                        Achmad
                     </div>
                  </div>
                  <div class="row item-informasi">
                     <div class="col-3">Jabatan </div>
                     <div class="col-1 text-center">:</div>
                     <div class="col-7">
                        Achmad
                     </div>
                  </div>
                  <div class="row item-informasi">
                     <div class="col-3">Satuan </div>
                     <div class="col-1 text-center">:</div>
                     <div class="col-7">
                        Achmad
                     </div>
                  </div>
                  <div class="row item-informasi">
                     <div class="col-3">Berlaku s/d </div>
                     <div class="col-1 text-center">:</div>
                     <div class="col-7">
                        Achmad
                     </div>
                  </div>
                  <div class="row item-informasi">
                     <div class="col-3">Dikeluarkan </div>
                     <div class="col-1 text-center">:</div>
                     <div class="col-7">
                        Achmad
                     </div>
                  </div>
               </div>
               <div class="row depan-bawah">
                  <div class="col-3">
                     <img src="barcode.png" alt="">
                  </div>
                  <div class="col-8">
                     <div class="p-3 text-center">
                        PENGANTAR KERJA AHLI MUDA
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <u>ACHMAD HAERUDIN</u> <br>
                        NIP. 1234567890123456


                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clear"></div>
      </div>
   </div>
   <div class="wrapper">
      <div class="wrap-id-card">
         <div class="bilah-kiri-belakang">
            <div class="garis-kanan">
               <div class="atas">
                  SINYALEMEN
                  <div class="row item-informasi">
                     <div class="col-4">Tinggi </div>
                     <div class="col-1 text-center">:</div>
                     <div class="col-7">
                        Achmad
                     </div>
                  </div>
                  <div class="row item-informasi">
                     <div class="col-4">Berat </div>
                     <div class="col-1 text-center">:</div>
                     <div class="col-7">
                        Achmad
                     </div>
                  </div>
                  <div class="row item-informasi">
                     <div class="col-4">Rambut </div>
                     <div class="col-1 text-center">:</div>
                     <div class="col-7">
                        Achmad
                     </div>
                  </div>
                  <div class="row item-informasi">
                     <div class="col-4">Mata </div>
                     <div class="col-1 text-center">:</div>
                     <div class="col-7">
                        Achmad
                     </div>
                  </div>
                  <div class="row item-informasi">
                     <div class="col-4">Kulit </div>
                     <div class="col-1 text-center">:</div>
                     <div class="col-7">
                        Achmad
                     </div>
                  </div>
                  <div class="row item-informasi">
                     <div class="col-4">Golongan Darah </div>
                     <div class="col-1 text-center">:</div>
                     <div class="col-7">
                        Achmad
                     </div>
                  </div>
                  <div class="row item-informasi">
                     <div class="col-4">Tempat Lahir </div>
                     <div class="col-1 text-center">:</div>
                     <div class="col-7">
                        Achmad
                     </div>
                  </div>
                  <div class="row item-informasi">
                     <div class="col-4">Tanggal Lahir </div>
                     <div class="col-1 text-center">:</div>
                     <div class="col-7">
                        Achmad
                     </div>
                  </div>
                  <div class="row item-informasi">
                     <div class="col-4">Agama </div>
                     <div class="col-1 text-center">:</div>
                     <div class="col-7">
                        Achmad
                     </div>
                  </div>

               </div>
               <div class="bawah text-center">
                  Tanda Tangan Pemegang
               </div>
            </div>
         </div>
         <div class="bilah-kanan-belakang">
            <div class="atas">
               SIMARITAS
               <ol>
                  <li>Satu</li>
                  <li>Dia</li>
                  <li>Tiga</li>
               </ol>
            </div>
            <div class="bawah text-center">
               Alamat Pemegang
               <br>
               <br>
               Jl. Hoscokroaminoto No. 98, Kepanjen
            </div>
         </div>
         <div class="clear"></div>
      </div>
   </div>
</body>
</html>
