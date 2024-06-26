<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
          
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color:#008134;
            color: #fff;
            padding: 10px 20px;
            border-radius: 10px 10px 0 0;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        button[type="submit"] {
            width: 100%;
           
        }
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');

        .phname {
          display: flex;
          align-items: center;
          text-decoration: none;
          font-family: 'Roboto', sans-serif;
          color: #ffffff; 
        }
        .navbar-bg {
           background-color: #48894e;
        }
        .Logo {
         margin-right: 10px;
         vertical-align: middle;
        }


       .navbar-nav .dropdown:hover .dropdown-menu {
         display: block;
        }
        .navbar-nav{
         font-family: 'Roboto', sans-serif;
         margin: top 20%;
        }
        .navbar-nav .nav-link {
          margin-right: 40px; 
          color: #fff;
        }
    </style>
</head>
<body>
<?php

include('server.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['name']) && isset($_POST['password'])) {
        $user = $_POST["name"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM `users` WHERE `username` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            // Get the country, gender, and email from the database row
            $userCountry = $row['country'];
            $userGender = $row['gender'];
            $userEmail = $row['email'];

            if (password_verify($password, $row['pass'])) {
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $validUsername;
                $_SESSION['country'] = $userCountry; // Replace $userCountry with the actual country value
                $_SESSION['gender'] = $userGender; // Replace $userGender with the actual gender value
                $_SESSION['email'] = $userEmail; // Replace $userEmail with the actual email value

                // Redirect the user to the user-profile.php page
                header("Location: http://localhost/web_Project_phase1/SigninandSignup/user-profile.php/");
                exit; // Always exit after a header redirect to ensure no further code execution
            } else {
                echo "Wrong Password";
            }
        } else {
            echo "User doesn't exist";
        }
    }
}

// Close connection
$conn->close();
?>


<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h3>Sign In</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="" id="signinForm">
                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <div class="form-group">
                            <input type="submit"class="btn btn-success" value="Sign In">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
          <footer class="footer">
        
            <p class="text-center">© 2023  PharmaCare All Rights Reserved.</p>
        </footer>
</body>
</html>
