<?php
    $conn = mysqli_connect("localhost", "root", "", "modul3");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Buku</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="Rafi_Home.php"><img src="logo-ead.png" alt="" width="150"><a>
        <div class="navbar-nav ms-auto">
          <div class="nav-item">
            <a href="Rafi_TambahBuku.php" class="nav-link">
              <button class="btn btn-primary">Tambah Buku</button>
            </a>
          </div>
          </div>
      </div>
    </nav>

    <!-- Tambah Data Buku -->
    <main class="container shadow d-flex flex-column p-5 mt-5">
        <div class="display-6 text-center"><b>Tambah Data Buku</b></div>
        <div class="container">
            <form method="POST" action="Rafi_Query.php" enctype="multipart/form-data">
                <label for="" class="form-text"><b>Judul Buku</b></label>
                <input type="text" class="form-control" name="judul">

                <label for="" class="form-text mt-2"><b>Penulis</b></label>
                <input type="text" class="form-control" value="Rafiadly_1202190174" name="nama" readonly="true">

                <label for="" class="form-text mt-2"><b>Tahun Terbit</b></label>
                <input type="number" class="form-control" name="tahun">

                <label for="" class="form-text mt-2"><b>Deskripsi</b></label>
                <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control"></textarea>

                <div class="bahasa-input d-flex align-items-stretch mt-2">
                    <label for="" class="form-text"><b>Bahasa</b></label>
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="radio" name="bahasa" id="b_indonesia" value="Indonesia">
                        <label class="form-check-label" for="b_indonesia">
                            Indonesia
                        </label>
                    </div>
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="radio" name="bahasa" id="b_lainnya" value="Lainnya">
                        <label class="form-check-label" for="b_lainnya">
                            Lainnya
                        </label>
                    </div>
                </div>

                <div class="d-flex mt-2">
                    <label for="" class="form-text"><b>Tag</b></label>
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="Pemrograman" id="pemrograman">
                        <label class="form-check-label" for="flexCheckDefault">
                            Pemrograman
                        </label>
                    </div>

                    <div class="form-check ms-2">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="Website" id="website">
                        <label class="form-check-label" for="flexCheckChecked">
                            Website
                        </label>
                    </div>

                    <div class="form-check ms-2">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="Java" id="java">
                        <label class="form-check-label" for="flexCheckChecked">
                            Java
                        </label>
                    </div>

                    <div class="form-check ms-2">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="OOP" id="oop">
                        <label class="form-check-label" for="flexCheckChecked">
                            OOP
                        </label>
                    </div>
                    
                    <div class="form-check ms-2">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="MVC" id="mvc">
                        <label class="form-check-label" for="flexCheckChecked">
                            MVC
                        </label>
                    </div>

                    <div class="form-check ms-2">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="Kalkulus" id="kalkulus">
                        <label class="form-check-label" for="flexCheckChecked">
                            Kalkulus
                        </label>
                    </div>

                    <div class="form-check ms-2">
                        <input class="form-check-input" type="checkbox" name="tag[]" value="Lainnya" id="opsi_lainnya">
                        <label class="form-check-label" for="flexCheckChecked">
                            Lainnya
                        </label>
                    </div>
                    
                </div>
                <label for="formFile" class="form-label mt-2"><b>Gambar</b></label>
                <input class="form-control" type="file" id="formFile" name="foto">
                <input type="submit" name="submit" value="+ TAMBAH" class="btn btn-primary mt-4 d-block mx-auto w-50">
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="text-dark text-lg-start">
      <div class="text-center p-3 mt-3">
        <a class="" href="#"><img src="logo-ead.png" alt="" width="150"><a>
        <h5 class="fw-bold mt-2">Perpustakaan WAD</h5>  
        © Rafiadly_1202190174
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