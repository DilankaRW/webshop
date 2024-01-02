<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- box icon link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="flex">
            <a href="admin_pannel.php" class="logo"><img src="img/logo.png"></a>
            <nav class="navbar">
                <a href="home.php">home</a>
                <a href="about.php">about us</a>
                <a href="shop.php">shop</a>
                <a href="order.php">orders</a>
                <a href="contact.php">contact</a>
            </nav>
            <div class="icons">
                    <!-- <i class="bi bi-person" id="user-btn"></i> -->
                    <!-- <i class="bi bi-list" id="menu-btn"></i> -->
                    <i class="bx bxs-user" id="user-btn"></i>
                    <a href="wishlist.php"><i class="bx bxs-heart"></i></a>
                    <a href="cart.php"><i class="bx bxs-cart"></i></a>
                    <!-- <i class="bx bx-menu" id="menu-btn"></i> -->
                </div>
                <div class="user-box">
                <p>Username : <span><?php echo $_SESSION['user_name']; ?></span></p>
                <p>Email : <span><?php echo $_SESSION['user_email']; ?></span></p>
                <form method="post">
                    <button type="submit" name="logout" class="logout-btn">Log Out</button>
                </form>
                </div>

            </div>
    </header>
    
</body>
</html>