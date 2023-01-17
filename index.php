<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/scss/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/scss/style.css">
    <title>AZ[Store]</title>
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

    <!--Header (shoe the right one)-->
    <header>
        <div class="shop__HeroSection">
            <section class= heroSection1>
            <span class ="nike">Nike</span>
            <img src="assets/images/shoe_one.png" alt="">
            </section>
           <section class= "heroSection2">
           <h1>Shoe the right <span>One</span>.</h1>
           <a href="www.exemple.com">See our store</a>
           </section>
          
        </div>
    </header>

    <!--main (our last products)-->
    <main>

    <div class="shop__testimonials">
    <div class="testimonials__header">
    <img src="./assets/images/shoe_two.png">
    <h2>We provide you the <span>best</span> quality.</h2>
    <p class="">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Beatae dolores quae possimus tenetur veniam ullam quo, minus, 
        corporis a, tdolores quae poss
    </p>
</div>
<div class="testimonials__people">
    <div>
        <img src="./assets/images/image-emily.jpg">
            <b>Emily from xyz</b>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing 
                elit. Cupiditate error unde debitis optio, officiis 
                providen
            </p>
    </div>
    <div>
        <img src="./assets/images/image-thomas.jpg">
            <b>Thomas from corporate</b>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing 
                elit. Cupiditate error unde debitis optio, officiis 
                providen
            </p>
    </div>
    <div>
        <img src="./assets/images/image-jennie.jpg">
            <b>Jennie from Nike</b>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing 
                elit. Cupiditate error unde debitis optio, officiis 
                providen
            </p>
    </div>

</div>
    </div>

        <?php
        $items = [
            [
                'id' => 1,
                'product' => 'Nike Air Max 270',
                'price' => 234,
                'image_url' => './assets/images/shoe_one.png', 
            ],
        
        ];
        
        ?>
        
         <h3> Our <span class="shop__h3__span">last products </span></h3>
         
         <section class ="shop__article">
            <div class="shop__article__card">
                <img src="./assets/images/shoe_one.png">
                    <span class="shop__article__name"></span>
                    <span class="shop__article__price"></span> 
                    <form method="post">
                        <input type="submit" name="button1" value="Add to card"/> 
                    </form>
            </div>

            <div class="shop__article__card">
                <img src="./assets/images/shoe_one.png">
                    <span class="shop__article__name"></span>
                    <span class="class__article__price"></span>
                    <form method="post">
                        <input type="submit" name="button2" value="Add to card"/> 
                    </form>
            </div>

            <div class="shop__article__card">
                <img src="./assets/images/shoe_one.png">
                    <span class="shop__article__name"></span>
                    <span class="class__article__price"></span>
                    <form method="post">
                        <input type="submit" name="button3" value="Add to card"/> 
                    </form>
            </div> 

            <div class="shop__article__card">
                <img src="./assets/images/shoe_one.png">
                    <span class="shop__article__name"></span>
                    <span class="class__article__price"></span>
                    <form method="post">
                        <input type="submit" name="button4" value="Add to card"/> 
                    </form>
            </div>
            </section>
           
    <!--Comments section-->

    </main>
    
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