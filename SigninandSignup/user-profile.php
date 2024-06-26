<?php
// Include the file that connects to the database
include('server.php');

// Check if the user is logged in
//session_start();
$loggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;

// Check if the user clicked the sign-out link
if (isset($_GET['logout'])) {
    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page after logout
    header("Location: http://localhost/web_Project_phase1/SigninandSignup/signin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>User Profile</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #48894e;
            color: #ffffff;
            padding: 10px 0;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #ffffff;
        }

        .navbar-brand img {
            margin-right: 10px;
            width: 60px;
            height: 60px;
        }

        .navbar-nav {
            display: flex;
            align-items: center;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-item {
            margin-right: 20px;
        }

        .nav-link {
            text-decoration: none;
            color: #ffffff;
            font-weight: bold;
            text-transform: uppercase;
        }

        .user-account {
        display: flex;
        align-items: center;
        }

        .user-account a {
         margin-right: 5px; /* Adjust spacing between the link and the icon */
         color: #ffffff; /* Set the color of the link */
         text-decoration: none; /* Remove underline from the link */
         font-family: 'Roboto', sans-serif;
        }
  
        .user-account a:hover {
        color: #a1a4a7; /* Change color on hover */
        }
  
      .user-account .bx-user {
       font-size: 50px; /* Adjust icon size */
        color: #ffffff; /* Set the color of the icon */
        cursor: pointer;
       }
       body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
    }
    
    .navbar {
        background-color: #48894e;
        color: #ffffff;
        padding: 10px 0;
    }
    
    /* New styles or modifications */
    .profile-info {
        margin-top: 20px;
        padding: 20px;
        background-color: #f4f4f4;
        border-radius: 5px;
    }
    
    .profile-info h1 {
        color: #333333;
        font-size: 24px;
        margin-bottom: 20px;
    }
    
    .profile-info p {
        color: #666666;
    }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            </a>
            <ul class="navbar-nav">
            
            </ul>
            <div class="user-account">
                <?php if ($loggedIn) : ?>
                    <a class="nav-link" href="signin.php?logout">Logout</a>
                    <i class="bx bx-user bx-flip-horizontal"></i>
                <?php else : ?>
                    <a href="http://localhost/web_Project_phase1/SigninandSignup/signin.php">Sign In</a>
                    <a href="http://localhost/web_Project_phase1/SigninandSignup/index.php">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

<h1>Welcome to your user profile page</h1>
<div class="profile-info">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- User profile card -->
                <div class="card">
                    <div class="card-body text-center">
                        <!-- User avatar -->
                        <p>Status: <?php echo $loggedIn ? 'Logged In' : 'Not Logged In'; ?></p>
                        <p>Email: <?php echo $_SESSION['email']; ?></p>
                        <p>Country: <?php echo $_SESSION['country']; ?></p>
                            <p>Gender: <?php echo $_SESSION['gender']; ?></p>
                        <!-- End of new user details -->
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Bootstrap JavaScript and dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
