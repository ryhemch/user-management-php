# User Management System

A simple web application developed using PHP and MySQL to manage user information through CRUD operations.

## 📌 Project Overview

This project provides a basic user management system that allows users to be added, displayed, updated, viewed and deleted through a web interface.

It was developed as part of an academic web development project.

## ✨ Features

- Add new users.
- Display the list of users.
- View user details.
- Update user information.
- Delete users.
- Connect to a MySQL database.

## 🛠️ Technologies

- **HTML5** – Web page structure.
- **CSS3** – Interface styling.
- **PHP** – Backend development.
- **MySQL** – Database management.
- **XAMPP** – Local development environment.
- **phpMyAdmin** – Database administration.

## 📁 Project Structure

```text
user-management-php/
│
├── gestion_users/
│   ├── ajouter.php
│   ├── connexion.php
│   ├── database.sql
│   ├── delete.php
│   ├── detail.php
│   ├── index.html
│   ├── list.php
│   ├── modifier.php
│   └── style.css
│
└── README.md
```

## ⚙️ Installation

### 1. Requirements

- XAMPP
- Web browser
- Git (optional)

### 2. Clone the repository

```bash
git clone https://github.com/ryhemch/user-management-php.git
```

### 3. Move the project

Copy the `gestion_users` folder into:

```text
C:\xampp\htdocs\
```

### 4. Start XAMPP

Start the following services:

- Apache
- MySQL

### 5. Import the database

1. Open http://localhost/phpmyadmin
2. Import the `database.sql` file.
3. Check the database connection settings in `connexion.php`.

### 6. Run the application

Open your browser:

```text
http://localhost/gestion_users/
```

## 🎯 Learning Objectives

- Understand PHP fundamentals.
- Connect PHP applications to MySQL.
- Implement CRUD operations.
- Manage data using SQL.
- Build dynamic web applications.

## 👩‍💻 Author

**Ryhem Chayeb**

GitHub: [@ryhemch](https://github.com/ryhemch)

---

Developed as an academic web development project.
