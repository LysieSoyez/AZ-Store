<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/scss/style.css">
    <title>AZ[Store]</title>
</head>
<body>
    <!-- nav -->
    <nav>
    </nav>

    <!--Header (shoe the right one)-->
    <header>
    </header>

    <!--main (our last products)-->
    <main>
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
        <section class ="shop__article">
         <h3> Our <span class="">last products </span></h3>
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
    </footer>
</body>
</html>