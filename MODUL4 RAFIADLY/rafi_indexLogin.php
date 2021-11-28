<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: rafi_login.php");
    exit;
}

require "rafi_function.php";

if (isset($_POST["tambahkan"])) {
    $user_id = $_SESSION['id'];
    $tempat = $_POST['tempat'];
    $lokasi = $_POST['lokasi'];
    $tanggal = $_POST['tanggal'];
    $harga = $_POST['harga'];

    $query = "INSERT INTO bookings VALUES ('', '$user_id', '$tempat', '$lokasi', '$harga', '$tanggal')";
    mysqli_query($conn, $query);

    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">';
    echo 'Tiket berhasil dipesan';
    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>';
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <title>Index</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><b>EAD Travel</b></a>
            <!-- <a class="navbar-brand" href="Rafi_Home.php"><img src="logo-ead.png" alt="" width="150"><a> -->

            <div class="navbar-nav ms-auto">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item mt-2">
                            <a href="rafi_bookings.php"><i style="font-size: 30px; color: white; margin-right:10px;" class="fas fa-shopping-cart"></i></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i style="font-size: 30px; color: white;" class="far fa-user"></i>
                            </a>
                            <ul class="dropdown-menu me-3" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="rafi_profile.php">Profile</a></li>
                                <li><a class="dropdown-item" href="rafi_logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <div class="container mt-3">

        <div class="row">
            <div class="col text-center">
                <h1>EAD Travel</h1>
            </div>
        </div>

        <div class="container mt-1">
            <div class="row">
                <div class="col-4">
                    <div class="card" style="width: 22rem;">
                        <img src="./place/raja ampat.jpg" class="card-img-top" height="250">
                        <div class="card-body">
                            <h5 class="card-title">Raja Ampat, Papua</h5>
                            <p class="card-text">Kabupaten Raja Ampat adalah salah satu kabupaten di provinsi Papua Barat, Indonesia. Ibukota kabupaten ini terletak di Waisai. Kabupaten ini memiliki 610 pulau, termasuk kepulauan Raja Ampat. Empat di antaranya, yakni Pulau Misool, Salawati, Batanta dan Waigeo, merupakan pulau-pulau besar.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold">Rp7.000.000</li>
                        </ul>
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="button" name="tiket" value="RajaAmpat" data-bs-toggle="modal" data-bs-target="#rajaampat">Pesan Tiket</button>
                            </div>

                            <div class="modal fade" id="rajaampat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tanggal Perjalanan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="POST">
                                                <div class="mb-3">
                                                    <input type="date" id="tanggal" name="tanggal" class="form-control">
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" name="tempat" value="Raja Ampat">
                                                    <input type="hidden" name="lokasi" value="Papua">
                                                    <input type="hidden" name="harga" value="7000000">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="tambahkan" value="Raja Ampat">Tambahkan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" style="width: 22rem;">
                        <img src="./place/bromo.jpg" class="card-img-top" height="250">
                        <div class="card-body">
                            <h5 class="card-title">Gunung Bromo, Malang</h5>
                            <p class="card-text">Gunung Bromo atau dalam bahasa Tengger dieja "Brama", adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold">Rp2.000.000</li>
                        </ul>
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="button" name="tiket" value="GunungBromo" data-bs-toggle="modal" data-bs-target="#gunungbromo">Pesan Tiket</button>
                            </div>

                            <div class="modal fade" id="gunungbromo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tanggal Perjalanan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="POST">
                                                <div class="mb-3">
                                                    <input type="date" id="tanggal" name="tanggal" class="form-control">
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" name="tempat" value="Gunung Bromo">
                                                    <input type="hidden" name="lokasi" value="Malang">
                                                    <input type="hidden" name="harga" value="2000000">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="tambahkan" value="GunungBromo">Tambahkan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" style="width: 22rem;">
                        <img src="./place/tanah lot.jpg" class="card-img-top" height="250">
                        <div class="card-body">
                            <h5 class="card-title">Tanah Lot, Bali</h5>
                            <p class="card-text">Pura Tanah Lot adalah salah satu Pura yang sangat disucikan di Bali, Indonesia. Di sini ada dua pura yang terletak di atas batu besar. Satu terletak di atas bongkahan batu dan satunya terletak di atas tebing mirip dengan Pura Uluwatu. Pura Tanah Lot ini merupakan bagian dari pura Dang Kahyangan.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bold">Rp5.000.000</li>
                        </ul>
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="button" name="tiket" value="TanahLot" data-bs-toggle="modal" data-bs-target="#tanahlot">Pesan Tiket</button>
                            </div>

                            <div class="modal fade" id="tanahlot" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tanggal Perjalanan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="POST">
                                                <div class="mb-3">
                                                    <input type="date" id="tanggal" name="tanggal" class="form-control">
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" name="tempat" value="Tanah Lot">
                                                    <input type="hidden" name="lokasi" value="Bali">
                                                    <input type="hidden" name="harga" value="5000000">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="tambahkan" value="TanahLot">Tambahkan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Footer -->
    <footer class="bg-dark text-light text-lg-start mt-5">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            ©2021 Copyright: RAFIADLY_1202190174
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>