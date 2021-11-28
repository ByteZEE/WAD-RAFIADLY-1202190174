<?php
    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "wad_modul4");

    // query
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ( $row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    // registrasi
    function registrasi($data) {
        global $conn;

        $nama = ($data["nama"]);
        $email = ($data["email"]);
        $noHP = ($data["noHP"]);
        $sandi = mysqli_real_escape_string($conn, $data["sandi"]);
        $confirmSandi = mysqli_real_escape_string($conn, $data["confirmSandi"]);

        // konfirmasi sandi
        if ($sandi != $confirmSandi) {
            echo '<script language="javascript">';
            echo 'alert("Konfirmasi sandi salah!")';
            echo '</script>';
            return false;
        }

        // cek apakah email sudah terdaftar atau belum
        $result = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");

        if( mysqli_fetch_assoc($result)) {
            echo '<script language="javascript">';
            echo 'alert("Email sudah terdaftar!")';
            echo '</script>';
            return false;
        }

        // enkripsi password
        $sandi = password_hash($sandi, PASSWORD_DEFAULT);

        // menambahkan data ke database
        mysqli_query($conn, "INSERT INTO users VALUES ('', '$nama', '$email', '$sandi', '$noHP')");

        return mysqli_affected_rows($conn);
    }
    
    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM bookings WHERE id = $id");
        return mysqli_affected_rows($conn);
    }
    
?>