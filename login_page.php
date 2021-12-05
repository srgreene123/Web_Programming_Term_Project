<?php include_once('session_header.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body id="checkoutbody">
    <div id="background_img1">
        <h1>Java Zone</h1>
    </div>
    <?php if ($_SESSION['loginst'] == 0) { ?>
        <ul id="navbar_div">
            <li><a href="home_page.php">Home</a></li>
            <li><a href="drinks_page.php">Drinks</a></li>
            <li><a href="foods_page.php">Foods</a></li>
            <li><a class="active" href="login_page.php">Login/Register</a></li>
        </ul>
    <?php } else { ?>
        <ul id="navbar_div">
            <li><a href="home_page.php">Home</a></li>
            <li><a href="drinks_page.php">Drinks</a></li>
            <li><a href="foods_page.php">Foods</a></li>
            <li><a href="cart_page.php">Cart</a></li>
            <li><a href="checkout_page.php">Checkout</a></li>
            <li><a href="logout_page.php">Logout</a></li>
        </ul>
    <?php }; ?>
    <div id="flexContainer">
        <div id="checkout">
            <form action="validate_login.php" method="post">
                <div class="loginColumn loginLeft">
                    <h2>Login Information</h2>

                    <label for="fname">Username</label><br>
                    <input type="text" name="uname" id="uname" placeholder="e.g., John"><br>

                    <label for="lname">Password</label><br>
                    <input type="text" name="password" id="password" placeholder="e.g., ****"><br>

                    <label>Remember Me</label>
                    <input type="checkbox" value="1" name="check"></input>

                    <button class="checkout" name="submit" type="submit">Login</button>
                </div>
            </form>
        </div>
        <div id="REGcheckout">
            <form action="insert_login.php" method="post">
                <div class="loginColumn loginRight">
                    <h2>Don't have an account? Register Here!</h2>

                    <div class="together">
                        <label for="REGFIRST">First Name</label><br>
                        <input type="text" name="REGFIRST" id="REGFIRST" placeholder="e.g., John"><br>
                    </div>

                    <div class="together">
                        <label for="REGLAST">Last Name</label><br>
                        <input type="text" name="REGLAST" id="REGLAST" placeholder="e.g., ******"><br>
                    </div><br>

                    <div id="fulllength" class="clear">
                        <label for="phone"> Phone Number </label><br>
                        <input type="text" name="phone" id="phone" placeholder="e.g., XXX-XXX-XXXX"><br>
                    </div>

                    <div class="together">
                        <label for="user">Username</label><br>
                        <input type="text" name="user" id="user" placeholder="e.g., JohnC3"><br>
                    </div>

                    <div class="together">
                        <label for="pswd">Password</label><br>
                        <input type="text" name="pswd" id="pswd" placeholder="e.g., ****"><br>
                    </div><br>

                    <button class="checkout" name="REGsubmit" type="submit">Sign Up!</button>
                </div>
            </form>
        </div>
    </div>

    </div>
    <footer id="footer">
        <p>&copy; Java Zone Shop</p>
    </footer>
</body>

</html>