<?php 
require 'functions.php';

$id = $_GET["id"];

if ( hapus ($id) > 0) {

    echo  "<script>
    alert('data Dihapus!');
    document.location.href = 'siswa.php';
    </script>
    ";
}

?>