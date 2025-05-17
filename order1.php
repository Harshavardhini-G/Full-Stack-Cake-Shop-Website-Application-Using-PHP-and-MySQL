<?php
// Database connection settings
$host = "localhost";
$dbname = "cake_store";  // Replace with your actual database name
$username = "root";     // Replace with your actual username
$password = "";     // Replace with your actual password

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data safely
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $address = $conn->real_escape_string($_POST['address']);
    $cake = $conn->real_escape_string($_POST['cake']);

    // Insert query
    $sql = "INSERT INTO orders (name, email, phone, address, cake_count) VALUES ('$name', '$email', '$phone', '$address', '$cake')";

    if ($conn->query($sql) === TRUE) {
        $message = "Your order is successfully placed!";
    } else {
        $message = "Error: " . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Place Order - Delicious Cakes</title>
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
        input[type="text"],
        input[type="email"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"],
        input[type="button"] {
            background-color:magenta;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: inline-block; /* For cancel button */
        }

        input[type="submit"]:hover,
        input[type="button"]:hover {
            background-color: #45a049;
        }

        .cancel-btn {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        #place-order {
            border: 1px solid #000; /* Black border */
        background-color:plum; /* Change this to the desired background color */
        padding: 20px; /* Adjust padding as needed */
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

<section id="place-order" class="container">
    <h2>Place Order</h2>

    <!-- Display success/error message -->
    <?php if (!empty($message)) : ?>
        <p class="message"><?php echo $message; ?></p>
    <?php endif; ?>

    <form action="order1.php" method="post" id="order-form">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required />

        <label for="phone">PhoneNumber:</label>
        <input type="text" id="phone" name="phone" required />

        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea>

        <label for="cake">No. of cakes ordered:</label>
        <select id="cake" name="cake" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="none">None</option>
        </select>

        <input type="submit" value="Submit Order" />
        <input type="button" class="cancel-btn" value="Cancel" onclick="window.history.back();" />
    </form>
</section>

</body>
</html>
