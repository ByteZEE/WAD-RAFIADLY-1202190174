<?php
    $conn = mysqli_connect("localhost", "root", "", "modul3");
    if (isset($_POST["ubah"])) {
        $id_buku = $_POST['id_buku'];
        $judul = $_POST['judul'];
        $nama = $_POST['nama'];
        $tahun = $_POST['tahun'];
        $deskripsi = $_POST['deskripsi'];
        $bahasa = $_POST['bahasa'];
        $tag = implode(", ", $_POST['tag']);
        $query = "UPDATE buku_table SET 
            judul_buku = $judul,
            penulis_buku = $nama,
            tahun_terbit = $tahun,
            deskripsi = $deskripsi,
            tag = $tag,
            bahasa = $bahasa
            WHERE id_buku = $id_buku";
        mysqli_query($conn, $query);
        header("Location: Rafi_Home.php");
    };
?>