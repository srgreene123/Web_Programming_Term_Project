<!DOCTYPE html>
<html>

<head>
    <title>Checkout Page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="normalize.css">
</head>

<body id="checkoutbody">
    <div id="background_img1">
        <h1>Java Zone</h1>
    </div>
    <ul id="navbar_div">
        <li><a href="home_page.php">Home</a></li>
        <li><a href="drinks_page.php">Drinks</a></li>
        <li><a href="foods_page.php">Foods</a></li>
        <li><a href="cart_page.php">Cart</a></li>
        <li><a class="active" href="checkout_page.php">Checkout</a></li>
        <li><a href="login_page.php">Login</a></li>
    </ul>
    <div id="checkout">
        <form action='complete_checkout.php' method='post'>
            <h2>Customer Information</h2>

            <div class="together">
                <label for="fname">First Name</label><br>
                <input type="text" id="fname" placeholder="e.g., John"><br>
            </div>
            <div class="together">
                <label for="lname">Last Name</label><br>
                <input type="text" id="lname" placeholder="e.g., Smith"><br>
            </div>

            <div id="fulllength" class="clear">
                <label for="saddress">Street Address</label><br>
                <input type="text" placeholder="e.g., 2222 Coffee Place" name="street_name"><br>
            </div>

            <div class="together">
                <label for="">City</label><br>
                <input type="text" placeholder="e.g., Athens" name="city"><br>
            </div><br>

            <div class="together">
                <label for="">State / Province</label><br>
                <input type="text" placeholder="e.g., Georgia" name="state"><br>
            </div>

            <div class="together">
                <label for="">Postal Code</label><br>
                <input type="text" placeholder="e.g., 30078" name="zip_code"><br>
            </div><br>

            <div id="fulllength" class="clear">
                <label for="">Email Address</label><br>
                <input type="text" placeholder="e.g., javazone@gmail.com"><br>
            </div>

            <div id="fulllength" class="clear">
                <label for="">Phone Number</label><br>
                <input type="text" placeholder="xxx-xxx-xxxx"><br>
            </div>

            <h2>Payment Information</h2>

            <div id="fulllength" class="clear">
                <label for="">Name on Card</label><br>
                <input type="text" placeholder="e.g., John Smith"><br>
            </div>

            <div id="fulllength" class="clear">
                <label for="Card Number">Card Number</label><br>
                <input type="text" placeholder="xxxx-xxxx-xxxx-xxxx" name="card_num"><br>
            </div>

            <div class="together">
                <label for="">Expiration Month</label><br>
                <input type="text" placeholder="e.g., September"><br>
            </div>

            <div class="together">
                <label for="">Expiration Year</label><br>
                <input type="text" placeholder="e.g., 2021"><br>
            </div><br>

            <div class="together">
                <label for="">CVV</label><br>
                <input type="text" placeholder="xxx"><br>
            </div>

            <div class="together">
                <label for="">Billing Zip Code</label><br>
                <input type="text" placeholder="e.g., 30078"><br>
            </div><br>

            <label for="">Tips for the Driver!</label><br>
            <input type="text" placeholder="e.g., $2.00"><br><br>

            <button class='checkout' type="submit" name="submit">Submit Order</button>
        </form>
    </div>
    <footer id="footer">
        <p>&copy; Java Zone Shop</p>
    </footer>
</body>

</html>