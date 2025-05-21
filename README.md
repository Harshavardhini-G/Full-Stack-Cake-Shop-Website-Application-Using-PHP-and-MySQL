🍰 Delicious Cakes – Online Cake Ordering System
Welcome to the Delicious Cakes web app – a simple PHP & MySQL-based platform to allow customers to place online cake orders quickly and easily.

This project is designed for learning and demonstration purposes and includes frontend design, backend logic, and database connectivity.

✨ Features
🎨 Clean and colorful UI with HTML & CSS

📬 Order form for name, email, phone, address, and cake selection

🛡️ Input validation and security using htmlspecialchars in PHP

🗃️ Data stored in MySQL database

🛒 Basic "Add to Cart" simulation using localStorage (JavaScript)

❌ Cancel button to return to the previous page

✅ Optional redirection to a "Thank You" page after successful order

📂 Project Structure
bash
Copy
Edit
delicious-cakes/
├── index1.php           # Home Page
├── menuu.php            # Menu Page
├── contact1.php         # Contact Page
├── order1.php           # Main order form with PHP logic
├── thank_you.php        # Optional thank you confirmation page
├── database.sql         # SQL to create 'orders' table
└── README.md            # Project documentation
🛠️ Tech Stack
Frontend: HTML5, CSS3, JavaScript

Backend: PHP (Procedural)

Database: MySQL (phpMyAdmin compatible)

Server: Apache (XAMPP, WAMP, LAMP)

🗄️ Database Setup
Create a MySQL database named test and run the following SQL:

sql
Copy
Edit
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address TEXT NOT NULL,
    cake VARCHAR(20) NOT NULL,
    order_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
🚀 How to Run
Clone the repo or download it:

bash
Copy
Edit
git clone https://github.com/your-username/delicious-cakes.git
Place the folder inside your web server directory (e.g., htdocs for XAMPP).

Start Apache and MySQL from XAMPP/WAMP.

Open phpMyAdmin and create a database named test.

Import database.sql to create the orders table.

Update database credentials in order1.php:

php
Copy
Edit
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
Open your browser and navigate to:

arduino
Copy
Edit
http://localhost/delicious-cakes/order1.php
💡 Example
Order a cake from the form

Data is submitted to MySQL database

Confirmation appears

Optional: Redirect to thank_you.php after submission

📦 Optional Improvements
Add cake images with prices in the menu page

Implement actual shopping cart and checkout system

Use sessions to track orders

Add admin page to view all orders

Add email notification on successful order

📸 Screenshots
You can add screenshots here by uploading them and linking:

css
Copy
Edit
![Order Page](images/order-form.png)
🙌 Contributions
Feel free to fork this repo and submit pull requests. Suggestions and feedback are welcome!

📄 License
This project is open-source and available under the MIT License.

Made with ❤️ for cake lovers and web developers.

—
