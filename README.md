# Form Toggle Status - PHP + MySQL + Ajax

A simple web project using PHP and MySQL that allows users to submit their name and age through a one-line form. The data is stored in a MySQL database and displayed in a dynamic table. Each record includes a "Toggle" button to switch the status between 0 and 1 without reloading the page, using JavaScript and Ajax.

# Features

- One-line input form (name + age)
- Stores data in a MySQL database
- Displays all records in a table
- "Toggle" button to switch the status per record
- Instant update using JavaScript + Ajax (no page refresh)

# Technologies Used

- HTML, CSS, JavaScript (Vanilla)
- PHP (MySQLi)
- MySQL database
- Ajax for live interaction

 Database Setup

1. Create a database named `user_form`.
2. Run the following SQL in phpMyAdmin or your MySQL console:

```sql
CREATE DATABASE user_form;

USE user_form;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT,
    status TINYINT DEFAULT 0
);
```
# Final Step Open XAMPP -->Start (Apache) and (Mysql) Modules after that Open your browser and run the project: http://localhost/task/index.html
