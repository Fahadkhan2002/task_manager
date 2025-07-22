
# 📋 Task Manager Web App

A simple **Task Manager Web Application** built with **PHP, MySQL, HTML, CSS (Bootstrap), and Vanilla JavaScript**.

---

## 🚀 Features

✅ Create new tasks  
✅ Edit existing tasks  
✅ Delete tasks  
✅ Mark tasks as **To Do**, **In Progress**, or **Done** with color indicators  
✅ Responsive design using **Bootstrap 5**

---

## 🛠️ Tech Stack

- **Backend:** PHP 8+
- **Database:** MySQL
- **Frontend:** HTML, CSS, Bootstrap, Vanilla JS

---

## 📁 Project Structure

\`\`\`
task_manager/
│
├── index.php
├── add_task.php
├── edit_task.php
├── delete_task.php
├── update_status.php
├── db.php
├── style.css
└── (MySQL database configured via db.php)
\`\`\`

---

## ⚙️ Setup Instructions

1. **Clone the repository:**

\`\`\`bash
git clone https://github.com/Fahadkhan2002/task_manager.git
\`\`\`

2. **Create MySQL database and table:**

\`\`\`sql
CREATE DATABASE task_manager_db;

USE task_manager_db;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    status VARCHAR(50)
);
\`\`\`

3. **Update \`db.php\` with your database credentials:**

\`\`\`php
$host = 'localhost';
$dbname = 'task_manager_db';
$username = 'your_mysql_username';
$password = 'your_mysql_password';
\`\`\`

4. **Run the application:**

- Place the project folder in your server root (**htdocs** for XAMPP).
- Visit **http://localhost/task_manager/index.php** in your browser.

---

## 🎥 Video Demo
 
[🔗 **Watch here**]
For Code Structure
(https://www.loom.com/share/7f0eac8e19ce433192e660e946e34d5c?sid=63474e0c-1a04-48bb-a210-e4753cdcdc41)

For Working Frontend
(https://www.loom.com/share/e83a5b3339f947d29f88648dcbf261bb?sid=7d8cc894-0a76-47bf-b08d-e1158f06fa1f) 

✅ Demonstrates adding, editing, deleting, and updating task status with color indicators.

---



## 💡 Improvements (Future Scope)

- Implement **drag-and-drop task sorting**
- Add **user authentication and roles**
- Upgrade to **Laravel MVC structure** for scalability
- Add **due dates and task categories**
- Implement **AJAX updates** for smoother UX

---

## 👤 Author

- **Name:** *Fahad Khan*
- **Email:** *fahadkhanpersonal1@example.com*
- **GitHub:** [@Fahadkhan2002](https://github.com/Fahadkhan2002)

---


