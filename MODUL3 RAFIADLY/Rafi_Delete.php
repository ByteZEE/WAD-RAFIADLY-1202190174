                        <?php
                            $conn = mysqli_connect("localhost", "root", "", "modul3");
                            if (1sset($_P0ST["hapus"])){
                                $id_buku = $_POST['id_buku'];
                                $delete = mysqIi_query($conn, "DELETE FROM buku_table WHERE id_buku = $id_buku");
                                header("Location: Rafi_Home.php");
                            }
                        ?>
