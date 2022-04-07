<?php 
require 'functions.php';




  // Cek apakah data berhasil di tambahkan atau tidak
  if(tambah($_POST) > 0){
    echo "
    <script>
      alert('Data Berhasil Ditambahkan!');
      document. location.href = 'siswa.php'; 
    </script>";
  } else {
    echo "
    <script>
      alert('Data Gagal Ditambahkan!');
      document. location.href = 'siswa.php; 
    </script>";
  };
  




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
        <?php include 'css/tambah.css'?>
    </style>
</head>
<body>
<h1 align="center">TAMBAH DATA SISWA</h1>
<div class="back">
  <a href="siswa.php"><button class="back"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="32" height="32"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M83.3125,0c-0.77718,0.0005 -1.5161,0.33741 -2.02612,0.92383l-72.5625,83.3125c-0.87955,1.01129 -0.87955,2.51605 0,3.52734l72.5625,83.3125c0.51003,0.58642 1.24894,0.92333 2.02612,0.92383h26.875c1.05275,-0.00067 2.00816,-0.61595 2.4443,-1.5741c0.43614,-0.95815 0.27268,-2.08273 -0.41818,-2.87707l-71.02454,-81.54883l71.02454,-81.54883c0.69087,-0.79434 0.85432,-1.91892 0.41818,-2.87707c-0.43614,-0.95815 -1.39156,-1.57343 -2.4443,-1.5741zM134.375,0c-0.77718,0.0005 -1.5161,0.33741 -2.02612,0.92383l-72.5625,83.3125c-0.87955,1.01129 -0.87955,2.51605 0,3.52734l72.5625,83.3125c0.51003,0.58642 1.24894,0.92333 2.02612,0.92383h26.875c1.05275,-0.00067 2.00816,-0.61595 2.4443,-1.5741c0.43614,-0.95815 0.27268,-2.08273 -0.41818,-2.87707l-71.02454,-81.54883l71.02454,-81.54883c0.69087,-0.79434 0.85432,-1.91892 0.41818,-2.87707c-0.43614,-0.95815 -1.39156,-1.57343 -2.4443,-1.5741z"></path></g></g></svg><p>Kembali</p></button></a>
</div>
 <div class="container">
 <form action="" method="POST">
    <table align="center">
    <tr>
        
        <td><input class="input-text" type="text" size="60px" name = "nis" value = "" autocomplete="off" placeholder="NIS"></td>
      </tr>
    <tr>
       
        <td><input class="input-text" type="text" size="60px" name = "name" value = "" autocomplete="off" placeholder="NAMA"></td>
      </tr>
      <tr>
      
      <td><input class="input-text" type="text" size="60px" name = "alamat" value = "" autocomplete="off" placeholder="ALAMAT"></td>
      </tr>
      <tr>
      
        <td>
          <label  class="label" for="">Tanggal Lahir</label>
          <select class="input-text" name="tanggal" id="" required oninvalid="this.setCustomValidity('Masukkan Tanggal Lahir Anda di Sini')" oninput="this.setCustomValidity('')">
          <option value="" disabled selected>Tanggal</option>
          <?php for($i=1; $i<=31; $i++):?>
            <option value="<?= $i?>"><?= $i;?></option>
          <?php endfor;?>
          
          </select>
          <select class="input-text" name="bulan" id="" required oninvalid="this.setCustomValidity('Masukkan Bulan Lahir Anda di Sini')" oninput="this.setCustomValidity('')"> 
          <option value="" disabled selected>Bulan</option>
          <?php for($j=1; $j<=12; $j++):?>
            <option value="<?= $j?>" name="bulan"><?= $j;?></option>
          <?php endfor;?>
          </select>
          <select  class="input-text" name="tahun" id=""required oninvalid="this.setCustomValidity('Masukkan Tahun Lahir Anda di Sini')" oninput="this.setCustomValidity('')">
          <option value="" disabled selected>Tahun</option>
          <?php for($k=1980; $k<=2020; $k++):?>
            <option value="<?= $k?>"><?= $k;?></option>
          <?php endfor;?>
          </select>
          </td>
      </tr>
      <tr>
        
        <td>
          <label class="label2" for="">Jenis Kelamin</label>
        <input class="radio" type="radio" name = "gender" value = "Laki - Laki" required>  Laki - Laki
        <input type="radio" name = "gender" value = "Perempuan" required>  Perempuan
        </td>
      </tr>
      <tr>
        <td align="center"><input class=button type="submit" value = "Submit" name="submit" ></td>
      </tr>
    </table>
  </form>
 </div>


</body>

</html>