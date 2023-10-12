<?php

include 'config/dbcon.php'; // Include your database connection script


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['pass']; // Ensure that your HTML input field for the password is named 'pass'
 
    // Ensure that $conn is properly defined in your 'config/dbcon.php' script
    $sql = "SELECT * FROM users WHERE email = '$email' AND pass = '$password'";
    $select = mysqli_query($conn, $sql);

    if ($select) {
        if (mysqli_num_rows($select) != 0) {
            $user = mysqli_fetch_array($select);
            $_SESSION['user_id'] = $user['id'];
            header("Location: admin/dashboard.php");
        } else {
            echo "Failed to login";
        }
    } else {
        echo "Database query error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #f0f0f0;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-container h1 {
            text-align: center;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login-container input {
            margin: 5px 0;
            padding: 10px;
            width: 100%;
        }

        .login-container button {
            margin: 10px 0;
            padding: 10px;
            width: 100%;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-container button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="login-container">
    <h1>LOGIN</h1>
    <form action="index.php" method="POST">
        <input type="email" name="email" placeholder="Email" required autofocus>
        <input type="password" name="pass" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
        <a href='register.php' class="register-button"><center>Register</center></a>
    </form>
</div>
</body>
</html>
