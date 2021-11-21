<?php
$conn = mysqli_connect("localhost", "root", "", "modul3");

$id_buku = $_GET["id"];
$query = mysqli_query($conn, "SELECT * from buku_table WHERE id_buku = $id_buku");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Detail Buku</title>
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

    <!-- Detail Buku -->
    <main class="container shadow p-5 mt-5">
        <div class="fs-3 text-center"><b>Detail Buku</b></div>
        <?php 
            while($data = mysqli_fetch_array($query)){
        ?>
        <img src="buku upload/<?php echo $data['gambar']?>" alt="" class="d-block mx-auto mt-2 mb-5 shadow gambar_buku">
        <hr>
        <div class="d-flex flex-column">
            <b class="mt-2">Judul :</b>
            <?php  echo $data['judul_buku']?>
            <b class="mt-2">Penulis :</b>
            <?php  echo $data['penulis_buku']?>
            <b class="mt-2">Tahun Terbit :</b>
            <?php  echo $data['tahun_terbit']?>
            <b class="mt-2">Deskripsi :</b>
            <?php  echo $data['deskripsi']?>
            <b class="mt-2">Bahasa :</b>
            <?php  echo $data['bahasa']?>
            <b class="mt-2">Tag: </b>
            <?php  echo $data['tag']?>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sunting</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" action="Rafi_Update.php">
                        <div class="modal-body d-flex flex-column">
                            <b class="mt-2">Judul Buku</b>
                            <input type="text" class="form-control" value="<?php echo $data['judul_buku']?>" name="judul">
                            <b class="mt-2">Penulis</b>
                            <input type="text" class="form-control" value="<?php echo $data['penulis_buku']?>" name="nama" readonly="true">
                            <b class="mt-2">Tahun Terbit</b>
                            <input type="number" class="form-control" value="<?php echo $data['tahun_terbit']?>" name="tahun">
                            <b class="mt-2">Deskripsi</b>
                            <textarea name="deskripsi" id="" cols="30" rows="2" class="form-control"><?php echo $data['deskripsi']?></textarea>
                            <div class="d-flex mt-2">
                                <b>Bahasa</b>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="radio" name="bahasa" id="b_indonesia" value="Indonesia" <?php echo $data["bahasa"] == "Indonesia"? "checked" : ""; ?>>
                                    <label class="form-check-label" for="b_indonesia">Indonesia</label>
                                </div>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="radio" name="bahasa" id="b_lainnya" value="Lainnya" <?php echo $data["bahasa"] == "Lainnya"? "checked" : ""; ?>>
                                    <label class="form-check-label" for="b_lainnya">
                                        Lainnya
                                    </label>
                                </div>
                            </div>
                            <?php 
                            $tags=explode(', ', $data['tag']);
                            ?>
                            <div class="d-flex flex-wrap mt-2">
                                <b>Tag</b>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="checkbox" name="tag[]" value="Pemrograman" id="pemrograman" <?php if (in_array("Pemrograman", $tags)) echo "checked";?>>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Pemrograman
                                    </label>
                                </div>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="checkbox" name="tag[]" value="Website" id="website" <?php if (in_array("Website", $tags)) echo "checked";?> >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Website
                                    </label>
                                </div>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="checkbox" name="tag[]" value="Java" id="java" <?php if (in_array("Java", $tags)) echo "checked";?> >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Java
                                    </label>
                                </div>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="checkbox" name="tag[]" value="OOP" id="oop" <?php if (in_array("OOP", $tags)) echo "checked";?> >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        OOP
                                    </label>
                                </div>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="checkbox" name="tag[]" value="MVC" id="mvc" <?php if (in_array("MVC", $tags)) echo "checked";?> >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        MVC
                                    </label>
                                </div>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="checkbox" name="tag[]" value="Kalkulus" id="kalkulus" <?php if (in_array("Kalkulus", $tags)) echo "checked";?> >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Kalkulus
                                    </label>
                                </div>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="checkbox" name="tag[]" value="Lainnya" id="opsi_lainnya" <?php if (in_array("Lainnya", $tags)) echo "checked";?> >
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Lainnya
                                    </label>
                                </div>
                            </div>
                            <input type="number" name="id_buku" id="id_buku" value="<?php echo $data['id_buku'] ?>" hidden>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <input type="submit" class="btn btn-primary" value="Simpan Perubahan" name="ubah">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php 
            };
        ?>
          <div class="col">
            <a href="javascript:void()">
              <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#exampleModal">Sunting</button>
            </a>
          </div>
          <div class="col">
            <form method="post" action="Rafi_Delete.php">
              <input type="number" name="id_buku" id="" value="<?php echo $id_buku ?>" hidden>
              <input class="btn btn-danger w-100"type="submit" value="Hapus" name="hapus">
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