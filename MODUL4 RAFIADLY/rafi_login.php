                        <?php
                        seshion_start();

                        // cek cookie
                        if (isset($_COOKIE['login'])) {
                            if ($_COOKIE['login'] == 'true') {
                                $_SESSION['login'] = true;
                            }
                        }

                        if (isset($_SESSION["login"])) {
                            header("Location: rafi_indexLogin.php");
                            exit;
                        }

                        require "rafi_function.php";

                        if (isset($_POST["login"])){

                            $email = $_POST["email"];
                            $sandi = $_P0ST["sandi"];
                            $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

                            // cek email
                            if(mysqli_num_rows($result) === 1 ) {

                                // cek sandi
                                $row = mysqli_fetch_assoc($result);
                                if (password_verify($sandi, $row["password"])) {

                                    // session
                                    $_SESSION['login'] = true;

                                    $_SESSION['id'] = $row['id'];

                                    // remember me / cookie
                                    if (isset($_POST["rememberMe"])) {
                                        // buat cookie
                                        setcookie('login', 'true', time() + 60);
                                    }

                                    header("Location: rafi_indexLogin.php");
                                    exit;
                                }
                            }

                            $error = true;
                        }

                        ?>


                        <!doctype html>
                        <html lang="en">
                          <head>
                            <!-- Required meta tags -->
                            <meta charset="utf-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1">

                            <!-- Bootstrap CSS -->
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

                            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

                            <title>Login</title>
                          </head>
                          <body>

                            <!-- Navbar -->
                            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                              <div class="container">
                                <a class="navbar-brand" href="#"><b>EAD Travel</b></a>
                                    <!-- <a class="navbar-brand" href="Rafi_Home.php"><img src="logo-ead.png" alt="" width="150"><a> -->
                                    <div class="navbar-nav ms-auto">
                                        <div class="nav-item">
                                            <a href="rafi_register.php"><button class="btn btn-primary">Registrasi</button></a>
                                            <a href="rafi_login.php"><button class="btn btn-primary">Login</button></a>
                                        </div>
                                    </div>   

                                </div>
                            </nav>

                            <!-- Login -->
                            <div class="p-3 mb-2 bg-secondary bg-opacity-25 mt-5" style="width: 500px; margin: auto;">

                                <?php if(isset($error)) : ?>
                                    <p style="color : red;">Email / Sandi salah!</p>
                                <?php endif; ?>

                                <form action="" method="post" style="max-width:400px; margin:auto;">

                                    <h1 class="h3 mb-3 font-wight-normal text-center">Login</h1>

                                    <label for="email" class="form-text"><b>Email</b></label>
                                    <input type="email" name="email" id="email" class="form-control text-center mb-2" placeholder="Masukkan Email Anda">

                                    <label for="sandi" class="form-text"><b>Kata Sandi</b></label>
                                    <input type="password" name="sandi" id="sandi" class="form-control text-center mb-2" placeholder="Kata Sandi Anda">

                                    <div class="checkbox mt-3">
                                        <label for="">
                                            <input type="checkbox" name="rememberMe" value="rememberMe"> <label for="" class="form-text"><b>Remember Me</b></label>
                                        </label>
                                    </div>

                                    <div class="mt-3 text-center">
                                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login" style="width: 400px;">Login</button>
                                    </div>

                                    <div class="mt-3 text-center">
                                        <p>Anda belum punya akun? <a href="rafi_register.php">Register</a></p>
                                    </div>

                                </form>

                            </div>

                            <!-- Footer -->
                            <footer class="bg-dark text-light text-lg-start fixed-bottom">
                                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                                ©2021 Copyright: RAFIADLY_1202190174
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
