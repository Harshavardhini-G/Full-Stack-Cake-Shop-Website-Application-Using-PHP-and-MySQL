<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delicious Cakes - Online Cake Shop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom Styles */
        /* Reset Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            
        }

        .container {
            
            width: 80%;
            margin: 0 auto;
            padding: 20px 0;
        }

        header {
            background-color:plum;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            color: #333;
            margin-bottom: 20px;
        }

        nav {
            background-color:pink;
            border-radius: 10px;
            padding: 10px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline-block;
            margin-right: 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav ul li a:hover {
            background-color: #ccc;
        }

        #hero {
            background-color:pink;
            background-size: cover;
            padding: 10px;
            text-align: center;
        }

        #hero h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        #hero p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        #cakes-carousel{
            background-color:plum;
        }

        .btn {
            display: inline-block;
            background-color:plum;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        #about-us {
            padding: 50px 0;
            background-color:plum;
            text-align: center;
        }

        #about-us .container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #about-us .cake-list {
            flex: 1;
            text-align: left;
            padding-right: 20px;
        }

        #about-us .cake-list h3 {
            margin-bottom: 20px;
        }

        #about-us .cake-list ul {
            list-style-type: none;
            padding: 0;
        }

        #about-us .cake-list ul li {
            margin-bottom: 10px;
        }

        #about-us .cake-list ul li:last-child {
            margin-bottom: 0;
        }

        #about-us .cake-image {
            flex: 1;
        }

        #about-us p {
            margin-top: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        footer p {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Delicious Cakes</h1>
            <nav>
                <ul>
                <li><a href="index1.php">Home</a></li>
                    <li><a href="menuu.php">Menu</a></li>
                    <li><a href="contact1.php">Contact</a></li>
                    <li><a href="order1.php">Place Order</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="hero">
        <div class="container">
            <h2>Welcome to Delicious Cakes</h2>
            <p>Indulge in the finest selection of freshly baked cakes!</p>
        </div>
    </section>
    <section id="cakes-carousel">
        <div class="container">
            <h2>Our Features</h2>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://www.fnp.com/assets/images/custom/cakes_23/cakes_delivery/Bestseller_Web.jpg" alt="Cake 1">
                    </div>
                    <!-- Add more carousel items here -->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://www.fnp.com/assets/images/custom/cakes_23/cakes_delivery/New-Arrival_Web.jpg" alt="Cake 2">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://www.fnp.com/assets/images/custom/cakes_23/cakes_delivery/Midnight-Delivery_Web.jpg" alt="Cake 3">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <section id="about-us">
        <div class="container">
            <div class="cake-list">
                <h3>About Us</h3>
                <p>We are committed to providing you with the best cakes made from the finest ingredients.</p>
                <p>LIST OF CAKES AVAILABLE</p>
                <ul>
                    <li>Birthday cakes</li>
                    <li>Wedding cakes</li>
                    <li>  Cupcakes</li>
<li>Cheesecake</li>
<li>Red velvet cake</li>
<li>Chocolate cake</li>
<li>Carrot cake</li>
<li>Lemon drizzle cake</li>
<li>Angel food cake</li>
<li>Pound cake</li>
<li>Black Forest cake</li>
 
<li>Strawberry shortcake</li>
 
<li>Coconutcake</li>
<li>Coffee cake</li>
 
<li>Ice cream cake</li>
 
 





</li>
                    <!-- Add more cake items here -->
                </ul>
            </div>
            <div class="cake-image">
                <img src="https://media.slidesgo.com/storage/80359/conversions/0-chocolate-cake-recipe-thumb.jpg" alt="cake image"></img>
            </div>
        </div>
        <div class="container">
            <p>Delicious Cakes is your one-stop destination for all your cake needs. From birthdays to weddings, we've got you covered with our delectable cakes made with love and care.</p>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; 2024 Delicious Cakes. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
