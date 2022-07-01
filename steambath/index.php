<?php

require_once('function/helper.php');
require_once('function/koneksi.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASE_URL . 'assets/css/style01.css' ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="topbar">
        <h3 class="text-topbar">STEAM BATH</h3>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ff9100" fill-opacity="1" d=""></path>
    </svg>

    <div class="content">
        <div class="card-login">
            <div class="card-main">
                <div class="card-header">Form Login</div>
                <div class="card-body">
                    <form class="form-login" method="POST" action="<?= BASE_URL . 'process/process_login.php' ?>">
                        <label class="form-label">Username</label>
                        <input type="username" name="username" class="form-input">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-input">
                        <button type="submit" class="btn btn-login">Login</button>
                    </form>
                    <p style="text-align: center;">Belum punya akun?<span><a href="<?= BASE_URL . "register.php" ?>" class=""> Daftar disini</a></span></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>