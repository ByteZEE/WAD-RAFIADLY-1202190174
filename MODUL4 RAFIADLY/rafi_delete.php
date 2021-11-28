<?php
    require 'rafi_function.php';
    
    $_SESSION['id'] = $row['id'];

    $id = $_GET['id'];
    
    if( hapus($id) > 0) {
        echo '<script language="javascript">';
        echo 'alert("Email sudah terdaftar!")';
        echo '</script>';
    }
?>