<?php include_once('session_header.php'); ?>

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
	<?php if($_SESSION['loginst'] == 0) { ?>
		<ul id="navbar_div">
			<li><a href="home_page.php">Home</a></li>
			<li><a href="drinks_page.php">Drinks</a></li>
			<li><a href="foods_page.php">Foods</a></li>
			<li><a href="cart_page.php">Cart</a></li>
			<li><a href="checkout_page.php">Checkout</a></li>
			<li><a class="active" href="login_page.php">Login</a></li>
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
    <div id="checkout">
        <form action="validate_login.php" method="post">
            <h2>Login Information</h2>

                <label for="fname">Username</label><br>
                <input type="text" name="uname" id="uname" placeholder="e.g., John"><br>

                <label for="lname">Password</label><br>
                <input type="text" name="password" id="password" placeholder="e.g., ****"><br>

            <label>Remember Me</label>
            <input type="checkbox" value="1" name="check"></input>

            <button class="checkout" name="submit" type="submit">Login</button>
        </form>
    </div>
    <footer id="footer">
        <p>&copy; Java Zone Shop</p>
    </footer>
</body>

</html>