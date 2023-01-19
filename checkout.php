<?php
session_start();

if (isset($_SESSION['orderPlaced'])){
$orderPlaced = $_SESSION['orderPlaced'];
} else {
    $orderPlaced = false;
}

$_SESSION['cartContent'] = 0;


foreach($_SESSION['cart'] as $cart){
    $_SESSION['cartContent']  += $cart['qty'];
 }

?>

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
    <a href="./index.php">
        AZ[Store]
    </a>
    <div class="shop__nav">
        <a href="./index.php">
            Home
        </a>
        <a href="./about.php">
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
            <a href="./shopping-cart.php" class="shop__login" id="card"><?php echo (isset($_SESSION['cart'])) ? $_SESSION['cartContent'] : 0;?>
                <img src="./assets/images/shopping-cart.svg">
            </a> 
            <a href="#" class="shop__login" id="login">
                <p>
                    Login
                </p>
            </a>
        </div>
    </nav>

<!--Thanks message -->
<?php echo  ($orderPlaced == true) ? '<h2 class="thanks">Thank you so much<br/> for your order, <span>'.$_SESSION['firstName'].'</span>.</h2>' : ''; ?>

<!-- Form -->
<div class= "shopping_cart">

<div class="product">
            <section class="member">
                <h2>Free Delivery for <span>Members</span>.</h2>
                <p>Become a Nike Member to get fast and <span>free delivery</span>.</p>
            </section>
            <section class="bag">
                <h2>bag</h2>
            </section>
            <section class="products">
            <?php 
                foreach ($_SESSION['cart'] as $cart){
                echo '<div class="cart__line">';
                    echo '<span class="name_product">'.$_SESSION['items'][$cart['pro_id']-1]['product'].'</span>';
                    echo '<span class="price_product">'.$_SESSION['items'][$cart['pro_id']-1]['price'].' $</span><br>';
                    echo '<span class="quantity_product"> Quantity:  '.$cart['qty'].'</span>';
                    echo '<form method="post"><input style="display:none;" name="id" value='.$cart['pro_id'].'><input type="submit" value="-"></form>';
                    echo '</div>';
                }
                ?>
            </section>
               
        </div>
    
        <div class="pay">
            <h2>Summary</h2>
            <h3>Do you have a Promo Code?</h3>
            <form>
                <input type="text" id="promo-code" name="promo-code">
                <button type="submit">Apply</button>
            </form>

             <h4>total :  <?php echo $_SESSION['sum'];?> $</h4>
             <a href="./checkout.php" class="checkout">Checkout</a>
             <a href="#" class="paypal">Paypal</a>
        </div>
            </div>




<?php 

$firstName = $lastName = $email = $address = $city = $code = $country = "";

