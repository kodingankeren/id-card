<?php
   $width_cm = isset($_GET['w']) ? $_GET['w'] : 8.1; // dalam cm
   $height_cm = isset($_GET['h']) ? $_GET['h'] : 5.2; // dalam cm


   $default_width_foto_cm = 2.9; // dalam cm
   $default_height_foto_cm = 3.7; // dalam cm

   $dpi = 300; // Sesuaikan dengan print yang dipakai


   $pixel_convert = $dpi / 2.54; // jangan di ubah

   $width = $width_cm * $pixel_convert;
   $height = $height_cm * $pixel_convert;
   
   $default_width_foto = $default_width_foto_cm * $pixel_convert;
   $default_height_foto = $default_height_foto_cm * $pixel_convert;

   $width_foto = $width / ($width / $default_width_foto);
   $height_foto = $height / ($height / $default_height_foto);

   $convert_pixel = 2.54 / 300;
   $convert_size = $convert_pixel * $pixel_convert;

   $pixel_14 = $convert_size * 14;
   $pixel_15 = $convert_size * 15;
   $pixel_30 = $convert_size * 30;
   $pixel_50 = $convert_size * 50;
   $pixel_60 = $convert_size * 60;
   $pixel_162 = $convert_size * 162;
   $pixel_274 = $convert_size * 274;
   $pixel_450 = $convert_size * 450;

   $jarak_text = $height / ($height / $pixel_15);
   
   $font_1 = $height / ($height / $pixel_14);

   $h_15 = $height / ($height / $pixel_15);
   
   $h_30 = $height / ($height / $pixel_30);

   $h_60 = $height / ($height / $pixel_60);
   $h_162 = $height / ($height / $pixel_162);
   $h_274 = $height / ($height / $pixel_274);
   $h_450 = $height / ($height / $pixel_450);
   
   $w_15 = $width / ($width / $pixel_15);
   $w_50 = $width / ($width / $pixel_50);
   $w_60 = $width / ($width / $pixel_60);
   

   $width_bilah_kiri = $width_foto + ($w_15 * 2);
   $width_bilah_kanan = $width - $width_bilah_kiri;
   $height_logo = ($height - $height_foto) - ($h_15 * 3);

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
         --lebar_print : <?php echo $width; ?>px;
         --tinggi_print : <?php echo $height; ?>px;
         --jarak_text : <?php echo $jarak_text; ?>px;
         
         --h_15 : <?php echo $h_15; ?>px;
         --h_30 : <?php echo $h_30; ?>px;
         --h_60 : <?php echo $h_60; ?>px;
         --h_162 : <?php echo $h_162; ?>px;
         --h_274 : <?php echo $h_274; ?>px;
         --h_450 : <?php echo $h_450; ?>px;
         
         --w_15 : <?php echo $w_15; ?>px;
         --w_50 : <?php echo $w_50; ?>px;
         --w_60 : <?php echo $w_60; ?>px;

         --font_satu : <?php echo $font_1; ?>pt;
      }
      body{font-size: var(--font_satu);}
      .wrapper{width: 90%;margin: 15px auto;margin-bottom: 15px;}
      .wrap-id-card{
         background: var(--warna_background);
         width: var(--lebar_print);
         height: var(--tinggi_print);
         border: 1px solid #000;
      }
      .item-informasi{margin-top: var(--jarak_text);}
      .bingkai-kanan{padding: var(--h_15) var(--w_15) var(--h_15) var(--w_15);}
      
      .bilah-kiri{width: <?php echo $width_bilah_kiri; ?>px;float: left;}
      .bilah-kanan{width: <?php echo $width_bilah_kanan; ?>px;float: left;}

      .informasi{margin-top: var(--h_30);}
      .depan-bawah{margin-top: var(--h_30);padding-left: var(--w_50);}
      img{width: 100%;display: inline-block;}
      .bilah-kiri-belakang{width: 50%;float: left;}
      .bilah-kanan-belakang{width: 50%;float: left;}
      .atas{min-height: var(--h_450);
         border-bottom: 1px solid #000;
         padding: var(--h_60) var(--w_15) var(--h_15) var(--w_60);}
      .atas ol{padding: 0 0 0 var(--w_15);}
      .bawah{padding: var(--h_15) var(--w_15) var(--h_15) var(--w_15);}

      .text-center{text-align: center;}
      .text-right{text-align: right;}
      .mt-3{margin-top: var(--h_15);}
      .p-3{padding: var(--h_15) var(--w_15) var(--h_15) var(--w_15);}
      .pt-3{padding-top: var(--h_15);}
      .pb-3{padding-bottom: var(--h_15)}
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
      .garis-kanan{border-right: 1px solid #000;height: var(--tinggi_print);}
      /*.logo{padding: var(--h_15) var(--w_15) var(--h_15) var(--w_15);margin-top: var(--h_15);}*/
      /*.foto{margin-top: var(--h_60);padding: var(--h_15) var(--w_15) var(--h_15) var(--w_15);}*/
      .logo{margin-bottom: var(--h_15);}
      .foto img{
         display: block;margin: 0 auto;
         height: <?php echo $height_foto; ?>px;
         width: <?php echo $width_foto; ?>px;
      }
      .logo img{display: block;margin: 0 auto;height: <?php echo $height_logo; ?>px;width: auto;}
      
      @media only screen and (max-width:768px){
      }
      @media print {

      body{width: 300000px;}
      .wrapper{float: left;width: var(--lebar_print);margin: 0;}
      }


   </style>
</head>
<body>
   
   <div class="wrapper">
      <div class="wrap-id-card">
         <div class="bilah-kiri">
            <div class="garis-kanan">
               <div class="pt-3 pb-3">
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
            <div class="bingkai-kanan">
               <div class="text-center">
                  DINAS TENAGA KERJA <br>
                  DINAS TENAGA KERJA <br>
                  DINAS TENAGA KERJA <br>
                  KABUPATEN WONOGIRI <br>
                  KABUPATEN WONOGIRI <br>
                  KABUPATEN WONOGIRI <br>
                  Jl. Pemuda I No. 5 Wonogiri, 57612 Telp: 0273321029
               </div>
               <div class="informasi">
                  <div class="row item-informasi">
                     <div class="col-4">Nama </div>
                     <div class="col-1 text-center">:</div>
                     <div class="col-7">
                        Achmad Haerudin
                     </div>
                  </div>
                  <div class="row item-informasi">
                     <div class="col-4">Tingkat / Golongan </div>
                     <div class="col-1 text-center">:</div>
                     <div class="col-7">
                        Achmad
                     </div>
                  </div>
                  <div class="row item-informasi">
                     <div class="col-4">Npr / NIB </div>
                     <div class="col-1 text-center">:</div>
                     <div class="col-7">
                        Achmad
                     </div>
                  </div>
                  <div class="row item-informasi">
                     <div class="col-4">Jabatan </div>
                     <div class="col-1 text-center">:</div>
                     <div class="col-7">
                        Achmad
                     </div>
                  </div>
                  <div class="row item-informasi">
                     <div class="col-4">Satuan </div>
                     <div class="col-1 text-center">:</div>
                     <div class="col-7">
                        Achmad
                     </div>
                  </div>
                  <div class="row item-informasi">
                     <div class="col-4">Berlaku s/d </div>
                     <div class="col-1 text-center">:</div>
                     <div class="col-7">
                        Achmad
                     </div>
                  </div>
                  <div class="row item-informasi">
                     <div class="col-4">Dikeluarkan </div>
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
                     <div class="text-center">
                        PENGANTAR KERJA AHLI MUDA
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
               
               Jl. Hoscokroaminoto No. 98, Kepanjen
            </div>
         </div>
         <div class="clear"></div>
      </div>
   </div>
</body>
</html>
