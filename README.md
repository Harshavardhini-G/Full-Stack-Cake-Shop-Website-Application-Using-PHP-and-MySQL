# 🍰 Delicious Cakes – Online Cake Ordering System

Welcome to the Delicious Cakes web app – a simple PHP & MySQL-based platform that allows users to place cake orders online with ease. This project is ideal for learning basic web development using PHP, HTML/CSS, and MySQL.

---

## ✨ Features

* 🖼️ Clean and user-friendly interface
* 📝 Order form with fields: Name, Email, Phone, Address, and Cake Quantity
* 📦 Store order details securely in a MySQL database
* 🛒 JavaScript "Add to Cart" simulation using localStorage
* 📬 Confirmation alert on submission
* ❌ Cancel button to return to previous page

---

## 📁 Project Structure

```
delicious-cakes/
├── index1.php           # Home Page
├── menuu.php            # Menu Page
├── contact1.php         # Contact Page
├── order1.php           # Order Form Page with PHP logic
├── thank_you.php        # Optional Thank You page
├── database.sql         # SQL file to create 'orders' table
└── README.md            # Documentation
```

---

## 🛠️ Technologies Used

* Frontend: HTML5, CSS3, JavaScript
* Backend: PHP (Procedural)
* Database: MySQL (phpMyAdmin)
* Server: Apache (XAMPP or WAMP)

---

## 🗃️ Database Setup

Create a MySQL database called test and run the following SQL command:

```sql
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address TEXT NOT NULL,
    cake VARCHAR(20) NOT NULL,
    order_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

## 🚀 How to Run the Project

1. Clone this repository or download the files.
2. Move the project folder to your local server directory (e.g., htdocs for XAMPP).
3. Start Apache and MySQL using XAMPP.
4. Open phpMyAdmin and create a database named test.
5. Run the SQL code above to create the orders table.
6. Edit database credentials in order1.php if needed:

```php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
```

7. Open your browser and go to:

```
http://localhost/delicious-cakes/order1.php
```

---

## 🧪 Usage

* Fill out the order form.
* Submit to store the order in the database.
* A confirmation message will display.
* Optionally redirect to thank\_you.php.
* You can cancel the order by clicking the Cancel button.

---

## 📦 Optional Improvements

* Add cake images and prices
* Validate phone number format
* Implement real cart with PHP sessions
* Add admin panel to view/manage orders
* Email notifications on order placement

---

## 📸 Screenshots
| Home Page                     | Menu Page                     | Contact Page                        | Order Page                      |
| ----------------------------- | ----------------------------- | ----------------------------------- | ------------------------------- |
| ![Home](https://i.postimg.cc/cLqKYv5T/Screenshot-2025-05-21-160701.png) | ![Menu](https://i.postimg.cc/kGj7hjxF/Screenshot-2025-05-21-160719.png) | ![Contact](https://i.postimg.cc/nhB6XRCR/Screenshot-2025-05-21-160726.png) | ![Order](https://i.postimg.cc/ZqJDCTkn/Screenshot-2025-05-21-160737.png) |

---

## 🙋 Contributing

Contributions are welcome! Please fork the repo and submit a pull request.

---

## 📄 License

This project is licensed under the MIT License.

---

Made with ❤️ for cake lovers and beginner web developers!

 
