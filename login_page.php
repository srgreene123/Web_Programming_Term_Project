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
                    <input type="text" name="uname" id="uname" placeholder="e.g., John" required><br>

                    <label for="lname">Password</label><br>
                    <input type="password" name="password" id="password" placeholder="e.g., *****" required><br>
					<label>Show Password</label>
					<input type="checkbox" onclick="myFunction()"></input><br>

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
                        <input type="text" name="REGFIRST" id="REGFIRST" placeholder="e.g., John" required><br>
                    </div>

                    <div class="together">
                        <label for="REGLAST">Last Name</label><br>
                        <input type="text" name="REGLAST" id="REGLAST" placeholder="e.g., Smith" required><br>
                    </div><br>

                    <div id="fulllength" class="clear">
                        <label for="phone"> Phone Number </label><br>
                        <input type="text" name="phone" id="phone" pattern="(?=.*\d).{10}" placeholder="e.g., XXXXXXXXXX" title="Enter a valid phone number" required><br>
                    </div>

                    <div class="together">
                        <label for="user">Username</label><br>
                        <input type="text" name="user" id="user" placeholder="e.g., JohnC3" required><br>
                    </div>

                    <div class="together">
                        <label for="pswd">Password</label><br>
                        <input type="password" name="pswd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" id="pswd" placeholder="e.g., *****" title="Password must include the following:
				minimum of 5 characters, at least one uppercase letter, at least one lowercase letter, at least one number" required><br>
                    </div><br>
					<label>Show Password</label>
					<input type="checkbox" onclick="myFunction2()"></input><br>

                    <button class="checkout" name="REGsubmit" type="submit">Sign Up!</button>
                </div>
            </form>
        </div>
    </div>

    </div>
    <footer id="footer">
        <p>&copy; Java Zone Shop</p>
    </footer>
	
	<script src="myScript.js"></script>
</body>

</html>