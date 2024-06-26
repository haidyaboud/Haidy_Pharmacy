<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
    <title>PharmaCare</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-bg">
        <div class="container-fluid ">
            <a class="navbar-brand phname" href="#">
                <img src="Logo1.png" alt="Pharmacy Logo" width="60" height="60" class="d-inline-block align-top Logo">
                PharmaCare
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                
            </div>
            <?php
            ?>
            <div class="user-account">
                <a href="#" id="account-link">Account</a>
                <i class="bx bx-user bx-flip-horizontal"></i>
                <div class="account-links">
                    <a href="openfile.php?file=file:///C:/xampp/htdocs/Web_Project_phase1/SigninandSignup/signin.php">Sign In</a>
                  <a href="#">Register</a>
                </div>
            </div>
              
                          
            <div class="user-account">
                <i class='bx bx-heart' id="cart-icon" ></i>
                <a href="#">Wishlist</a>
            </div>     
            <div class="cart">

                <h2 class="cart-title">Your Wishlist</h2>
                <i class='bx bx-heart' id="cart-icon2" ></i>
                <div class="cart-content">
                    <div class="cart-box">
                        <img src="imgp.png" alt="" class="cart-img">
                        <div class="detailed-box">
                            <div class="cart-product-title">Sunscreen</div>
                            <div class="cart-price">20$</div>
                        </div>
                    </div>
                </div>
                <div class="total">
                    <div class="total-title"> Total</div>
                    <div class="total-price">20$.</div>
                </div>
                <button type="button" class="btn-buy">Buy Now</button>
                <i class='bx bxs-shield-x' id="cart-close" ></i>
            </div>
        </div>
    </nav>
   
      <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>About Us</h4>
                    <p>Lorem ipsum dolor sit amet, con setetur sa dip scing elitr, sed di am no numy eirmod tem por in vidunt ut la bore rem ipsum dolor sit amet, con se tetur</p>
                </div>
                <div class="col-md-4">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="home.html">Home</a></li>
                        <li><a href="#shop">Services</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Contact Information</h4>
                    <p>123 Main Street, City, Country</p>
                    <p>Email: info@PharmaCare.com</p>
                    <p>Phone: +123-456-7890</p>
                </div>
            </div>
            <hr>
            <p class="text-center">© 2023  PharmaCare All Rights Reserved.</p>
        </div>
    </footer>
    
      <script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
      <script src="script/script.js"></script>
</body>
</html>
