<?php include('session_header.php') ?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/normalize.css">
</head>

<body id="checkoutbody">
    <div id="background_img1">
        <h1>Java Zone</h1>
    </div>
    <div class='logout'>
        <?php
        $_SESSION['loginst'] = 0;
        ?>
        <?php if ($_SESSION['loginst'] == 0) { ?>
            <ul id="navbar_div">
                <li><a href="home_page.php">Home</a></li>
                <li><a href="drinks_page.php">Drinks</a></li>
                <li><a href="foods_page.php">Foods</a></li>
                <li><a href="cart_page.php">Cart</a></li>
                <li><a href="checkout_page.php">Checkout</a></li>
                <li><a href="login_page.php">Login</a></li>
            </ul>
        <?php } else { ?>
            <ul id="navbar_div">
                <li><a href="home_page.php">Home</a></li>
                <li><a href="drinks_page.php">Drinks</a></li>
                <li><a href="foods_page.php">Foods</a></li>
                <li><a href="cart_page.php">Cart</a></li>
                <li><a href="checkout_page.php">Checkout</a></li>
                <li><a class="active" href="logout_page.php">Logout</a></li>
            </ul>
        <?php }; ?>
        <?php
        session_unset();
        session_destroy();
        ?>
        <p>Logout successful!</p>
    </div>
    <footer id="footer">
        <p>&copy; Java Zone Shop</p>
    </footer>
</body>

</html>