<?php include_once('session_header.php'); ?>

<!DOCTYPE html>
<html>

<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="styles/normalize.css">
	<link rel="stylesheet" href="styles/styles.css">
</head>

<body>
	<div id="background_img1">
		<h1>Java Zone</h1>
	</div>
	<?php if($_SESSION['loginst'] == 0) { ?>
		<ul id="navbar_div">
			<li><a class="active" href="home_page.php">Home</a></li>
			<li><a href="drinks_page.php">Drinks</a></li>
			<li><a href="foods_page.php">Foods</a></li>
			<li><a href="login_page.php">Login/Register</a></li>
		</ul>
	<?php } else { ?>
		<ul id="navbar_div">
			<li><a class="active" href="home_page.php">Home</a></li>
			<li><a href="drinks_page.php">Drinks</a></li>
			<li><a href="foods_page.php">Foods</a></li>
			<li><a href="cart_page.php">Cart</a></li>
			<li><a href="checkout_page.php">Checkout</a></li>
			<li><a href="logout_page.php">Logout</a></li>
		</ul>
	<?php }; ?>
	<div id='images_div'>
		<img src='images/first_image_home.jpg' alt='Middle of website'>
		<img src='images/second_image_home.jpg'>
		<img src='images/third_image_home.jpg'>
	</div>
	<div id='menu_div'>
		<form action="redirection_page.php" method="post">
			<h2>Explore our menu!</h2>
			<p>We offer an assortment of different kinds of coffee, teas, non-caffeinated, and food from our bakery!</p>
			<button type="submit" class='menu_items_button' name="drinks">Drinks</button>
			<button type="submit" class='menu_items_button' name="food">Food</button>
		</form>
	</div>
	<footer id='footer'>
		<p>&copy; Java Zone Shop</p>
	</footer>
</body>




</html>