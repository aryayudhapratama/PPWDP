<?php

//koneksi database
include('koneksi.php');

//data dari form
$merk   =$_POST['merk'];
$harga    =$_POST['harga'];


$kiki   ="INSERT INTO mobil (merk, harga) VALUES ('$merk', '$harga')"; 
$kuku   = mysqli_query($database,$kiki);

//pengecekan
if($kuku) {

    header("location: jenis_mobil.php");

}else{
     
    echo "Data Gagal Disimpan!!!";

}

?>