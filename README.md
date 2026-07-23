# Task Manager  
A lightweight **CRUD Task Manager** built with **PHP**, **MySQL**, **HTML**, **CSS**, and **Vanilla JavaScript**.  
Designed as a clean and simple full‑stack project to practice backend logic, database operations, and UI structure.

---

## Features

- Create, read, update and delete tasks  
- Clean and minimal UI  
- Secure database connection using PDO  
- Input sanitization  
- Modular file structure  
- Fully compatible with XAMPP / Apache  

---

## Project Structure

task-manager/
│
├── assets/
│   └── style.css
│
├── db.php
├── index.php
├── create.php
├── edit.php
├── delete.php
└── README.md

---

## Technologies Used

- **PHP 8+**
- **MySQL**
- **HTML5**
- **CSS3**
- **Apache (XAMPP)**
- **Git & GitHub**

---

## Installation

1. Clone the repository:
   git clone git@github.com:joaquinlombardi/task-manager.git

2. Move the project into your XAMPP `htdocs` folder:
   /Applications/XAMPP/xamppfiles/htdocs/GIT/task-manager

3. Import the database:
   CREATE TABLE tasks (
       id INT AUTO_INCREMENT PRIMARY KEY,
       title VARCHAR(255) NOT NULL,
       description TEXT,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );

4. Start Apache and MySQL in XAMPP.

5. Open the project in your browser:
   http://localhost:8080/GIT/task-manager/index.php

---

## License

This project is licensed under the **MIT License**.  
See the `LICENSE` file for details.

---

## Author

**Joaquín Lombardi**  
Full Stack Developer  
GitHub: @joaquinlombardi  
(https://github.com/joaquinlombardi)

---

## Tags

`php` `mysql` `crud` `fullstack` `xampp` `apache` `portfolio` `web-development` `task-manager`
