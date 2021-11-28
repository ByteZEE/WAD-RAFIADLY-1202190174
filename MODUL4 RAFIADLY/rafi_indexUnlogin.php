<?php
session_start();

require "rafi_function.php";
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
                <div class="nav-item">
                    <a href="rafi_register.php"><button class="btn btn-primary">Registrasi</button></a>
                    <a href="rafi_login.php"><button class="btn btn-primary">Login</button></a>
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
                                <a href="rafi_login.php"><button class="btn btn-primary">Pesan Tiket</button></a>
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
                                <a href="rafi_login.php"><button class="btn btn-primary">Pesan Tiket</button></a>
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
                                <a href="rafi_login.php"><button class="btn btn-primary">Pesan Tiket</button></a>
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