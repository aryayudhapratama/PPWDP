<?php
include("koneksi.php");
?>

<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="Transaksi.css">
        <script src="https://kit.fontawesome.com/d503721210.js" crossorigin="anonymous"></script>

        <title>TRANSAKSI</title>
  </head>
  <body>
        <!-- Awal Navbar -->

            <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
                <a class="navbar-brand" href="#">HALAMAN ADMIN | SHOWROOM</a>
                
                    <form class="form-inline my-2 my-lg-0 ml-auto">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <div class="icon ml-4">
                        <h5>
                            <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Pesan Masuk"></i>
                            <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
                            <i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Keluar"></i>
                        </h5>
                    </div>
                </div>
            </nav>

            <div class="row no-gutters mt-5">
                <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
                    <ul class="nav flex-column ml-3 mb-5">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="Arya.php"><i class="fas fa-home mr-2"></i>Home</a><hr class="bg-secondary">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="jenis_mobil.php"><i class="fas fa-car mr-2"></i>Jenis Mobil</a><hr class="bg-secondary">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="Pembeli.php"><i class="fas fa-user mr-2"></i>Pembeli</a><hr class="bg-secondary">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="Transaksi.php"><i class="fas fa-receipt mr-2"></i>Transaksi</a><hr class="bg-secondary">
                        </li>
                    </ul>
                </div>
                <div class="col-md-10 p-5 pt-2">
                    <h3><i class="fas fa-receipt mr-2"></i>TRANSAKSI<hr></h3>
                    <!-- Awal form -->
                    <div class="tombol">
                        <a href="select.php"><button type="submit" class="btn btn-primary ml-5 mt-1">Form Pembeli</button></a>
                        </div>
                    <!-- Awal form -->

                    <!-- Awal Tabel -->
                    <div class="card mt-3">
                        <div class="card-header bg-dark text-white">
                            DATA TRANSAKSI
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Telepon</th>
                                    <th>Alamat</th>
                                    <th>Jumlah</th>
                                    <th>Merk</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php

                                $dudu = "SELECT * FROM jual
                                        INNER JOIN pembeli ON jual.id_pembeli = pembeli.id_pembeli
                                        INNER JOIN mobil ON jual.id_mobil = mobil.id_mobil
                                
                                ";
                                $didi = mysqli_query($database,$dudu);

                                while($jual = mysqli_fetch_array($didi)){
                                    ?>

                                    <tr>
                                        <td><?php echo $jual['id_jual'] ?></td>
                                        <td><?php echo $jual['nama'] ?></td>
                                        <td><?php echo $jual['tlpn'] ?></td>
                                        <td><?php echo $jual['alamat'] ?></td>
                                        <td><?php echo $jual['jumlah'] ?></td>
                                        <td><?php echo $jual['merk'] ?></td>
                                        <td><?php echo $jual['harga'] ?></td>
                                        <td class="">
                                            <a href=""></a>
                                            <a href=""></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>

                                
                            </table>
                        </div>
                    </div>
                    <!-- Akhir Tabel -->
                </div>
            </div>

        <!-- Akhir Navbar -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <script type="text/javascript" src="Transaksi.js"></script>
  </body>
</html>