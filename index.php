<?php

    include 'connection.php';
    session_start();
    $admin_id = $_SESSION['user_name'];

    if (!isset($admin_id)) {
        header('location:login.php');
    }

    if (isset($_POST['logout'])) {
        session_destroy();
        header('location:login.php');
    }
?>
<style type="text/css">
    <?php
        include 'main.css';
    ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- -------------------------------------slick slider link------------------------------------------- -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <title>home page</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <!-- -------------------------------------home slider------------------------------------------- -->
    <div class="container-fluid">
        <div class="hero-slider">
            <div class="slider-item">
                <img src="img/slide.jpg">
                <div class="slider-caption">
                    <span>Test The Quality</span>
                    <h1>Organic Premium<br>Honey</h1>
                    <p>Enjoy sweet, aromatic honey made by hardworking people of<br>ecologically clean raw materials in the most pure environment!</p>
                    <a href="shop.php" class="btn">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="line"></div> -->
    <?php include 'footer.php'; ?>
    <!-- -------------------------------------slick slider link------------------------------------------- -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript" src="script2.js"></script>
</body>
</html>