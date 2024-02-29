<?php 
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['level'])) {
    if ($_SESSION['level']==="1") {
        header("location:administrator/index.php");
    }elseif ($_SESSION['level']==="2") {
        header("location:petugas/index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKK Kasir - Firda Rahayu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="card mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body">
                            <p class="text-center mt-5">
                                Silahkan Masukkan Username dan Password
                            </p>
                            <?php
                            if (isset($_GET['pesan'])) {
                                if ($_GET['pesan'] == 'gagal') {
                                    echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
                                }
                            }
                            ?>
                            <form action="cek_login.php" method="post">
                                <div class="from-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="from-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>

                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-primary form-control">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <img src="assets/login.png" width="500">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>