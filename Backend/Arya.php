<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="Arya.css">
        <script src="https://kit.fontawesome.com/d503721210.js" crossorigin="anonymous"></script>

        <title>SHOWROOM MOBIL</title>
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
                    <h3><i class="fas fa-car mr-2"></i>JENIS MOBIL<hr></h3>

                    <div class="row text-white">
                        <div class="card bg-info ml-5" style="width: 18rem;">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-car mr-2"></i>
                                </div>
                                <h5 class="card-title">Stok Mclaren Senna</h5>
                                <div class="display-4">1</div>
                                <a href="Mclaren.php"><p class="card-text text-white">Detail Produk<i class="fas fa-angle-double-right ml-2"></i></p></a>
                            </div>
                        </div>

                        <div class="card bg-warning ml-5" style="width: 18rem;">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-car mr-2"></i>
                                </div>
                                <h5 class="card-title">Stok Ferrari LaFerrari</h5>
                                <div class="display-4">5</div>
                                <a href="Ferrari.php"><p class="card-text text-white">Detail Produk<i class="fas fa-angle-double-right ml-2"></i></p></a>
                            </div>
                        </div>

                        <div class="card bg-success ml-5" style="width: 18rem;">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-car mr-2"></i>
                                </div>
                                <h5 class="card-title">Stok Lamborgini Aventador</h5>
                                <div class="display-4">10</div>
                                <a href="Aventador.php"><p class="card-text text-white">Detail Produk<i class="fas fa-angle-double-right ml-2"></i></p></a>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="card ml-5 text-white text-center" style="width: 18rem;">
                            <div class="card-header bg-dark display-4 pt-4 pb-4">
                                <i class="fab fa-instagram"></i>
                                <h5 class="card-title text-danger">INSTAGRAM</h5>
                                <a href="#" class="btn btn-danger">FOLLOW</a>
                            </div>
                        </div>

                        <div class="card ml-5 text-white text-center" style="width: 18rem;">
                            <div class="card-header bg-dark display-4 pt-4 pb-4">
                                <i class="fab fa-facebook-f"></i>
                                <h5 class="card-title text-info">FACEBOOK</h5>
                                <a href="#" class="btn btn-info">FOLLOW</a>
                            </div>
                        </div>

                        <div class="card ml-5 text-white text-center" style="width: 18rem;">
                            <div class="card-header bg-dark display-4 pt-4 pb-4">
                                <i class="fab fa-twitter"></i>
                                <h5 class="card-title text-primary">TWITTER</h5>
                                <a href="#" class="btn btn-primary">FOLLOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Akhir Navbar -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <script type="text/javascript" src="Arya.js"></script>
  </body>
</html>