<?php 
require 'functions.php';

//ambil data dari URL
$id = $_GET["id"];
//query data mahasiswa berdasarkan id
$row = query("SELECT * FROM ortu WHERE id = $id")[0];  


//cek apakah user sudah men-submit
if(isset($_POST["submit"])){
    
    // cek apakah sudah diubah
    if (ubah1($_POST) > 0 ){
        echo "
        <script>
        alert('data Berhasil diubah!');
        document.location.href = 'ortu.php';
        </script>
        ";
    
    }else {
        echo "
        <script>
        alert('data Berhasil diuabah !');
        document.location.href = 'ortu.php';
        </script>
        ";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Orang Tua</title>
    <style>
        li{
            list-style: none;
        }
        <?php include 'css/tambah2.css'?>
    </style>
</head>
<body>
<h1 align="center">Tambah Data Orang Tua</h1>
    <div class="back">
  <a href="ortu.php"><button class="back"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="32" height="32"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M83.3125,0c-0.77718,0.0005 -1.5161,0.33741 -2.02612,0.92383l-72.5625,83.3125c-0.87955,1.01129 -0.87955,2.51605 0,3.52734l72.5625,83.3125c0.51003,0.58642 1.24894,0.92333 2.02612,0.92383h26.875c1.05275,-0.00067 2.00816,-0.61595 2.4443,-1.5741c0.43614,-0.95815 0.27268,-2.08273 -0.41818,-2.87707l-71.02454,-81.54883l71.02454,-81.54883c0.69087,-0.79434 0.85432,-1.91892 0.41818,-2.87707c-0.43614,-0.95815 -1.39156,-1.57343 -2.4443,-1.5741zM134.375,0c-0.77718,0.0005 -1.5161,0.33741 -2.02612,0.92383l-72.5625,83.3125c-0.87955,1.01129 -0.87955,2.51605 0,3.52734l72.5625,83.3125c0.51003,0.58642 1.24894,0.92333 2.02612,0.92383h26.875c1.05275,-0.00067 2.00816,-0.61595 2.4443,-1.5741c0.43614,-0.95815 0.27268,-2.08273 -0.41818,-2.87707l-71.02454,-81.54883l71.02454,-81.54883c0.69087,-0.79434 0.85432,-1.91892 0.41818,-2.87707c-0.43614,-0.95815 -1.39156,-1.57343 -2.4443,-1.5741z"></path></g></g></svg><p>Kembali</p></button></a>
</div>

    <form action="" method="post">
        <ul>
            <li align="center">
                
                <input class="input-text" size="60px" type="text" value="<?= $row['nik']; ?>" name="nik" id="nik" autocomplete="off" required placeholder="NIK">
            </li>
            <li align="center">
              
                <input class="input-text" size="60px" type="text"  value="<?= $row['nama']; ?>" name="nama" id="nama" autocomplete="off" required placeholder="NAMA">
            </li>
            <li align="center">
              
                <input class="input-text" size="60px" type="text"  value="<?= $row['pekerjaan']; ?>" name="pekerjaan" id="pekerjaan" autocomplete="off" required placeholder="PEKERJAAN"> 
            </li>
            <li align="center"> 
             
                <input class="input-text" size="60px" type="text"  value="<?= $row['nama_anak']; ?>" name="nama_anak" id="nama_anak" autocomplete="off" required placeholder="NAMA ANAK">
            </li>
            <li align="center">
              
                <input class="input-text" size="60px" type="text"  value="<?= $row['noHp']; ?>" name="noHp" id="noHp" autocomplete="off" required placeholder="NO HANDPHONE">
            </li>
            <li align="center">
               
                <input class="input-text" size="60px" type="text" value="<?= $row['alamat']; ?>" name="alamat" id="alamat" autocomplete="off" placeholder="ALAMAT">
            </li>
            <li align="center">
               
                <input class="input-text" size="60px" type="hidden" value="<?= $row['id']; ?>" name="id" id="id" autocomplete="off" >
            </li>
            <li align="center">
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>


    </form>
</body>
</html>