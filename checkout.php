<?php
session_start();

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


<?php 

$firstName = $lastName = $email = $address = $city = $code = $country = "";

$errFirstName = $errLastName = $errEmail = $errAddress = $errCity = $errCode = $errCountry = "";

$errors = []; 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST['submit'])){

        if (!empty($_POST['firstName'])){
        $firstName = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
            if (preg_match('/^[a-zA-Z-]{1,30}$/', $firstName)){
                $firstName = $_POST['firstName'];
              } else {
                $errFirstName = "firstname must be less than 30 characters and letters only";    
                $firstName = "";
                $errors[] =  "name";
            }
        } else {
        $errFirstName = "first name cannot be empty";
        $errors[] =  "name";

        }
        if (!empty($_POST['lastName'])){
        $lastName = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
        if (preg_match('/^[a-zA-Z-]{1,30}$/', $lastName)){
            $lastName = $_POST['lastName'];
          } else {
            $errLastName = "lastname must be less than 30 characters";    
            $lastName = "";
            $errors[] =  "last name";
        }
    
    } else {
        $errLastName = "last name cannot be empty";
        $errors[] =  "last name";

        }
        if (!empty($_POST['email'])){

        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errEmail = "Invalid email format";
        $email = "";
        $errors[] =  "email";

        } else {
            $email = $email;
        }

        } else {

        $errEmail = "email cannot be empty";
        $errors[] =  "email";


        }
        if (!empty($_POST['address'])){

        $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
    
        if (preg_match('/^[.a-zA-Z0-9-]*$/', $address)){
            $address = $address;
          } else {
            $errAddress = "Address cannot contain special characters";   
            $address = "";
            $errors[] =  "address";
        }

        } else {
    
        $errAddress = "address cannot be empty";
        $errors[] =  "address";
                
        }

        if (!empty($_POST['city'])){
        $city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
        

        if (preg_match('/^[a-zA-Z-]*$/', $city)){
            $city = $city;
          } else {
            $errCity = "City must be filled and cannot contain special characters";   
            $city = "";
            $errors[] =  "city";
        }
    
    
    }
        else {
    
        $errCity = "city cannot be empty";
        $errors[] =  "city";
                    
        }

        if (!empty($_POST['code'])){
            $code = filter_var($_POST['code'], FILTER_SANITIZE_NUMBER_INT);
          
            if (preg_match('/^\d{4,6}$/', $code)){
                $code = $code;
              } else {
                $errCode = "Zip Code must be at least 4 numbers long";   
                $code = "";
                $errors[] =  "zip code";
            }
        
        }
            else {
        
            $errCode = "code cannot be empty";
            $errors[] =  "zip code";
                        
            }

        if (!empty($_POST['country'])){
            $country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);  
        
            if (preg_match('/^[a-zA-Z]*$/', $country)){
                $country = $country;
              } else {
                $errCountry = "Country is letters only";   
                $country = "";
                $errors[] =  "country";
            }
        
        }
        else {
            
        $errCountry = "country cannot be empty";
        $errors[] =  "country";
                            
        }        
       
    }

    if (count($errors) == 0){
        $orderPlaced == true;
    };
}

?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

    <label for="firstName">First Name</label>
    <input name="firstName" id="firstName" type="text" value="<?php echo $firstName;?>"/>
    <?php echo '<span class="error">'.$errFirstName.'</span>'; ?>
    
    <label for="lastName">Last Name</label>
    <input name="lastName" id="lastName" type="text" value="<?php echo $lastName;?>"/>
    <?php echo '<span class="error">'.$errLastName.'</span>'; ?>

    <label for="email">Email</label>
    <input name="email" type="email" id="email" value="<?php echo $email;?>">
    <?php echo '<span class="error">'.$errEmail.'</span>'; ?>
    
    <label for="address">Address</label>
    <input name="address" type="text" id="address" value="<?php echo $address;?>">
    <?php echo '<span class="error">'.$errAddress.'</span>'; ?>
    
    <label for="city">City</label> 
    <input name="city" type="text" id="city" value="<?php echo $city;?>">
    <?php echo '<span class="error">'.$errCity.'</span>'; ?>
     
    <label for="code">Zip Code</label>
    <input name="code" type="number" id="code" value="<?php echo $code;?>">
    <?php echo '<span class="error">'.$errCode.'</span>'; ?>
    
    <label for="country">Country</label>
    <input name="country" type="text" id="country" value="<?php echo $country;?>">
    <?php echo '<span class="error">'.$errCountry.'</span>'; ?>

    <input name="submit" type="submit" id="submit" value="Submit">

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