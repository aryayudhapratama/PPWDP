<?php
    //koneksi database
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "crud";

    $koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

    //jika tombol simpan di klik
    if(isset($_POST['bsimpan']))
    {
        //data edit
        if($_GET['hal'] == "edit")
        {
            //data akan di edit

            $edit = mysqli_query($koneksi, "UPDATE tmhs set
                                                nama = '$_POST[tnama]',
                                                kelas = '$_POST[tkelas]',
                                                alamat = '$_POST[talamat]',
                                                kelamin = '$_POST[tkelamin]'
                                            WHERE id_mhs = '$_GET[id]'
                                            ");
        
            if($edit)
            {
                echo "<script>
                        alert('...Edit data berhasil...');
                        document.location='crud.php';
                    </script>";
            }
            else
            {
                echo "<script>
                        alert('...Edit data gagal!!...');
                        document.location='crud.php';
                    </script>";
            }
        }else
        {
            //data akan disimpan baru

            $simpan = mysqli_query($koneksi, "INSERT INTO tmhs (nama, kelas, alamat, kelamin) 
                                                VALUES ('$_POST[tnama]',
                                                        '$_POST[tkelas]', 
                                                        '$_POST[talamat]', 
                                                        '$_POST[tkelamin]')
                                                        ");
        
            if($simpan)
            {
                echo "<script>
                        alert('...Simpan data berhasil...');
                        document.location='crud.php';
                    </script>";
            }
            else
            {
                echo "<script>
                        alert('...Simpan data gagal!!...');
                        document.location='crud.php';
                    </script>";
            }
        }




        
    }

    //tombol edit atau hapus di klik
    if(isset($_GET['hal']))
    {
        if($_GET['hal'] == "edit")
        {
            $tampil = mysqli_query($koneksi, "SELECT * FROM tmhs WHERE id_mhs = '$_GET[id]'");
            $data = mysqli_fetch_array($tampil);
            if($data)
            {
                //jika data ditemukan, maka data akan ditampung dalam variabel
                $vnama = $data['nama'];
                $vkelas = $data['kelas'];
                $valamat = $data['alamat'];
                $vkelamin = $data['kelamin'];
                
            }
        }
        else if ($_GET['hal'] == "hapus")
        {
            $hapus = mysqli_query($koneksi, "DELETE FROM tmhs WHERE id_mhs = '$_GET[id]'");
            if($hapus){
                echo "<script>
                        alert('...Hapus data berhasil...');
                        document.location='crud.php';
                    </script>";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas CRUD</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="text-center">Tugas 4 Membuat CRUD sederhana + Bootstrap</h1>

    <!--awal card form-->
    <div class="card mt-3">
        <div class="card-header bg-primary text-white">
            Form input data siswa
        </div>
        <div class="card-body">
            <form method="post" action="">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" value="<?=@$vnama?>" name="tnama" class="form-control" placeholder="Input nama anda disini" required >
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <select name="tkelas" class="form-control">
                        <option value="<?=@$vkelas?>"><?=@$vkelas?></option>
                        <option value="XI RPL">XI RPL</option>
                        <option value="XI MM">XI MM</option>
                        <option value="XI TKJ">XI TKJ</option>
                        <option value="XI MKT">XI MKT</option>
                        <option value="XI TKR">XI TKR</option>
                        <option value="XI TPM">XI TPM</option>
                        <option value="XI TL">XI TL</option>
                        <option value="XI ATPH">XI ATPH</option>
                        <option value="XI APHP">XI APHP</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="talamat" class="form-control" placeholder="Input alamat anda disini"><?=@$valamat?></textarea>
                </div>
                <div class="form-group">
                    <label>Kelamin</label>
                    <select name="tkelamin" class="form-control">
                        <option value="<?=@$vkelamin?>"><?=@$vkelamin?></option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
                <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
            </form>
        </div>
    </div>
    <!--akhir card form-->

    <!--awal card tabel-->
    <div class="card mt-3">
        <div class="card-header bg-success text-white">
            Daftar data siswa
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>Kelamin</th>
                    <th>action</th>
                </tr>
                <?php
                    $no =1;
                    $tampil = mysqli_query($koneksi, "SELECT * from tmhs order by id_mhs desc");
                    while($data = mysqli_fetch_array($tampil)) : 

                ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$data['nama']?></td>
                    <td><?=$data['kelas']?></td>
                    <td><?=$data['alamat']?></td>
                    <td><?=$data['kelamin']?></td>
                    <td>
                        <a href ="crud.php?hal=edit&id=<?=$data['id_mhs']?>" class="btn btn-warning">Edit</a>
                        <a href ="crud.php?hal=hapus&id=<?=$data['id_mhs']?>" onclick="return confirm('Apakan anda ingin menghapus data ini')" confirm( class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; // penutup perulangan while ?>
            </table>
        </div>
    </div>
    <!--akhir card tabel-->


</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>