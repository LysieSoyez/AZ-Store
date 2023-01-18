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
        <a>
            Home
        </a>
        <a>
            About
        </a>
        <a>
            Products
        </a>
        <a>
            Contact
        </a>
        </div>
        <button class="shop__login" id="login">
            <img src="./assets/images/shopping-cart.svg">
            <p> 
                Login
            </p>
        </button> 
    </nav>

<!--Thanks message -->

<!-- Form -->

<?php 

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){

if (isset($_POST['submit'])){

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$code = $_POST['code'];
$country = $_POST['country'];

echo $firstName."<br/>";
echo $lastName."<br/>";
echo $email."<br/>";
echo $address."<br/>";
echo $city."<br/>";
echo $code."<br/>";
echo $country."<br/>";

session_destroy();
}
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

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
    
    <input name="submit" type="submit" id="submit" value="Submit">

</form>

<!-- Validation place -->
<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST['submit'])){
        $firstName = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
        $lastName = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
        $city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
        $code = filter_var($_POST['code'], FILTER_SANITIZE_NUMBER_INT);
        $country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);  
    }}

?>




<!-- footer-->
<footer>
        <a>
            Home
        </a>
        <a>
            About
        </a>
        <a>
            Products
        </a>
        <a>
            Contact
        </a>
    </footer>

</body>

</html>