# PHP Repository: Eric Nabofa's PHP Projects

This repository contains various PHP projects that explore and demonstrate fundamental concepts of PHP programming, including database connections, secure user authentication, session management, and CRUD operations.

---

## Project Overview

### **1. PDO and Database Connection**
A comprehensive exploration of database interaction using PHP Data Objects (PDO). The project showcases the implementation of user signup, updating, deleting, and secure password hashing.

#### **Files**

- **`index.php`**
  - The entry point for the application.
  - Contains forms for user signup, update, deletion, and search functionality.

- **`search.php`**
  - Implements a feature to search for users by username.
  - Utilizes prepared statements to fetch results securely from the database.

- **`includes/dbh.inc.php`**
  - Manages the database connection using PDO.
  - Implements error handling to catch and report connection issues.

- **`includes/formhandler.inc.php`**
  - Handles user signup.
  - Hashes user passwords securely using bcrypt before storing them in the database.

- **`includes/hashpwd.inc.php`**
  - Demonstrates password hashing and verification using bcrypt.

- **`includes/userdelete.inc.php`**
  - Deletes user accounts securely by verifying credentials.

- **`includes/userupdate.inc.php`**
  - Updates user information securely using prepared statements.

#### **Features**

- Secure database connection with PDO.
- Password hashing using bcrypt.
- User authentication and CRUD operations.
- Secure input handling with prepared statements.

---

### **2. Sessions**
A project that demonstrates secure session management techniques in PHP. This includes session regeneration to prevent fixation attacks and secure cookie parameters.

#### **Files**

- **`config.php`**
  - Configures secure session settings, including cookie attributes and session regeneration policies.

- **`index.php`**
  - Entry point that loads the session configuration.

#### **Features**

- Secure session cookies with attributes like `httponly` and `secure`.
- Session regeneration to enhance security.
- Demonstrates best practices for session management in PHP.

---

## Directory Structure

```plaintext
├── php/
│   ├── README.md
│   ├── PDO AND DATABASE CONNECTION/
│   │   ├── index.php
│   │   ├── search.php
│   │   └── includes/
│   │       ├── dbh.inc.php
│   │       ├── formhandler.inc.php
│   │       ├── hashpwd.inc.php
│   │       ├── userdelete.inc.php
│   │       └── userupdate.inc.php
│   └── Sessions/
│       ├── config.php
│       └── index.php
```

---

## Setup Instructions

To run the projects in this repository:

1. Clone this repository:
   ```bash
   git clone https://github.com/ericnabofa/php.git
   cd php
   ```

2. Set up a local MySQL database:
   - Create a database named `myfirstdatabase`.
   - Add tables `users` and `comments` with appropriate columns.

3. Configure database credentials in `includes/dbh.inc.php`:
   ```php
   $dsn = "mysql:host=localhost;dbname=myfirstdatabase";
   $dbusername = "your_db_username";
   $dbpassword = "your_db_password";
   ```

4. Start a PHP development server:
   ```bash
   php -S localhost:8000
   ```

5. Visit the application in your browser at `http://localhost:8000`.

---

## Features and Best Practices

### **Security**
- **Input Sanitization**: All user inputs are handled securely with prepared statements to prevent SQL injection.
- **Password Hashing**: Uses bcrypt for storing passwords securely.
- **Session Security**: Configures session cookies for maximum security.

### **Code Modularity**
- Separation of concerns through distinct files for database connection, form handling, and session management.

### **Error Handling**
- PDO exception handling ensures any database errors are caught and displayed gracefully.

---


## **📞 Contact**  

**Oghenevwegba Eric Nabofa**  
- **LinkedIn:** [linkedin.com/in/oghenevwegbaenabofa](https://www.linkedin.com/in/oghenevwegbaenabofa/)  

---


