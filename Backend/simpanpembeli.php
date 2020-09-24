<?php

//koneksi database
include('koneksi.php');

//data dari form
$nama   =$_POST['namapembeli'];
$telepon    =$_POST['telepon'];
$alamat     =$_POST['alamat'];
$jumlah   =$_POST['jumlah'];
$merk    =$_POST['merk'];


$nana   ="INSERT INTO pembeli (nama, tlpn, alamat, jumlah, merk) VALUES ('$nama', '$telepon', '$alamat', '$jumlah', '$merk')"; 
$baba   = mysqli_query($database,$nana);

//pengecekan
if($baba) {

    header("location: pembeli.php");

}else{
     
    echo "Data Gagal Disimpan!!!";

}

?>