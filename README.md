# PHP CRUD Application

A simple **PHP CRUD (Create, Read, Update, Delete)** application built using **PHP, MySQL, HTML, CSS**, and **XAMPP**.  
This project demonstrates basic backend operations, database connectivity, and form handling in PHP.

## 📌 Features

- Add new records (Create)
- View records from database (Read)
- Edit existing records (Update)
- Delete records (Delete)
- MySQL database integration using `mysqli`
- Clean and simple UI with CSS
- Runs on local server using XAMPP

---

## 🛠️ Technologies Used

- **PHP**
- **MySQL**
- **HTML5**
- **CSS3**
- **XAMPP**
- **Git & GitHub**

---

## 📂 Project Structure

php-crud-app/
│
├── index.php      # Display records
├── create.php     # Add new record
├── edit.php       # Edit existing record
├── delete.php     # Delete record
├── db.php         # Database connection
├── styles.css     # Styling
└── README.md


## ⚙️ How to Run This Project Locally

### 1️⃣ Install XAMPP
Download and install XAMPP from:
https://www.apachefriends.org/

### 2️⃣ Start Server
Open **XAMPP Control Panel** and start:
- Apache
- MySQL


### 3️⃣ Create Database

1. Open browser and go to:


[http://localhost/phpmyadmin](http://localhost/phpmyadmin)

2. Create a database named:

php_crud


3. Create a table named `students` (or your table name):

sql
CREATE TABLE students (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100),
 email VARCHAR(100),
 mobile VARCHAR(15)
);

### 4️⃣ Move Project Folder

Copy the project folder into:

C:\xampp\htdocs\

### 5️⃣ Open in Browser


http://localhost/php-crud-app/
## 🚀 Learning Outcomes

* Hands-on experience with PHP & MySQL
* Understanding CRUD operations
* Database connection handling
* Git & GitHub workflow
* Real-world debugging and merge conflict resolution

## 👩‍💻 Author
**Pavithra Hrithi (Pavi)**
Aspiring Web Developer
GitHub: [https://github.com/PavithraHrithi](https://github.com/PavithraHrithi)

## 📌 Future Improvements

* Add login & authentication
* Input validation & security
* Pagination & search
* Better UI using Bootstrap
* MVC structure

⭐ If you like this project, feel free to star the repository!
