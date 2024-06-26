<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'db';

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Form submission logic
if (isset($_POST['submit'])) {
    // Form data validation
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Additional validation (customize this based on your requirements)
    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        die("All fields are required.");
    } elseif ($password != $confirm_password) {
        die("Password and confirm password do not match.");
    }

    // Password hashing
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Database insertion
    $sqlInsert = "INSERT INTO signup (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
    
    // Execute the query for insertion
    $resultInsert = mysqli_query($conn, $sqlInsert);

    // Check for query execution success
    if (!$resultInsert) {
        die("Error registering user: " . mysqli_error($conn));
    } else {
        echo "User registered successfully";

        // Retrieve data with a hardcoded query
        $sqlSelect = "SELECT * FROM signup";
        $resultSelect = mysqli_query($conn, $sqlSelect);

        // Check for query execution success
        if ($resultSelect) {
            // Fetch and display the data
            while ($row = mysqli_fetch_assoc($resultSelect)) {
                echo "<br>Name: " . $row['name'] . " - Email: " . $row['email'] . " - Password: " . $row['password'];
            }
        } else {
            echo "Error retrieving data: " . mysqli_error($conn);
        }
    }

    // Close the database connection (if not using a persistent connection)
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h3>Sign Up Form</h3>
                </div>
                <div class="card-body">
                    <!-- Update the form action to point to signup.php -->
                    <form method="post" action="signup.php" id="signupForm">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                                <label class="form-check-label" for="terms">I agree to the terms and conditions</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    document.getElementById('signupForm').addEventListener('submit', function (event) {
        alert('Registration done!');
    });
</script>
</body>
</html>
