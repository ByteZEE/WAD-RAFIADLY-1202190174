<?php
session_start();

if ( !isset($_SESSION["login"])) {
    header("Location: rafi_login.php");
    exit;
}

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

    <title>Profile</title>
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

    <!-- Profile -->
    <div class="container">
        <div class="container">
            <h2 class="text-center mt-3">Profile</h2>
            <form>
                <div class="form-group">
                    <div class="row">

                        <div class="col-md-3 p-3">
                            <label for="">Email</label>
                        </div>
                        <div class="col-md-9 p-3">
                            <input type="text" name="" class="form-control">
                        </div>

                        <div class="col-md-3 p-3">
                            <label for="">Nama</label>
                        </div>
                        <div class="col-md-9 p-3">
                            <input type="text" name="" class="form-control">
                        </div>

                        <div class="col-md-3 p-3">
                            <label for="">Nomor Handphone</label>
                        </div>
                        <div class="col-md-9 p-3">
                            <input type="text" name="" class="form-control">
                        </div>

                        <hr>

                        <div class="col-md-3 p-3">
                            <label for="">Kata Sandi</label>
                        </div>
                        <div class="col-md-9 p-3">
                            <input type="text" name="" class="form-control" placeholder="Kata Sandi">
                        </div>

                        <div class="col-md-3 p-3">
                            <label for="">Konfirmasi Kata Sandi</label>
                        </div>
                        <div class="col-md-9 p-3">
                            <input type="text" name="" class="form-control" placeholder="Konfirmasi Kata Sandi">
                        </div>

                        <div class="col-md-3 p-3">
                            <label for="">Warna Navbar</label>
                        </div>
                        <div class="col-md-9 p-3">
                            <input type="text" name="" class="form-control">
                        </div>

                        <div class="col-md-3 p-3">
                            <button type="button" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-warning">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!-- Footer -->
    <footer class="bg-dark text-light text-lg-start mt-5 fixed-bottom">
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