<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- box icon link -->
    <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="flex">
            <a href="admin_pannel.php" class="logo"><img src="img/logo.png"></a>
            <nav class="navbar">
                <a href="admin_pannel.php">home</a>
                <a href="admin_product.php">products</a>
                <a href="admin_order.php">orders</a>
                <a href="admin_user.php">users</a>
                <a href="admin_message.php">messages</a>
            </nav>
            <div class="icons">
                <!-- <i class="bi bi-person" id="user-btn"></i> -->
                <!-- <i class="bi bi-list" id="menu-btn"></i> -->
                <i class="bx bxs-user" id="user-btn"></i>
                <i class="bx bx-menu" id="menu-btn"></i>
            </div>
            <div class="user-box">
            <p>Username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
            <p>Email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
            <form method="post">
                <button type="submit" name="logout" class="logout-btn">Log Out</button>
            </form>
            </div>

        </div>
    </header>
    <div class="banner">
        <div class="detail">
            <h1>Admin Dashboard</h1>
            <p>Lorem ipsum dorfn fgfk fgkfgjkgk fghjh   werewik    sdfium   sdfjkkkkljlk</p>
        </div>
    </div>
<!-- <div class="line"></div> -->
</body>
</html>