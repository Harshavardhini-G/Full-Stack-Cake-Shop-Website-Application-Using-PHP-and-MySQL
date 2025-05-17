<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Delicious Cakes</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color:plum;
        }
         
        header {
            border: 1px solid #000;
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
            background-color:pink;
        }

        #contact {
            border: 1px solid #000;
            padding: 20px;
            
        }

        #contact h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        #contact form {
            max-width: 400px;
            margin: 0 auto;
        }

        #contact form input[type="text"],
        #contact form textarea {
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        #contact form textarea {
            resize: vertical;
        }

        #contact form input[type="submit"] {
            background-color:magenta;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        #contact form input[type="submit"]:hover {
            background-color:plum;
        }
        #contact p{
            text-align:center;
            margin-bottom: 20px;
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
                <li><a href="order1.php">place order</a></li>
                 
            </ul>
        </nav>
    </div>
</header>

<section id="contact">
<h2>Contact Us</h2>
<p>SHOP ADDRESS: 123 Nehru Street,Lawspet,Puducherry</p>
    <p>CONTACT NUMBER: +1234567890 OR 2345678 </p>

     <h2>For more details</h2> 
    <form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" value="Send Message">
    </form>

     
</section>


<!-- Footer content (similar to index.html) -->
</body>
</html>
