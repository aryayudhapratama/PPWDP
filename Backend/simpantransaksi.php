<?php

//koneksi database
include('koneksi.php');

//data dari form
$nama   =$_POST['nama'];
$telepon    =$_POST['telepon'];
$alamat     =$_POST['alamat'];
$jumlah   =$_POST['jumlah'];
$merk    =$_POST['merk'];
$harga  =$_POST['harga'];


$dudu   = mysqli_query($database, "INSERT INTO jual (id_pembeli, tlpn, alamat, jumlah, merk, id_mobil) VALUES ('$nama', '$telepon', '$alamat', '$jumlah', '$merk', '$harga')"); 

//pengecekan
if($dudu) {

    header("location: Transaksi.php");

}else{
     
    echo "Data Gagal Disimpan!!!";

}

?>