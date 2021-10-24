<!doctype html>
<html lang="en">
    <head>  
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Booking</title>
    </head>
    <body>
        
        <!-- php -->
        <?php
            if (isset ($_POST["booknow"])) {
                $gedung = $_POST["booknow"];
                if ($gedung == "nusantarahall") {
                    $gambarGedung = "nusantara.jpg";
                }
                elseif ($gedung == "garudahall") {
                    $gambarGedung = "garuda.jpg";
                }
                elseif ($gedung == "gedungserbaguna") {
                    $gambarGedung = "gsg.jpg";
                } 
            }

            else {
                $gambarGedung = "nusantara.jpg";
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
                <div class="col text-center border border-dark mt-3 mx-auto bg-dark">
                    <p style="color: white;" class="mt-2 mb-3">Reserve your venue now!</p>
                </div>

                <!-- Card -->
                <div class="card mt-3">
                    <div class="row align-items-center">
                        <div class="col mt-5 m-5 ">
                            <div class="container ">
                                <img src=<?= $gambarGedung ?> class="rounded mx-auto d-flex justify-content-center" alt="" width="500" height="300">
                            </div>
                        </div>

                        <div class="col mt-5 m-5">
                            <form action="mybooking.php" method="POST">

                                <div class="mb-3">
                                    <label for="name" class="form-label mb-0">Name</label>
                                    <input type="text" id="name" name="name" class="form-control" value="rafiadly_1202190174" readonly>
                                </div>
                            
                                <div class="mb-3">
                                    <label for="eventDate" class="form-label mb-0">Event Date</label>
                                    <input type="date" id="eventDate" name="eventDate" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="startTime" class="form-label mb-0">Start Time</label>
                                    <input type="time" id="startTime" name="startTime" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="duration" class="form-label mb-0">Duration (Hours)</label>
                                    <input type="number" id="duration" name="duration" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label mb-0">Building Type</label>
                                    <select id="pilihan" name="buildingType" class="form-select">
                                        <option <?php if ($gedung == "nusantarahall") {echo "selected" ;}  ?> value="nusantarahall">Nusantara Hall</option>
                                        <option <?php if ($gedung == "garudahall") {echo "selected" ;} ?> value="garudahall">Garuda Hall</option>
                                        <option <?php if ($gedung == "gedungserbaguna") {echo "selected" ;} ?> value="gedungserbaguna">Gedung Serba Guna</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label mb-0">Phone Number</label>
                                    <input type="number" id="phone" name="phone" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label mb-0">Add Service(s)</label>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="catering" id="catering" name="services[]">
                                    <label class="form-check-label" for="catering">
                                        Catering / $700
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="decoration" id="decoration" name="services[]">
                                    <label class="form-check-label" for="decoration">
                                        Decoration / $450
                                    </label>
                                </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="sound" id="sound" name="services[]">
                                        <label class="form-check-label" for="sound">
                                            Sound System / $250
                                        </label>
                                    </div>                             
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit" name="book">Book</button>
                                </div>                      
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-dark text-light text-lg-start">
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