<?php 
require 'functions.php';
$ortu = query("SELECT * FROM ortu");

// tombol cari ditekan
if(isset($_POST["cari"]) ) {
    $ortu = cari1($_POST["keyword"]);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>
        <?php include 'css/ortu.css'?>
    </style>
</head>
<body>
    
    <h1 align="center">DAFTAR ORANG TUA</h1>
<div class="con">
<a href="siswa.php"><button><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="25" height="25"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M106.41156,111.89406c-0.51063,-5.54969 -0.30906,-9.41969 -0.30906,-14.48563c2.51281,-1.31687 7.01438,-9.71531 7.76688,-16.81031c1.97531,-0.16125 5.09281,-2.08281 6.00656,-9.68844c0.48375,-4.085 -1.46469,-6.38281 -2.66062,-7.10844c3.21156,-9.66156 9.89,-39.56 -12.33563,-42.65062c-2.29781,-4.01781 -8.15656,-6.04688 -15.76219,-6.04688c-30.46281,0.56438 -34.13125,23.005 -27.45281,48.6975c-1.19594,0.72563 -3.14437,3.02344 -2.66062,7.10844c0.92719,7.60563 4.03125,9.52719 6.00656,9.68844c0.7525,7.095 5.42875,15.49344 7.955,16.81031c0,5.06594 0.18812,8.93594 -0.3225,14.48563c-6.02,16.20562 -46.68188,11.65031 -48.56313,42.90594h130.72c-1.88125,-31.25562 -42.36844,-26.70031 -48.38844,-42.90594z"></path></g></g></svg><p>Daftar<br>Siswa</p></button></a>

<a href="index.php"><button><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="30" height="30"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M0,25.8v17.2h172v-17.2zM0,77.4v17.2h172v-17.2zM0,129v17.2h172v-17.2z"></path></g></g></svg><p>MENU</p></button></a>


<a href="tambah_ortu.php"><button class="tambah"><svg  xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="25" height="25"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,6.88c-43.62952,0 -79.12,35.49048 -79.12,79.12c0,43.62952 35.49048,79.12 79.12,79.12c43.62952,0 79.12,-35.49048 79.12,-79.12c0,-43.62952 -35.49048,-79.12 -79.12,-79.12zM110.08,89.44h-20.64v20.64c0,1.90232 -1.53768,3.44 -3.44,3.44c-1.90232,0 -3.44,-1.53768 -3.44,-3.44v-20.64h-20.64c-1.90232,0 -3.44,-1.53768 -3.44,-3.44c0,-1.90232 1.53768,-3.44 3.44,-3.44h20.64v-20.64c0,-1.90232 1.53768,-3.44 3.44,-3.44c1.90232,0 3.44,1.53768 3.44,3.44v20.64h20.64c1.90232,0 3.44,1.53768 3.44,3.44c0,1.90232 -1.53768,3.44 -3.44,3.44z"></path></g></g></svg><p>Tambah<br>Orang Tua</p></button></a>
       
</div>
  
     
   
    <form action="" method="post" align="center">

    <input type="text" name="keyword" size="60" autofocus
placeholder="Search Siswa" autocomplete="off">
<button type="submit" name="cari"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="18" height="18"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M72.24,10.32c-32.33062,0 -58.48,26.14938 -58.48,58.48c0,32.33063 26.14938,58.48 58.48,58.48c11.54281,0 22.22563,-3.38625 31.2825,-9.1375l42.2475,42.2475l14.62,-14.62l-41.71,-41.6025c7.49813,-9.83625 12.04,-22.02406 12.04,-35.3675c0,-32.33062 -26.14937,-58.48 -58.48,-58.48zM72.24,24.08c24.76531,0 44.72,19.95469 44.72,44.72c0,24.76531 -19.95469,44.72 -44.72,44.72c-24.76531,0 -44.72,-19.95469 -44.72,-44.72c0,-24.76531 19.95469,-44.72 44.72,-44.72z"></path></g></g></svg></button>
<br><br>


    </form>
<div class="table">
    <div class="header_fixed">
        <table >
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Nama Anak</th>
                    <th>Pekerjaan</th>
                    <th>No Handphone</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
   
    <?php $i = 1; ?>
   <?php foreach ( $ortu as $row ) : ?>
    <tbody>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $row["nik"]?></td>
        <td><?= $row["nama"] ?></td>
        <td><?= $row["nama_anak"] ?></td>
        <td><?= $row["pekerjaan"] ?></td>
        <td><?= $row["noHp"] ?></td>
        <td><?= $row["alamat"] ?></td>
        <td>
            <a href="ubah_ortu.php?id=<?= $row["id"]; ?>"><button class="warna"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="18" height="18"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M21.5,10.69401c-5.934,0 -10.75,4.816 -10.75,10.75v129c0,2.85233 1.13558,5.57958 3.14941,7.60058c2.021,2.01383 4.74825,3.14941 7.60059,3.14942h128.95801c2.86667,0 5.61475,-1.13525 7.62858,-3.16342c2.021,-2.02817 3.14292,-4.78308 3.12142,-7.64258c-0.086,-16.82733 -0.30794,-57.30534 -0.30794,-57.30534c-0.01433,-1.978 -1.63333,-3.5625 -3.61133,-3.55533c-1.978,0.01433 -3.56967,1.61933 -3.55534,3.59733c0,0 0.22194,40.464 0.30794,57.29134c0.00717,0.95317 -0.36215,1.88069 -1.03581,2.56152c-0.67367,0.67367 -1.59435,1.0498 -2.54752,1.04981h-128.95801c-0.95317,0 -1.85986,-0.38331 -2.53353,-1.04981c-0.6665,-0.67367 -1.0498,-1.58036 -1.0498,-2.53352v-129c0,-1.978 1.60533,-3.58333 3.58333,-3.58333h64.5c1.978,0 3.58333,-1.60533 3.58333,-3.58333c0,-1.978 -1.60533,-3.58333 -3.58333,-3.58333zM125.16472,11.67383c-2.84517,0 -5.58675,1.12158 -7.60059,3.13542l-15.21517,15.21517l-43.50391,43.50391c-2.01383,2.01383 -3.14941,4.75541 -3.14941,7.60058v32.50196c0,1.978 1.60533,3.58333 3.58333,3.58333h32.51595c2.84517,0 5.57276,-1.12158 7.58659,-3.13542l43.5179,-43.51791l15.20117,-15.20117c2.01383,-2.01383 3.14941,-4.75542 3.14941,-7.60059c0,-2.85233 -1.13558,-5.58675 -3.14941,-7.60059l-25.33528,-25.34928c-2.01383,-2.01383 -4.74825,-3.13542 -7.60059,-3.13542zM125.16472,18.84049c0.95317,0 1.85986,0.37614 2.53352,1.0498l25.33529,25.33529c0.6665,0.67367 1.0498,1.58036 1.0498,2.53353c0,0.946 -0.3833,1.85986 -1.0498,2.53353l-12.66764,12.66764l-30.40235,-30.40234l12.66764,-12.66764c0.67367,-0.67367 1.58753,-1.0498 2.53353,-1.0498zM104.89649,37.625l30.40234,30.40234l-40.98438,40.98438c-0.67367,0.66649 -1.57353,1.03581 -2.51953,1.03581h-28.93262v-28.91863c0,-0.94599 0.39014,-1.85986 1.0638,-2.53352z"></path></g></g></svg></button></a> 
<a href="hapus_ortu.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?')"><button class="warna"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="18" height="18"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M85.91042,14.25495c-3.16203,0.04943 -5.68705,2.6496 -5.64375,5.81172v2.86667h-31.53333c-1.53406,-0.02082 -3.01249,0.574 -4.10468,1.65146c-1.09219,1.07746 -1.70703,2.54767 -1.70704,4.08187h-8.52161c-2.06765,-0.02924 -3.99087,1.05709 -5.03322,2.843c-1.04236,1.78592 -1.04236,3.99474 0,5.78066c1.04236,1.78592 2.96558,2.87225 5.03322,2.843h103.2c2.06765,0.02924 3.99087,-1.05709 5.03322,-2.843c1.04236,-1.78592 1.04236,-3.99474 0,-5.78066c-1.04236,-1.78592 -2.96558,-2.87225 -5.03322,-2.843h-8.52161c-0.00001,-1.53421 -0.61486,-3.00442 -1.70704,-4.08187c-1.09219,-1.07746 -2.57061,-1.67228 -4.10468,-1.65146h-31.53333v-2.86667c0.02122,-1.54972 -0.58581,-3.04203 -1.68279,-4.1369c-1.09698,-1.09487 -2.59045,-1.69903 -4.14013,-1.67482zM34.4,51.6l10.27969,87.34375c0.67653,5.77347 5.56348,10.12292 11.37708,10.12292h59.88646c5.8136,0 10.69482,-4.34945 11.37708,-10.12292l10.27969,-87.34375z"></path></g></g></svg></button></a>
         </td>
        
    </tr>
    </tbody>
    <?php $i++; ?>
    <?php  endforeach;?>


    </table>
   

    </div>
    </div>

</body>
</html>