<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="See shopping cart for AZ[store]">
    <link rel="stylesheet" type="text/css" href="./assets/scss/style.css">
    <title>AZ[STORE] - Shopping Cart</title>
</head>
<body>
    
    <!-- nav -->
    <nav>
        <a href="./index.php">
            AZ[Store]
        </a>
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
    
<!-- Form --><?php
$bought = ["id","blop","woop","plop"];

var_dump($bought);

function remove_item($button_id){

global $bought;

array_splice($bought, $button_id);
}

var_dump($bought);


?>

<!-- Validation place -->

<!-- footer-->
<footer>
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
    </footer>
</body>
</html>