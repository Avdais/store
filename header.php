<?php session_start() ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copy Star</title>
    <link rel="stylesheet/less" type="text/css" href="assets/css/style.less" />
    <script src="assets/js/less@4.js"></script>
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="shortcut icon" href="../assets/img/favicon.png" sizes="512x512" type="image/x-icon">
</head>
    <header>
        <div class="container">    
            <div class="menus">
                <a href="about_company.php" class="menu-button button-about">О нас
                    <img src="../assets/img/logo.png" alt="" class="company-logo">
                </a>
                <a href="catalog.php" class="menu-button">Каталог</a>
                <a href="location.php" class="menu-button">Где нас найти?</a>
            </div>

            <?php
            //Changing header buttons if user authorized
            if(empty($_SESSION["session_username"])) {
            echo "<div class='auth-buttons'>
                <a href='login.php' class='menu-button button-login auth'>Вход</a>
                <a href='register.php' class='menu-button button-register auth'>Регистрация</a>
            </div>";
            } else {
            echo "<div class='auth-buttons'>
                <a href='cart.php' class='menu-button button-cart'>Корзина</a>
                <a href='assets/php/logout.php' class='menu-button button-login auth'>Выход</a>
            </div>";
            }
            ?>
            
        </div>
    </header>