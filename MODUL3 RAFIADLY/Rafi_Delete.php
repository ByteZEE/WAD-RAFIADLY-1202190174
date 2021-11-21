<?php
    $conn = mysqli_connect("localhost", "root", "", "modul3");
    if (isset($_POST["hapus"])){
        $id_buku = $_POST['id_buku'];
        $delete = mysqli_query($conn, "DELETE FROM buku_table WHERE id_buku = $id_buku");
        header("Location: Rafi_Home.php");
    }
?>