<?php
$conn = mysqli_connect("localhost", "root", "", "modul3");

// //mengambil data dari tabel buku
$query = mysqli_query($conn, "SELECT * FROM buku_table");
$result = mysqli_num_rows($query);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Homepage</title>
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

    <!-- Daftar Buku -->
    <div class="container">

      <?php if ($result == 0): ?>
        <div class="display-6 text-center kosong p-5">Belum Ada Buku</div>
        <p class="fs-5 mt-5 text-center">Silahkan Menambahkan Buku</p>
      <?php else: ?>

      <div class="d-flex justify-content-evenly my-5">

      <?php 
			  while($value = mysqli_fetch_array($query)){    
      ?>

      <div class="card" style="width: 18rem;">
        <img src="../MODUL3 RAFIADLY/buku upload/<?php echo $value['gambar'] ?>" class="card-img-top" width="500">
        <div class="card-body">
          <h5 class="card-title"><?php echo $value['judul_buku'] ?></h5>
          <p class="card-text"><?php echo $value['deskripsi'] ?></p>
          <a href="Rafi_DetailBuku.php?id=<?php echo $value['id_buku'] ?>" class="btn btn-primary">Tampilkan Lebih Lanjut</a>
      </div>
    </div>
    <?php 
      } 
    ?>
    </div>
      <?php endif; ?>
    </div>

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