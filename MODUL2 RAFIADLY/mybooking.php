<!doctype html>
<html lang="en">
    <head>  
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>My Booking</title>
    </head>
    <body>

        <!-- php -->
            <?php
                if (isset ($_POST["book"])) {
                    $nama = $_POST["name"];
                    $tanggal = $_POST["eventdate"];
                    $waktu = $_POST["startTime"];
                    $durasi = $_POST["duration"];
                    $tipeGedung = $_POST["buildingType"];
                    $telepon = $_POST["phone"];
                    $layanan = $_POST["services"];
                    $nomorBooking = rand();
                    $checkIn = date("m-d-Y H:i:s", strtotime("$tanggal $waktu"));
                    $checkOut = date("m-d-Y H:i:s", strtotime($durasi . " " . "hours" , strtotime($checkIn)));

                    if ($tipeGedung == "nusantarahall") {
                        $hargaGedung = 2000;
                    }
                    elseif ($tipeGedung == "garudahall") {
                        $hargaGedung = 1000;
                    }
                    elseif ($tipeGedung == "gedungserbaguna") {
                        $hargaGedung = 500;
                    }

                    $totalLayanan = 0;
                    foreach ($layanan as $layanan1) {
                        if ($layanan1 = "catering"){
                            $totalLayanan += 700;
                        }
                        elseif ($layanan1 = "decoration"){
                            $totalLayanan += 450;
                        }
                        elseif ($layanan1 = "sound"){
                            $totalLayanan += 250;
                        }
                    }

                    $totalPrice = $hargaGedung * $durasi + $totalLayanan;
                }
            ?>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="booking.php">Booking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Home -->
        <div class="jumbotron jumbotron-fluid mt-5 mb-5 p-3">
            <div class="container">
                <div class="col text-center mt-3 mx-auto">
                    <h3 style="color: Black;" class="mt-2 mb-3">Thank you Rafiadly_1202190174 for Reversing</h3>
                    <h4 style="color: Black;" class="mt-2 mb-3">Please double check your reservation details</h4>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Booking Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Check-in</th>
                        <th scope="col">Check-out</th>
                        <th scope="col">Building Type</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Service</th>
                        <th scope="col">Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row"> <?= $nomorBooking ?> </th>
                        <td> <?= $nama ?> </td>
                        <td> <?= $checkIn ?> </td>
                        <td> <?= $checkOut ?> </td>
                        <td> <?= $tipeGedung ?> </td>
                        <td> <?= $telepon ?> </td>
                        <td> <ul> <?php foreach ($layanan as $layanan1) {echo "<li> $layanan1 </li>";} ?> </ul> </td>
                        <td> $<?= $totalPrice ?> </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-dark text-light text-lg-start fixed-bottom">
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Dibuat oleh Rafiadly_1202190174
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