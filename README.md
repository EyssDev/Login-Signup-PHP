# Registration and Login Website

This project contains a simple website that allows users to register and log in securely. Passwords are hashed before being stored in the database, and a password confirmation is required during registration. Error messages are displayed in case of issues with registration or login information. The site uses a dark theme that is fully customizable via the CSS file.
![image](https://github.com/user-attachments/assets/3d35f9a6-16a3-42c4-b639-4d86208302ea)
![image](https://github.com/user-attachments/assets/c7c2ea12-80d3-489b-8ed2-550e6c5fc125)

## Features

- **Registration**:
  - Registration form with password validation and confirmation.
  - Password hashing to ensure security.
  - Error messages if a field is missing or if passwords do not match.

- **Login**:
  - Login form with hashed password verification.
  - Error messages if the credentials are incorrect.

- **Dark theme**:
  - A default dark theme that is easily customizable via the CSS file.

## Technologies Used

- **Frontend**:
  - HTML5
  - CSS3

- **Backend**:
  - PHP (with PDO for database interaction)
  - bcrypt for password hashing

## Localhost installation

### Prerequisites 

Before you start, make sure you have a local PHP server (e.g., XAMPP or WAMP) and a MySQL/MariaDB database.

1. Clone this repository to your machine:

2. Place the files in your local server's directory (e.g., the `htdocs` folder if you're using XAMPP).

3. Create a MySQL database and import the `database.sql` file (included in this project) to create the `users` table with the necessary columns.

4. Make sure your PHP server is running, then access your project via a web browser (e.g., [http://localhost/login](http://localhost/login)).

### Database Configuration

If you need to modify the database connection, you can do so in the `db_conn.php` file. This file contains the database connection information (server, user, password, etc.). Ensure that the settings are correct for your environment.

## Features Details

### Registration

During registration, user must provide name and username, password, and password confirmation. If a field is empty, if the passwords do not match, or if the minimum security criteria are not met, an error will be displayed. The password is then hashed with the `bcrypt` function before being stored in the database.

### Login

During login, the user must enter their email and password. The password is compared to the hashed value stored in the database using the `password_verify()` function. If the credentials are incorrect, an error message is displayed.

### Password Hashing

Passwords are hashed using PHP's `password_hash()` function with the bcrypt algorithm. The hashed password is then stored in the database. During login, the `password_verify()` function is used to compare the submitted password with the hash.

### Error Handling

Error messages are displayed in the following cases:
- Missing fields during registration or login.
- Passwords not confirmed or not matching.
- Incorrect login credentials.
- Checking if username already exists

### Dark Theme

The `styles.css` file allows you to customize the site's appearance. The dark theme is applied by default, but it is fully customizable by adjusting the CSS. You can easily change the colors, fonts, and other style elements.

## Contributing

If you'd like to contribute to this project, follow these steps:

1. Fork the repository.
2. Create a branch for your changes:
3. Commit your changes:
4. Push your changes:
5. Create a Pull Request to submit your changes.

## Authors

- **EyssDev** - _Lead Developer_ - [EyssDev on GitHub](https://github.com/EyssDev)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.



