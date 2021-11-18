<!DOCTYPE html>
<html>

<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="normalize.css">
</head>

<body>
	<div id="background_img1">
		<h1>Java Zone</h1>
	</div>
	<?php if($loginst == 1) { ?>
		<ul id="navbar_div">
			<li><a class="active" href="home_page.php">Home</a></li>
			<li><a href="drinks_page.php">Drinks</a></li>
			<li><a href="foods_page.php">Foods</a></li>
			<li><a href="cart_page.html">Cart</a></li>
			<li><a href="checkout_page.php">Checkout</a></li>
			<li><a href="login_page.html">Login</a></li>
		</ul>
	<?php } else { ?>
		<ul id="navbar_div">
			<li><a class="active" href="home_page.php">Home</a></li>
			<li><a href="drinks_page.php">Drinks</a></li>
			<li><a href="foods_page.php">Foods</a></li>
			<li><a href="cart_page.html">Cart</a></li>
			<li><a href="checkout_page.php">Checkout</a></li>
			<li><a href="login_page.html">Logout</a></li>
		</ul>
	<?php } ?>
	<div id='images_div'>
		<img src='first_image_home.jpg' alt='Middle of website'>
		<img src='second_image_home.jpg'>
		<img src='third_image_home.jpg'>
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