<?php
echo '
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bulma-0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Home</title>
</head>
  <body>
  <div class="backgroundAll"></div>
  <nav class="navbar is-dark is-fixed-top" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
          <a class="navbar-item" href="#">
                <figure >
                    <img src="../css/barbar-Icon.png">
                </figure>
            </a>

            <a role="button" class="navbar-burger burger" aria-laberl="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            
            <div class="navbar-end">
                <a class="navbar-item" href="../index.php">
                    Home
                </a>

                <a class="navbar-item" href="./contactus.php">
                    Contact Us
                </a>

                <a class="navbar-item" href="./booking.php">
                    Booking
                </a>


                <div class="navbar-item">
                    <div class="buttons">
                        
                        <a class="button is-dark" href="../register_page.php">
                        Sign Up
                        </a>
                        <a class="button is-light" href="../login_page.php">
                        Log in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>'
?>    
