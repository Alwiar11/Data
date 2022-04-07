<?php 
require 'functions.php';

//ambil data dari URL
$id = $_GET["id"];
//query data mahasiswa berdasarkan id
$row = query("SELECT * FROM siswa WHERE id = $id")[0];  


//cek apakah user sudah men-submit
if(isset($_POST["submit"])){
    
    // cek apakah sudah diubah
    if ( ubah($_POST) > 0 ){
        echo "
        <script>
        alert('data Berhasil diubah!');
        document.location.href = 'siswa.php';
        </script>
        ";
    
    }else {
        echo "
        <script>
        alert('data Berhasil diubah !');
        document.location.href = 'siswa.php';
        </script>
        ";
    }
  
}
// pemisahan string
$tanggal_lahir = $row['tanggal_lahir'];
$tgl = explode(" ", $tanggal_lahir);
switch ($tgl[1]) {
  case "Januari" :
      $tgl[1] = 1;
      break; 
  case "Februari" :
      $tgl[1] = 2;
      break;
  case "Maret" :
      $tgl[1] = 3;
      break;
  case "April" :
      $tgl[1] = 4;
      break;
  case "Mei" :
      $tgl[1] = 5;
      break; 
  case "Juni" :
      $tgl[1] = 6;
      break; 
  case "Juli" :
      $tgl[1] = 7;
      break;
  case "Agustus" :
      $tgl[1] = 8;
      break; 
  case "September" :
      $tgl[1] = 9;
      break;
  case "Oktober" :
      $tgl[1] = 10;
      break;
  case "November" :
      $tgl[1] = 11;
      break;
  case "Desember" :
      $tgl[1] = 12;
      break;
  }

// masukan data dari assoc array gender ke variable
$gender = $row["jenis_kelamin"]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Siswa</title>
    <style>
        li{
            list-style: none;
        }
        <?php include 'css/tambah.css'?>
    </style>
</head>
<body>
    <h1 align="center">Ubah Data Siswa</h1>
    <div class="back">
  <a href="siswa.php"><button class="back"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="32" height="32"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M83.3125,0c-0.77718,0.0005 -1.5161,0.33741 -2.02612,0.92383l-72.5625,83.3125c-0.87955,1.01129 -0.87955,2.51605 0,3.52734l72.5625,83.3125c0.51003,0.58642 1.24894,0.92333 2.02612,0.92383h26.875c1.05275,-0.00067 2.00816,-0.61595 2.4443,-1.5741c0.43614,-0.95815 0.27268,-2.08273 -0.41818,-2.87707l-71.02454,-81.54883l71.02454,-81.54883c0.69087,-0.79434 0.85432,-1.91892 0.41818,-2.87707c-0.43614,-0.95815 -1.39156,-1.57343 -2.4443,-1.5741zM134.375,0c-0.77718,0.0005 -1.5161,0.33741 -2.02612,0.92383l-72.5625,83.3125c-0.87955,1.01129 -0.87955,2.51605 0,3.52734l72.5625,83.3125c0.51003,0.58642 1.24894,0.92333 2.02612,0.92383h26.875c1.05275,-0.00067 2.00816,-0.61595 2.4443,-1.5741c0.43614,-0.95815 0.27268,-2.08273 -0.41818,-2.87707l-71.02454,-81.54883l71.02454,-81.54883c0.69087,-0.79434 0.85432,-1.91892 0.41818,-2.87707c-0.43614,-0.95815 -1.39156,-1.57343 -2.4443,-1.5741z"></path></g></g></svg><p>Kembali</p></button></a>
</div>

    <form action="" method="POST">
    <table align="center">
    <tr>
        
        <td><input class="input-text" type="hidden" size="60px" name = "id" value = "<?= $row['id']; ?>" autocomplete="off" placeholder=""></td>
      </tr>
    <tr>
        
        <td><input class="input-text" type="text" size="60px" name = "nis" value = "<?= $row['nis']; ?>" autocomplete="off" placeholder="NIS"></td>
      </tr>
    <tr>
       
        <td><input class="input-text" type="text" size="60px" name = "name" value = "<?= $row['nama']; ?>" autocomplete="off" placeholder="NAMA"></td>
      </tr>
      <tr>
      
      <td><input class="input-text" type="text" size="60px" name = "alamat" value = "<?= $row['alamat']; ?>" autocomplete="off" placeholder="ALAMAT"></td>
      </tr>
      <tr>
      <tr>
      
      <td>
        <label  class="label" for="">Tanggal Lahir</label>
        <select class="input-text" name="tanggal" id="" required oninvalid="this.setCustomValidity('Masukkan Tanggal Lahir Anda di Sini')" oninput="this.setCustomValidity('')">
        <option value="<?= $tgl[0]; ?>" disabled selected><?= $tgl[0]; ?></option>
        <?php for($i=1; $i<=31; $i++):?>
            <option <?php echo ($tgl[0] == $i) ? "selected" : "" ?> ><?= $i ?></option>
        <?php endfor;?>
        
        </select>
        <select class="input-text" name="bulan" id="" required oninvalid="this.setCustomValidity('Masukkan Bulan Lahir Anda di Sini')" oninput="this.setCustomValidity('')"> 
        <option value="" disabled selected>Bulan</option>
        <?php for($j=1; $j<=12; $j++):?>
            <option <?php echo ($tgl[1] == $j) ? "selected" : "" ?> ><?= $j ?></option>
        <?php endfor;?>
        </select>
        <select  class="input-text" name="tahun" id=""required oninvalid="this.setCustomValidity('Masukkan Tahun Lahir Anda di Sini')" oninput="this.setCustomValidity('')">
        <option value="<?= $tgl[2]; ?>" disabled selected><?= $tgl[2]; ?></option>
        <?php for($k=1980; $k<=2020; $k++):?>
            <option <?php echo ($tgl[2] == $k) ? "selected" : "" ?> ><?= $k ?></option>
        <?php endfor;?>
        </select>
        </td>
    </tr>
    <tr>
      
      <td>
        <label class="label2" for="">Jenis Kelamin</label>
      <input class="radio" type="radio" name = "gender" value = "Laki - Laki" required <?php echo ($gender == "Laki - Laki") ? 'checked' : "" ?>>  Laki - Laki
      <input type="radio" name = "gender" value = "Perempuan" required <?php echo ($gender == "Perempuan") ? 'checked' : "" ?>>  Perempuan
      </td>
    </tr>
    <tr>
      <td align="center"><input class=button type="submit" value = "Submit" name="submit" ></td>
    </tr>
     
    </table>
  </form>


    </form>
   
</body>
</html>