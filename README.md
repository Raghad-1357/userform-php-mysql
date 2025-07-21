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

## ⚙️ Setup Instructions  

### 1️⃣ Install XAMPP  
1. Download from official site:  
   🔗 [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html)  
2. Install on your system  

### 2️⃣ Start Services  
1. Open XAMPP Control Panel  
2. Start these services:  
   - Apache (Web server)  
   - MySQL (Database)  

### 3️⃣ Database Setup  
1. Access phpMyAdmin at:  
   🔗 [http://localhost](http://localhost)  
2. Create database named "user":  
  
   CREATE DATABASE user;
   
3. Create "users_info" table:  
  
   CREATE TABLE users_info (
     id INT AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(50),
     age INT,
     status TINYINT(1) DEFAULT 0
   );
   
### 4️⃣ Test Database Connection  
1. Copy userDB.php to:  
   C:\xampp\htdocs\user-form-php-mysql  
2. Open in browser:  
   🔗 [http://localhost/user-form-php-mysql/userDB.php](http://localhost/user-form-php-mysql/userDB.php)  
3. Verify "Connected successfully" message appears  

### 5️⃣ Deploy Project Files  
Copy all files to:  
C:\xampp\htdocs\user-form-php-mysql  

Required files:  
- index.php  
- insert.php  
- toggle.php  
- userDB.php  

### 6️⃣ Launch Application  
1. Open in browser:  
   🔗 [http://localhost/user-form-php-mysql/index.php](http://localhost/user-form-php-mysql/index.php)  
2. You can now:  
   - Add new users  
   - View all users  
   - Toggle user status  

---

## 👩‍💻 Author  
Developed by [Raghad Alrashidi]  
