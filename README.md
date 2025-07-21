## 🧑‍💻 User Form – PHP & MySQL Project  

This is a simple web application built with PHP and MySQL to create a form that collects user data (name and age), displays it in a table, and allows toggling the user's status between 0 and 1. This project was completed as part of a training task for Smart Methods.  

---

## 🚀 Features  
- A user form with input fields for name and age.  
- Stores data in a MySQL database.  
- Displays all users in a dynamic HTML table.  
- Allows toggling each user's status between 0 (inactive) and 1 (active).  
- Modular code structure with a separate database connection file (userDB.php).  

---

## 🛠 Technologies Used  
- PHP (Backend Logic)  
- MySQL (Database)  
- HTML (Frontend Structure)  
- XAMPP (Apache + MySQL Server)  

---

## 📁 File Structure  
user-form-php-mysql/  
├── index.php        ← Main page with form & table  
├── insert.php      ← Handles form submission  
├── toggle.php      ← Toggles user status  
├── userDB.php      ← Connects to the MySQL server  
└── README.md       ← Project documentation  
---

## 🧭 Setup Instructions  

### 1️⃣ Install XAMPP  
Download and install [XAMPP](https://www.apachefriends.org/download.html)
on your system.  

### 2️⃣ Start Apache & MySQL  
- Launch the XAMPP Control Panel.  
- Start both Apache and MySQL services.  

### 3️⃣ Create the Database  
1. Open phpMyAdmin by visiting:  
   🔗 [http://localhost/phpmyadmin](http://localhost/phpmyadmin)  
2. Create a new database named (user):  

   CREATE DATABASE user;
   
3. Run the following SQL to create the table:  
  
   CREATE TABLE users_info (
     id INT AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(50),
     age INT,
     status TINYINT(1) DEFAULT 0
   );
   
### 4️⃣ Add Project Files to XAMPP  
Copy all the project files into:  
C:\xampp\htdocs\user-form-php-mysql
Ensure the folder contains:  
- index.php  
- insert.php  
- toggle.php  
- userDB.php   

### 5️⃣ Configure Database Connection (userDB.php)  
Modify the file to connect directly to the user database:  
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

### 6️⃣ Run the App  
Open your browser and visit:  
🔗 [http://localhost/user-form-php-mysql/index.php](http://localhost/user-form-php-mysql/index.php)  

- Enter users via the form.  
- Toggle status using the buttons in the table.  
