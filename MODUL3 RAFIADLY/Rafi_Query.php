<?php
    $conn = mysqli_connect("localhost", "root", "", "modul3");
    if (isset($_POST['submit'])) {
        $judul = $_POST['judul'];
        $nama = $_POST['nama'];
        $tahun = $_POST['tahun'];
        $deskripsi = $_POST['deskripsi'];
        $bahasa = $_POST['bahasa'];
        $tag = implode(", ", $_POST['tag']);
        $filename = $_FILES['foto']['name'];
        $rand = rand();
        $file = $rand.'_'.$filename;
        move_uploaded_file($_FILES['foto']['tmp_name'], 'buku upload/'.$rand.'_'.$filename);
        mysqli_query($conn, "INSERT INTO buku_table(judul_buku, penulis_buku, tahun_terbit, deskripsi, gambar, tag, bahasa) VALUES('$judul','$nama', '$tahun', '$deskripsi', '$file', '$tag', '$bahasa')");
        header("Location: Rafi_Home.php");
    }
?>