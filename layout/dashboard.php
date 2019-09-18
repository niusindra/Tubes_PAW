<?php
// session_start();
// if(!$_SESSION['isLogin']){
//     header("location: ../login_page.php");
// }else{
//     include('../db.php');
// }
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
  <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
          <a class="navbar-item" href="#">
              <img src="./css/barbar-icon.png" width="112"
              height="28">
            </a>

            <a role="button" class="navbar-burger burger" aria-laberl="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-light" href="./index.php">
                        Home
                        </a>
                        <a class="button is-light" href="./login_page.php">
                        Contact Us
                        </a>
                        <a class="button is-light" href="./login_page.php">
                        Booking
                        </a>
                        <a class="button is-light" href="./register_page.php">
                        Sign Up
                        </a>
                        <a class="button is-primary" href="./login_page.php">
                        Log in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>'
?>    
