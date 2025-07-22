
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


