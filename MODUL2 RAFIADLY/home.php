<!doctype html>
<html lang="en">
    <head>  
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Home</title>
        <style>
            #first {
                color: green;
            }
        </style>
    </head>
    <body>
        
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
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
                <div class="col text-center">
                    <h4>WELCOME TO ESD VENUE RESERVATION</h4>
                </div>
                <div class="col text-center border border-dark mt-3 mx-auto bg-dark">
                    <p style="color: white;" class="mt-2 mb-3">Find your best deal for your event, here!</p>
                </div>

                <div class="container mt-5">
                    <div class="row justify-content-center">

                        <div class="card col-4 m-4 p-0" style="width: 18rem;">
                            <img src="nusantara.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nusantara Hall</h5>
                                <h6 class="card-subtitle mb-2 text-muted">$2000/Hour</h6>
                                <h6 class="card-subtitle mb-2 text-muted">5000 Capacity</h6>
                                <table class="table justify-content-center align-content-center text-center">
                                    <tbody id="first">
                                        <tr>
                                            <td><b>Free Parking<b></td>
                                        </tr>
                                        <tr>
                                            <td><b>Full AC<b></td>
                                        </tr>
                                        <tr>
                                            <td><b>Cleaning Service<b></td>
                                        </tr>
                                        <tr>
                                            <td><b>Covid-19 Health Protocol<b></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <form action="booking.php" method="POST">
                                                    <button type="submit" class="btn btn-primary d-grid mx-auto" value="nusantarahall" name="booknow">Book Now</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
            
                        <div class="card col-4 m-4 p-0" style="width: 18rem;">
                            <img src="garuda.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Garuda Hall</h5>
                                <h6 class="card-subtitle mb-2 text-muted">$1000/Hour</h6>
                                <h6 class="card-subtitle mb-2 text-muted">2000 Capacity</h6>
                                <table class="table justify-content-center align-content-center text-center">
                                    <tbody>
                                        <tr>
                                            <td style="color: green;"><b>Free Parking<b></td>
                                        </tr>
                                        <tr>
                                            <td style="color: green;"><b>Full AC<b></td>
                                        </tr>
                                        <tr>
                                            <td style="color: red;"><b>No Cleaning Service<b></td>
                                        </tr>
                                        <tr>
                                            <td style="color: green;"><b>Covid-19 Health Protocol<b></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <form action="booking.php" method="POST">
                                                    <button type="submit" class="btn btn-primary d-grid mx-auto" value="garudahall" name="booknow">Book Now</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
            
                        <div class="card col-4 m-4 p-0" style="width: 18rem;">
                            <img src="gsg.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Gedung Serba Guna</h5>
                                <h6 class="card-subtitle mb-2 text-muted">$500/Hour</h6>
                                <h6 class="card-subtitle mb-2 text-muted">500 Capacity</h6>
                                <table class="table justify-content-center align-content-center text-center">
                                    <tbody>
                                        <tr>
                                            <td style="color: red;"><b>No Free Parking<b></td>
                                        </tr>
                                        <tr>
                                            <td style="color: red;"><b>No Full AC<b></td>
                                        </tr>
                                        <tr>
                                            <td style="color: red;"><b>No Cleaning Service<b></td>
                                        </tr>
                                        <tr>
                                            <td style="color: green;"><b>Covid-19 Health Protocol<b></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <form action="Booking.php" method="POST">
                                                    <button type="submit" class="btn btn-primary d-grid mx-auto" value="gedungserbaguna" name="booknow">Book Now</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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