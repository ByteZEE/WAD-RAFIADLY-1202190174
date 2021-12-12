<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <ul class="navbar-nav fw-bold mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('content.home') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('vaccine') }}">VACCINE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('patient') }}">PATIENT</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <!-- About Us -->
    <div class="container mt-5">
        <div class="row">
            <div class="col text-center">
                <h3><b>About Us</b></h3>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col d-flex justify-content-center">
                <div class="card-body">
                    <img src="img/home_img.png" alt="">
                </div>
            </div>
            <div class="col justify-content-center">
                <div class="card-body">
                    <h5 class="card-title">Vaksin merupakan antigen (mikroorganisma) yang diinaktivasi atau dilemahkan yang bila diberikan kepada orang yang sehat untuk menimbulkan antibodi spesifik terhadap mikroorganisma tersebut, sehingga bila kemudian terpapar, akan kebal dan tidak terserang penyakit. Bahan dasar membuat vaksin tentu memerlukan mikroorganisma, baik virus maupun bakteri. Menumbuhkan mikroorganisma memerlukan media tumbuh yang disimpan pada suhu tertentuMikroorganisma yang tumbuh kemudian akan dipanen, diinaktivasi, dimurnikan, diformulasi dan kemudian dikemas.</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="fixed-bottom p-3 text-center">
        <a href="javascript:void()" data-bs-toggle="modal" data-bs-target="#modal_footer">
            Made with &#10084; with Muhammad Rafiadly - 1202190174
        </a>
    </footer>
    <div class="modal fade" id="modal_footer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kesan Pesan Praktikum</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Kesan : Praktikum sangat seru, terutama saya yang tertarik dengan sofdev</p>
                    <p>Pesan : Semoga para asprak WAD sehat selalu</p>
                </div>
            </div>
        </div>
    </div>

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