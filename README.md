# SignIn-SignUp System

Welcome to the **SignIn-SignUp** project! This project is a comprehensive authentication system that allows users to register and securely log in to a web application. It is built with modern web development technologies, emphasizing functionality, security, and user experience.

---

## 🌟 Features

- 🖋 **User Registration:** Validate input fields for secure and error-free user registration.
- 🔒 **Secure Login:** Manage user sessions effectively and prevent unauthorized access.
- 🔑 **Password Encryption:** Enhance security using hashed passwords.
- 🎨 **User-Friendly Interface:** Responsive and attractive design for seamless usability.

---

## 🛠️ Technologies Used

| Technology    | Description                              |
|---------------|------------------------------------------|
| ![HTML](https://cdn.worldvectorlogo.com/logos/html-1.svg) **HTML** | Structuring web pages                         |
| ![CSS](https://cdn.worldvectorlogo.com/logos/css-3.svg) **CSS**   | Styling and layout                           |
| ![JavaScript](https://cdn.worldvectorlogo.com/logos/javascript.svg) **JavaScript** | Client-side interactivity                    |
| ![PHP](https://cdn.worldvectorlogo.com/logos/php.svg) **PHP**     | Server-side scripting                        |
| ![MySQL](https://cdn.worldvectorlogo.com/logos/mysql-6.svg) **MySQL** | Database management                          |

---

## 🚀 Setup and Installation

Follow these steps to get started with the **SignIn-SignUp** system:

### 1. Clone the Repository
```bash
git clone https://github.com/dilrukshax/SignIn-SignUp.git
```

### 2. Navigate to the Project Directory
```bash
cd SignIn-SignUp
```

### 3. Import the Database
- Locate the `users.sql` file in the `SRC/database` folder.
- Import it into your MySQL database using a tool like **phpMyAdmin** or the **MySQL command line**.

### 4. Configure Database Connection
- Open the `db_config.php` file in the `SRC` directory.
- Update the file with your database credentials:
```php
<?php
$host = "your_host";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```

### 5. Deploy the Application
- Place the project files on your **Apache** or **Nginx** web server.
- Ensure PHP is installed and configured properly.
- Access the application via your browser.

---

## 📸 Screenshots

### Sign-Up Page
![Sign-Up Page](https://via.placeholder.com/800x450?text=Sign-Up+Page)

### Sign-In Page
![Sign-In Page](https://via.placeholder.com/800x450?text=Sign-In+Page)

---

## 🎯 Usage

1. Open the application in your browser.
2. Register a new account by filling out the sign-up form.
3. Log in with your credentials.
4. The system will securely manage your session and provide access to authenticated pages.

---

## 🤝 Contribution

We welcome contributions to enhance this project! Here's how you can contribute:
1. Fork the repository.
2. Create a new branch for your feature/bug fix.
3. Submit a pull request with detailed information.

---

## 📄 License

This project is licensed under the **MIT License**. Check the `LICENSE` file for more information.

---

## 🙏 Acknowledgments

A big thank you to:
- **Open-source communities** for the inspiration.
- Contributors and collaborators for their efforts and ideas.

---

Happy coding! 🚀
