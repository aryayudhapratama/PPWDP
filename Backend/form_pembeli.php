<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Form Pembeli</title>
  </head>
  <body>
    <div class="card mt-3">
        <div class="card-header bg-primary text-white">
            FORMULIR PEMBELI
        </div>
        <div class="card-body">
            <form method="POST" action="simpanpembeli.php">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="namapembeli" class="form-control" placeholder="Input Nama Anda Disini" required >
                </div>
                <div class="form-group">
                    <label>No.Telepon</label>
                    <input type="text" name="telepon" class="form-control" placeholder="Input No.Telepon Anda Disini" required >
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" placeholder="Input Alamat Anda Disini"></textarea>
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" placeholder="Input Jumlah Mobil Disini" required >
                </div>
                <div class="form-group">
                    <label>Merk</label>
                    <select class="form-control" name="merk">
                        <option value="#"></option>
                        <option >Mclaren Senna</option>
                        <option >Lamborgini Aventador</option>
                        <option >Ferrari LaFerrari</option>
                        <option >Koenigsegg Agera RSR</option>
                        <option >Bugatti Chiron</option>
                        <option >Tesla Model X</option>
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




                