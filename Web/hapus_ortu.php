<?php 
require 'functions.php';

$id = $_GET["id"];

if ( hapus1 ($id) > 0) {

    echo  "<script>
    alert('data Dihapus!');
    document.location.href = 'ortu.php';
    </script>
    ";
}

?>