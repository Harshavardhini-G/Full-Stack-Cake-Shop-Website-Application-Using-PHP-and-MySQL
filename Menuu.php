<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Delicious Cakes</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }
         
        header {
            border: 1px solid #000; /* Black border */
            background-color:plum;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px 0;
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

        #menu {
            border: 1px solid #000; /* Black border */
            background-color:plum;
            padding: 20px;
            text-align: center;
        }

        #menu h2 {
            background-color:plum;
            margin-bottom: 20px;
        }

        .menu-container {
            background-color:plum;
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Display three items per row */
            gap: 20px;
        }

        .menu-item {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            background-color:#f9f9f9;
        }

        .menu-item h3 {
            color: #333;
            margin-bottom: 10px;
        }

        .menu-item p {
            color: #666;
            margin-bottom: 10px;
        }

        .menu-item img {
            display: block;
            margin: 0 auto 10px;
            max-width: 100%;
            border-radius: 0px;
        }

        button {
            background-color:magenta;
            color: #fff;
            padding: 20px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color:plum;
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

<section id="menu">
    <!-- Menu items here -->
    <h2>Menu</h2>
    <div class="menu-container">
        <div class="menu-item">
            <h3>Chocolate Cake</h3>
            <img src="https://www.fnp.com/assets/images/custom/cakes_23/flavour/Chocolate-Cakes-web_2.jpg" alt="Chocolate Cake">
             <h3>price:Rs.650</h3>
            <button onclick="addToCart('Chocolate Cake')">Add to Cart</button>
        </div>
        <div class="menu-item">
            <h3>Black Forest Cake</h3>
            <img src="https://www.fnp.com/assets/images/custom/cakes_23/flavour/Black-Forest-Cakes_web.jpg" alt="Chocolate Cake">
            <h3>price:Rs.1500</h3> 
            <button onclick="addToCart(' Black Forest Cake')">Add to Cart</button>
        </div>
        <div class="menu-item">
            <h3>Butterscotch Cake</h3>
            <img src="https://www.fnp.com/assets/images/custom/cakes_23/flavour/Butterscotch-Cakes_web.jpg" alt="Chocolate Cake">
            <h3>price:Rs.750</h3>
            <button onclick="addToCart(' Butterscotch Cake')">Add to Cart</button>
        </div>
        <div class="menu-item">
            <h3>Pineapple Cake</h3>
            <img src= "https://www.fnp.com/assets/images/custom/cakes_23/flavour/Pineapple-Cakes_web.jpg" alt="Chocolate Cake">
            <h3>price:Rs.550</h3> 
            <button onclick="addToCart(' Pineapple Cake')">Add to Cart</button>
        </div> 
        <div class="menu-item">
            <h3> Truffle Cake</h3>
            <img src= "https://www.fnp.com/assets/images/custom/cakes_23/flavour/Truffle-Cakes_web.jpg" alt="Chocolate Cake">
            <h3>price:Rs.800</h3>
            <button onclick="addToCart(' Truffle Cake')">Add to Cart</button>
        </div> 
        <div class="menu-item">
            <h3>Redvelvet Cake</h3>
            <img src= "https://www.fnp.com/assets/images/custom/cakes_23/flavour/Red-Velvet-Cakes_web.jpg" alt="Chocolate Cake">
            <h3>price:Rs.1200</h3> 
            <button onclick="addToCart(' Redvelvet Cake')">Add to Cart</button>
        </div> 
        <div class="menu-item">
            <h3>Fresh fruit Cake</h3>
            <img src= "https://www.fnp.com/assets/images/custom/cakes_23/flavour/Fresh-Fruit-Cakes_web.jpg" alt="Chocolate Cake">
            <h3>price:Rs.850</h3>
            <button onclick="addToCart(' Fresh fruit Cake')">Add to Cart</button>
        </div> 
        <div class="menu-item">
            <h3> Mango Cake</h3>
            <img src= "https://www.fnp.com/assets/images/custom/cakes_23/flavour/MangoCakes_web%20copy.jpg" alt="Chocolate Cake">
            <h3>price:Rs.570</h3>
            <button onclick="addToCart(' Mango Cake')">Add to Cart</button>
        </div> 
        <div class="menu-item">
            <h3>Chocolate Caramel fudge cake</h3>
            <img src= "https://www.fnp.com/images/pr/l/v200/chocolate-caramel-fudge-cake-half-kg_1.jpg" alt="Chocolate Cake">
            <h3>price:Rs.500</h3>
            <button onclick="addToCart('Chocolate Caramel fudge cake')">Add to Cart</button>
        </div> 
    </div>
<h1>Premium orders</h1>
<div class="menu-container">
<div class="menu-item">
            <h3>Flowers N cakes</h3>
            <img src= "https://www.fnp.com/assets/images/custom/cakes_23/featured/Flowers-N-Cakes_web.jpg" alt="Chocolate Cake">
            <h3>price:Rs.1500</h3>
            <button onclick="addToCart(' Flowers N cakes')">Add to Cart</button>
        </div> 
        <div class="menu-item">
            <h3>Cream cakes</h3>
            <img src= " https://www.fnp.com/assets/images/custom/cakes_23/featured/Cream-Cakes_web.jpg" alt="Chocolate Cake">
            <h3>price:Rs.2500</h3>
            <button onclick="addToCart(' Cream cakes')">Add to Cart</button>
        </div> 
        <div class="menu-item">
            <h3>Kids cake</h3>
            <img src= " https://www.fnp.com/assets/images/custom/cakes_23/featured/Kids_web.jpg" alt="Chocolate Cake">
            <h3>price:Rs.1700</h3>
            <button onclick="addToCart(' Kids cake')">Add to Cart</button>
        </div> 
        <div class="menu-item">
            <h3>Fondant cake</h3>
            <img src= "  https://www.fnp.com/assets/images/custom/cakes_23/featured/Photo-Cakes_web.jpg" alt="Chocolate Cake">
            <h3>price:Rs.2500</h3>
            <button onclick="addToCart(' Fondant cake')">Add to Cart</button>
        </div> 
        <div class="menu-item">
            <h3>Photo cake</h3>
            <img src= " https://www.fnp.com/assets/images/custom/cakes_23/featured/Fondant-Cakes_web.jpg" alt="Chocolate Cake">
            <h3>price:Rs.2600</h3>
            <button onclick="addToCart('Photo cake')">Add to Cart</button>
        </div> 
        <div class="menu-item">
            <h3>Jar cake</h3>
            <img src= "https://www.fnp.com/assets/images/custom/cakes_23/featured/Jar-Cakes_web.jpg" alt="Chocolate Cake">
            <h3>price:Rs.2500</h3>
            <button onclick="addToCart(' Jar cake<')">Add to Cart</button>
        </div> 
    </div>

    </div>
</section>

<script>
        function addToCart(item) {
            // Store the selected item in local storage
            localStorage.setItem('cartItem', item);
            // Redirect to the place order page
            window.location.href = 'order1.php';
        }
    </script>

<!-- Footer content (similar to index.html) -->
</body>
</html>
