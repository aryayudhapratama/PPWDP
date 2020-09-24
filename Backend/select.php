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

    <title>Form Transaksi</title>
  </head>
  <body>
    <div class="card mt-3">
        <div class="card-header bg-primary text-white">
            DATA TRANSAKSI
        </div>
        <div class="card-body">
            <form method="POST" action="simpantransaksi.php">
                <div class="form-group">
                    <label>Nama</label>
                    <select class="form-control" name="nama">
                        <option value="">Pilih Nama Anda</option>
                        <?php
                        $namapembeli = mysqli_query($database, "SELECT * FROM pembeli") or die (mysqli_error($database));
                        while ($pembeli = mysqli_fetch_array($namapembeli)){
                            echo '<option value ="'.$pembeli['id_pembeli'].'">'.$pembeli['nama'].'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>No.Telepon</label>
                    <select class="form-control" name="telepon">
                        <option value="">Pilih No.Telepon Anda</option>
                        <?php
                        $notelepon = mysqli_query($database, "SELECT * FROM pembeli") or die (mysqli_error($database));
                        while ($telepon = mysqli_fetch_array($notelepon)){
                            echo '<option value ="'.$telepon['id_pembeli'].'">'.$telepon['tlpn'].'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <select class="form-control" name="alamat">
                        <option value="">Pilih Alamat Anda</option>
                        <?php
                        $alamatpembeli = mysqli_query($database, "SELECT * FROM pembeli") or die (mysqli_error($database));
                        while ($alamat = mysqli_fetch_array($alamatpembeli)){
                            echo '<option value ="'.$alamat['id_pembeli'].'">'.$alamat['alamat'].'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <select class="form-control" name="jumlah">
                        <option value="">Pilih Jumlah Mobil Anda</option>
                        <?php
                        $jumlahmobil = mysqli_query($database, "SELECT * FROM pembeli") or die (mysqli_error($database));
                        while ($jumlah = mysqli_fetch_array($jumlahmobil)){
                            echo '<option value ="'.$jumlah['id_pembeli'].'">'.$jumlah['jumlah'].'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Merk</label>
                    <select class="form-control" name="merk">
                        <option value="">Pilih Merk Mobil Anda</option>
                        <?php
                        $merkmobil = mysqli_query($database, "SELECT * FROM pembeli") or die (mysqli_error($database));
                        while ($merk = mysqli_fetch_array($merkmobil)){
                            echo '<option value ="'.$merk['id_pembeli'].'">'.$merk['merk'].'</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Harga</label>
                    <select class="form-control" name="harga">
                        <option value="">Pilih Harga Mobil Anda</option>
                        <?php
                        $hargamobil = mysqli_query($database, "SELECT * FROM mobil") or die (mysqli_error($database));
                        while ($harga = mysqli_fetch_array($hargamobil)){
                            echo '<option value ="'.$harga['id_mobil'].'">'.$harga['harga'].'</option>';
                        }
                        ?>
                    </select>
                </div>
               
                
                <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
                <button type="reset" class="btn btn-danger">Batal</button>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>




                