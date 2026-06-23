# User Management System

A PHP-based user management application with user authentication, registration, and role-based access control (Admin/User).

## Features

- **User Registration**: Create new user accounts with email validation
- **User Sign In**: Secure login with session management
- **User Dashboard**: Personalized user profile page
- **Admin Panel**: Administrative features for system management
- **Role-Based Access**: Support for different user types (Admin/User)
- **Responsive Design**: Bootstrap 5 for mobile-friendly interface

## Requirements

- PHP 7.0 or higher
- MySQL 5.6 or higher
- Web Server (Apache/Nginx)
- Web Browser

## Installation & Setup

### 1. Clone the Repository

```bash
git clone <your-repository-url>
cd UserManagement
```

### 2. Create Database

Create a MySQL database named `usermanagement`:

```sql
CREATE DATABASE usermanagement;
```

### 3. Create Users Table

```sql
USE usermanagement;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    user_type VARCHAR(50) DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### 4. Configure Database Connection

Edit `code/connection.php` and update the database credentials:

```php
$conn = mysqli_connect("localhost", "root", "your_password", "usermanagement");
```

- `localhost`: Your database host
- `root`: Your MySQL username
- `your_password`: Your MySQL password
- `usermanagement`: Database name

### 5. Start Your Web Server

Place the project in your web server's root directory (e.g., `htdocs` for XAMPP) and access it:

```
http://localhost/UserManagement/code/home.php
```

Or if using PHP's built-in server:

```bash
cd code
php -S localhost:8000
```

## Project Structure

```
UserManagement/
├── README.md
├── code/
│   ├── admin.php          # Admin panel
│   ├── connection.php     # Database configuration
│   ├── home.php          # Home page
│   ├── register.php      # User registration
│   ├── signin.php        # User login
│   ├── user.php          # User dashboard
│   ├── logout.php        # Logout functionality
│   ├── style.css         # Custom styles
│   └── img/              # Images folder
└── [other files]
```

## Usage

1. **Access Home Page**: Navigate to the home page and click "Create an account" or "Sign in"
2. **Register**: Fill in your details (name, email, password, user type) and click submit
3. **Sign In**: Use your registered email and password to log in
4. **Dashboard**: Access your user profile after successful login
5. **Admin Panel**: Admins can access additional management features
6. **Logout**: Click logout to end your session


## Demo
https://github.com/user-attachments/assets/a8866d90-9d23-4aca-bd34-3ac1cd004dee

