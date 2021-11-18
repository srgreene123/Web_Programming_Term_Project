<?php include_once('session_header.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Cart Page</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/normalize.css">
</head>

<body>
    <div id="background_img1">
        <h1>Java Zone</h1>
    </div>
	<?php if($_SESSION['loginst'] == 0) { ?>
		<ul id="navbar_div">
			<li><a href="home_page.php">Home</a></li>
			<li><a href="drinks_page.php">Drinks</a></li>
			<li><a href="foods_page.php">Foods</a></li>
			<li><a class="active" href="cart_page.php">Cart</a></li>
			<li><a href="checkout_page.php">Checkout</a></li>
			<li><a href="login_page.php">Login</a></li>
		</ul>
	<?php } else { ?>
		<ul id="navbar_div">
			<li><a href="home_page.php">Home</a></li>
			<li><a href="drinks_page.php">Drinks</a></li>
			<li><a href="foods_page.php">Foods</a></li>
			<li><a class="active" href="cart_page.php">Cart</a></li>
			<li><a href="checkout_page.php">Checkout</a></li>
			<li><a href="logout_page.php">Logout</a></li>
		</ul>
	<?php }; ?>
    <div id="cart">
        <h2>REVIEW YOUR CART!</h2>
        <table>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>Large Iced Caramel Macchiato</td>
                <td>$10</td>
                <td>1</td>
                <td>$10</td>
            </tr>
            <tr>
                <td>Regular Decaf Coffee</td>
                <td>$3</td>
                <td>2</td>
                <td>$6</td>
            </tr>
            <tr>
                <td>Ham and Egg Bagel</td>
                <td>$4</td>
                <td>4</td>
                <td>$16</td>
            </tr>
        </table>
        <form>
            <h3>PROMOTION CODE!</h3>
            <input type="text" placeholder="Promo Code"><br><br>
            <button class='checkout'>Proceed to Checkout</button>
        </form>
    </div>
    <footer id="footer">
        <p>&copy; Java Zone Shop</p>
    </footer>
</body>

</html>