<?php 

$hal = $_GET["hal"];

if (isset($hal)) {
    if ($hal == "beranda") {
        include 'index.php';
    }else if($hal == "daftar") {
        include 'daftar.php';
    }else if($hal == "riwayat") {
        include 'riwayat.php';
    }else if($hal == "tentang") {
        include 'tentang.php';
    }
}

?>