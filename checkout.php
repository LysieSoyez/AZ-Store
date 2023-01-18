<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Checkout page for AZ[store]">
    <link rel="stylesheet" type="text/css" href="./assets/scss/style.css">
    <title>AZ[STORE] - Checkout page</title>
</head>
<body>

<!-- nav -->
<nav>
    <p>
        AZ[Store]
    </p>
    <div class="shop__nav">
        <a href="./index.php">
            Home
        </a>
        <a href="#">
            About
        </a>
        <a href="#">
            Products
        </a>
        <a href="#">
            Contact
        </a>
    </div>
    <div class="shop__login">
            <a href="./shopping-cart.php" class="shop__login" id="card">
                <img src="./assets/images/shopping-cart.svg">
            </a> 
            <a href="./checkout.php" class="shop__login" id="login">
                <p>
                    Login
                </p>
            </a>
        </div>
    </nav>

<!--Thanks message -->

<!-- Form -->

<form name="checkout">

    <label for="firstName">First Name</label>
    <input name="firstName" id="firstName" type="text"/>
    
    <label for="lastName">Last Name</label>
    <input name="lastName" id="lastName" type="text"/>
    
    <label for="email">Email</label>
    <input name="email" type="email" id="email">
    
    <label for="address">Address</label>
    <input name="address" type="text" id="address">
    
    <label for="city">City</label> 
    <input name="city" type="text" id="city">
     
    <label for="code">Zip Code</label>
    <input name="code" type="number" id="code">
    
    <label for="country">Country</label>
    <input name="country" type="text" id="country">
    
    <input name="submit" type="button" id="submit" value="Submit">

</form>

<!-- Validation place -->


<!-- footer-->
<footer>
    <a href="./index.php">
        Home
    </a>
    <a href="#">
        About
    </a>
    <a href="./index.php">
        Products
    </a>
    <a href="#">
        Contact
    </a>
</footer>

</body>
</html>