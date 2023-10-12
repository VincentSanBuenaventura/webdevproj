<?php
// Include the database configuration file
include 'config/dbcon.php'; 

// Check if the "login" POST parameter is set
if (isset($_POST['login'])) {
    // Retrieve user input from the form
    $email = $_POST['email'];
    $password = $_POST['pass']; 
    
    // Construct a SQL query to select a user based on email and password
    $sql = "SELECT * FROM users WHERE email = '$email' AND pass = '$password'";
    
    // Execute the SQL query
    $select = mysqli_query($conn, $sql);

    // Check if the query execution was successful
    if ($select) {
        // Check if any rows were returned
        if (mysqli_num_rows($select) != 0) {
            // User found, fetch user data and store user ID in a session
            $user = mysqli_fetch_array($select);
            $_SESSION['user_id'] = $user['id'];
            
            // Redirect the user to the admin dashboard
            header("Location: admin/dashboard.php");
        } else {
            // Display a message for login failure
            echo "Failed to login";
        }
    } else {
        // Display a database query error message
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
        /* Add your CSS styles here */
    </style>
</head>
<body>
<div class="login-container">
    <h1>LOGIN</h1>
    <form action="index.php" method="POST">
        <!-- Input field for email -->
        <input type="email" name="email" placeholder="Email" required autofocus>
        
        <!-- Input field for password -->
        <input type="password" name="pass" placeholder="Password" required>
        
        <!-- Submit button to trigger login -->
        <button type="submit" name="login">Login</button>
        
        <!-- Link to the registration page -->
        <a href='register.php' class="register-button"><center>Register</center></a>
    </form>
</div>
</body>
</html>
