<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "12345", "alwi");

function query ($query){ 
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;

}

function tambah ($data){
    global $conn;
    if ( isset($data["submit"])){
        if( isset ($data["bulan"])){ 
          if($data["bulan"] == "1"){
            $data["bulan"] = "Januari";
          } else if ($data["bulan"] == "2"){
            $data["bulan"] = "Februari";
          }else if ($data["bulan"] == "3"){
            $data["bulan"] = "Maret";
          }else if ($data["bulan"] == "4"){
            $data["bulan"] = "April";
          }else if ($data["bulan"] == "5"){
            $data["bulan"] = "Mei";
          }else if ($data["bulan"] == "6"){
            $data["bulan"] = "Juni";
          }else if ($data["bulan"] == "7"){
            $data["bulan"] = "Juli";
          }else if ($data["bulan"] == "8"){
            $data["bulan"] = "Agustus";
          }else if ($data["bulan"] == "9"){
            $data["bulan"] = "September";
          }else if ($data["bulan"] == "10"){
            $data["bulan"] = "Oktober";
          }else if ($data["bulan"] == "11"){
            $data["bulan"] = "November";
          }else if ($data["bulan"] == "12"){
            $data["bulan"] = "Desember";
          }
        }
      $tanggal = $data['tanggal'];
          $bulan = $data['bulan'];
          $tahun = $data['tahun'];
          $tanggal_lahir = $tanggal." ".$bulan." ".$tahun;
      
          $name = $data['name'];
          $alamat = $data['alamat']; 
          $gender = $data['gender'];
          $nis = $data['nis'];
        
          // query insert data
          $insert = mysqli_query($conn, "INSERT INTO siswa (nis, nama, alamat, tanggal_lahir, jenis_kelamin) VALUES ('$nis','$name', '$alamat', '$tanggal_lahir', '$gender')");
        
          return mysqli_affected_rows($conn);
    }
}

function hapus ($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah ($data){
    global $conn;
    if ( isset($data["submit"])){
        if( isset ($data["bulan"])){ 
          if($data["bulan"] == "1"){
            $data["bulan"] = "Januari";
          } else if ($data["bulan"] == "2"){
            $data["bulan"] = "Februari";
          }else if ($data["bulan"] == "3"){
            $data["bulan"] = "Maret";
          }else if ($data["bulan"] == "4"){
            $data["bulan"] = "April";
          }else if ($data["bulan"] == "5"){
            $data["bulan"] = "Mei";
          }else if ($data["bulan"] == "6"){
            $data["bulan"] = "Juni";
          }else if ($data["bulan"] == "7"){
            $data["bulan"] = "Juli";
          }else if ($data["bulan"] == "8"){
            $data["bulan"] = "Agustus";
          }else if ($data["bulan"] == "9"){
            $data["bulan"] = "September";
          }else if ($data["bulan"] == "10"){
            $data["bulan"] = "Oktober";
          }else if ($data["bulan"] == "11"){
            $data["bulan"] = "November";
          }else if ($data["bulan"] == "12"){
            $data["bulan"] = "Desember";
          }
        }
       
        $tanggal = $data['tanggal'];
          $bulan = $data['bulan'];
          $tahun = $data['tahun'];
          $tanggal_lahir = $tanggal." ".$bulan." ".$tahun;
      
          $name = $data['name'];
          $alamat = $data['alamat']; 
          $gender = $data['gender'];
          $nis = $data['nis'];
          $id = $data['id'];
        
          // query insert data
          $query = "UPDATE siswa SET
          nis = '$nis',
          nama = '$name',
          alamat = '$alamat',
          tanggal_lahir = '$tanggal_lahir',
          jenis_kelamin = '$gender'
          WHERE id = '$id'
  ";
          mysqli_query($conn, $query);
          return mysqli_affected_rows($conn);
}


}

function cari($keyword){
    $query = "SELECT * FROM siswa
            WHERE 
        nis LIKE '%$keyword%' OR
        nama LIKE '%$keyword%' 
        
    ";
    return query($query);
}
function tambah1 ($data){
    global $conn;
    $nik = htmlspecialchars($data["nik"]);
    $nama =  htmlspecialchars($data["nama"]);
    $pekerjaan = htmlspecialchars($data["pekerjaan"]);
    $nama_anak = htmlspecialchars($data["nama_anak"]);
    $noHp = htmlspecialchars($data["noHp"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "INSERT INTO ortu (nik, nama, pekerjaan, nama_anak ,noHp, alamat) VALUES 
    ('$nik', '$nama', '$pekerjaan', '$nama_anak','$noHp', '$alamat')";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);


}
function hapus1 ($id){
  global $conn;
  mysqli_query($conn, "DELETE FROM ortu WHERE id = $id");

  return mysqli_affected_rows($conn);
}
function ubah1 ($data){
    global $conn;
    $nik = htmlspecialchars($data["nik"]);
    $nama =  htmlspecialchars($data["nama"]);
    $pekerjaan = htmlspecialchars($data["pekerjaan"]);
    $nama_anak = htmlspecialchars($data["nama_anak"]);
    $noHp = htmlspecialchars($data["noHp"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $id = ($data["id"]);
    
    $query = "UPDATE ortu SET
    nik = '$nik',
    nama = '$nama',
    pekerjaan = '$pekerjaan',
    nama_anak = '$nama_anak',
    noHp = '$noHp',
    alamat = '$alamat'
    WHERE id = $id
";

    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function cari1($keyword){
  $query = "SELECT * FROM ortu
          WHERE 
      nik LIKE '%$keyword%' OR
      nama LIKE '%$keyword%' OR
      nama_anak LIKE '%$keyword%' 
      
  ";
  return query($query);
}
?>