$errFirstName = $errLastName = $errEmail = $errAddress = $errCity = $errCode = $errCountry = "";

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST['submit'])){

        if (!empty($_POST['firstName'])){
        $firstName = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
            if (preg_match('/^[a-zA-ZÀ-ù-]{1,30}$/', $firstName)){
                $firstName = $_POST['firstName'];
                $_SESSION['firstName'] = $firstName;
              } else {
                $errFirstName = "First name must be less than 30 characters and letters only";    
                $firstName = "";
                $errors[] =  "name";
                $classError = "style='background-color:#F8787C'";
               
            }
        } else {
        $errFirstName = "First name cannot be empty";
        $errors[] =  "name";
        $classError = "style='background-color:#F8787C'";

        }
        if (!empty($_POST['lastName'])){
        $lastName = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
        if (preg_match('/^[\sa-zA-ZÀ-ù-]{1,30}$/', $lastName)){
            $lastName = $_POST['lastName'];
          } else {
            $errLastName = "Last name must be less than 30 characters";    
            $lastName = "";
            $errors[] =  "last name";
            $classError = "style='background-color:#F8787C'";
        }
    
    } else {
        $errLastName = "Last name cannot be empty";
        $errors[] =  "last name";
        $classError = "style='background-color:#F8787C'";

        }
        if (!empty($_POST['email'])){

        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errEmail = "Invalid email format";
        $email = "";
        $errors[] =  "email";
        $classError = "style='background-color:#F8787C'";

        } else {
            $email = $email;
        }

        } else {

        $errEmail = "Email cannot be empty";
        $errors[] =  "email";
        $classError = "style='background-color:#F8787C'";


        }
        if (!empty($_POST['address'])){

        $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
    
        if (preg_match('/^[.°\sa-zA-Z0-9-]*$/', $address)){
            $address = $address;
          } else {
            $errAddress = "Address cannot contain special characters";   
            $address = "";
            $errors[] =  "address";
            $classError = "style='background-color:#F8787C'";
        }

        } else {
    
        $errAddress = "Address cannot be empty";
        $errors[] =  "address";
        $classError = "style='background-color:#F8787C'";
                
        }

        if (!empty($_POST['city'])){
        $city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
        

        if (preg_match('/^[a-zA-ZÀ-ù-]*$/', $city)){
            $city = $city;
          } else {
            $errCity = "City must be filled and cannot contain special characters";   
            $city = "";
            $errors[] =  "city";
            $classError = "style='background-color:#F8787C'";
        }
    
    
    }
        else {
    
        $errCity = "City cannot be empty";
        $errors[] =  "city";
        $classError = "style='background-color:#F8787C'";
                    
        }

        if (!empty($_POST['code'])){
            $code = filter_var($_POST['code'], FILTER_SANITIZE_NUMBER_INT);
          
            if (preg_match('/^\d{4,6}$/', $code)){
                $code = $code;
              } else {
                $errCode = "Zip Code must be at least 4 numbers long";   
                $code = "";
                $errors[] =  "zip code";
                $classError = "style='background-color:#F8787C'";
            }
        
        }
            else {
        
            $errCode = "Zip code cannot be empty";
            $errors[] =  "zip code";
            $classError = "style='background-color:#F8787C'";
                        
            }

        if (!empty($_POST['country'])){
            $country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);  
        
            if (preg_match('/^[a-zA-ZÀ-ù-]*$/', $country)){
                $country = $country;
              } else {
                $errCountry = "Country is letters only";   
                $country = "";
                $errors[] =  "country";
                $classError = "style='background-color:#F8787C'";
            }
        
        }
        else {
            
        $errCountry = "Country cannot be empty";
        $errors[] =  "country";
        $classError = "style='background-color:#F8787C'";
                            
        }        
       
    }

    if (count($errors) == 0){
        $_SESSION['cart'] = [];
        $_SESSION['orderPlaced'] = true;
        $_SESSION['cartContent'] = 0;
        header('Location: checkout.php');
        
    };
}

?>


<form style="display:<?php echo ($orderPlaced == true) ? "none" : "flex";?>" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

    <label for="firstName">First Name</label>
    <input name="firstName" <?php echo (isset($classError)) ? $classError : "" ?> id="firstName" type="text" value="<?php echo $firstName;?>"/>
    <?php echo '<span class="error">'.$errFirstName.'</span>'; ?>
    
    <label for="lastName">Last Name</label>
    <input name="lastName" <?php echo (isset($classError)) ? $classError : "" ?> id="lastName" type="text" value="<?php echo $lastName;?>"/>
    <?php echo '<span class="error">'.$errLastName.'</span>'; ?>

    <label for="email">Email</label>
    <input name="email" <?php echo (isset($classError)) ? $classError : "" ?> type="email" id="email" value="<?php echo $email;?>">
    <?php echo '<span class="error">'.$errEmail.'</span>'; ?>
    
    <label for="address">Address</label>
    <input name="address" <?php echo (isset($classError)) ? $classError : "" ?> type="text" id="address" value="<?php echo $address;?>">
    <?php echo '<span class="error">'.$errAddress.'</span>'; ?>
    
    <label for="city">City</label> 
    <input name="city" <?php echo (isset($classError)) ? $classError : "" ?> type="text" id="city" value="<?php echo $city;?>">
    <?php echo '<span class="error">'.$errCity.'</span>'; ?>
     
    <label for="code">Zip Code</label>
    <input name="code" <?php echo (isset($classError)) ? $classError : "" ?> type="number" id="code" value="<?php echo $code;?>">
    <?php echo '<span class="error">'.$errCode.'</span>'; ?>
    
    <label for="country">Country</label>
    <input name="country" <?php echo (isset($classError)) ? $classError : "" ?> type="text" id="country" value="<?php echo $country;?>">
    <?php echo '<span class="error">'.$errCountry.'</span>'; ?>

    <input name="submit" type="submit" id="submit" value="Submit">

</form>

<!-- Validation place -->




<!-- footer-->
<footer>
<a href="./index.php">
            Home
        </a>
        <a href="./about.php">
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