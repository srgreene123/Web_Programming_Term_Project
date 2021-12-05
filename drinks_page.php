<?php
include_once('session_header.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "java_zone_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM products WHERE type='drink'";
$items = $conn->query($query);

$_SESSION['pageID'] = 1;

?>
<!DOCTYPE html>
<html>

<head>
	<title>Drinks</title>
	<link rel="stylesheet" href="styles/normalize.css">
	<link rel="stylesheet" href="styles/styles.css">
</head>

<div id='productBody'>
	<body>
		<div id="background_img1">
			<h1>Java Zone</h1>
		</div>
		<?php if ($_SESSION['loginst'] == 0) { ?>
			<ul id="navbar_div">
				<li><a href="home_page.php">Home</a></li>
				<li><a class="active" href="drinks_page.php">Drinks</a></li>
				<li><a href="foods_page.php">Foods</a></li>
				<li><a href="login_page.php">Login/Register</a></li>
			</ul>
		<?php } else { ?>
			<ul id="navbar_div">
				<li><a href="home_page.php">Home</a></li>
				<li><a class="active" href="drinks_page.php">Drinks</a></li>
				<li><a href="foods_page.php">Foods</a></li>
				<li><a href="cart_page.php">Cart</a></li>
				<li><a href="checkout_page.php">Checkout</a></li>
				<li><a href="logout_page.php">Logout</a></li>
			</ul>
		<?php }; ?>
		<!-- <div class="row">
			<div class="column left">
				<h2>Your Cart:</h2>
				<div class="container1">
					<div class="center1">
						<a href="checkout_page.php">
							<button>Proceed to Checkout</button>
					</div>
				</div>
				</a>
			</div> -->
			<div style="background-color:#bbb;">
				<h2 style='text-align: center';>Our Drink Selection</h2>
				<div class="pics">
					<?php foreach ($items as $item) { ?>
						<div class="textbox">
							<a>
								<figure>
									<img src="<?php echo $item['image']; ?>" />
									<form action="addToCart.php" method="post">
										<figcaption> <?php echo $item['name']; ?> <br>
											<input type='number' name='quantity' min=1 max=<?php echo $item['quantity']; ?> value='1' />
											<input type="hidden" name="productToAdd" value="<?php echo $item['productID']; ?>" />
											<input type="submit" name="submit" value="Add to Cart" />
										</figcaption>
									</form>
								</figure>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		<!-- </div> -->
		<footer id='footer'>
			<p>&copy; Java Zone Shop</p>
		</footer>
	</body>
</div>

</html>