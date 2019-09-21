<?php
session_start();
if(!$_SESSION['isLogin']){
    header("location: ../login_page.php");
}else{
    include('../db.php');
    $id=$_GET['id'];
}
echo '
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bulma-0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="../bulma-calendar/dist/css/bulma-calendar.min.css" rel="stylesheet">
    <title>BarBarbershop</title>
</head>
<script src="../bulma-calendar/dist/js/bulma-calendar.min.js"></script>
// <script src="../script/script.js"></script>
  <body>
  <div class="backgroundAll"></div>
  <nav class="navbar is-dark is-fixed-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="#">
                <figure >
                    <img src="../css/barbar-icon.png">
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



                <a class="navbar-item" href="../dashboard/indexuser.php?id='.$id.'">
                    Home
                </a>

                <a class="navbar-item" href="../dashboard/contactususer.php?id='.$id.'">
                    Contact Us
                </a>

                <a class="navbar-item" href="../dashboard/bookinguser.php?id='.$id.'">
                    Booking
                </a>

                <div class="navbar-item has-dropdown is-hoverable ">
                    <a class="navbar-item">
                        <figure>
                            <img src="../css/usericon.png" style="margin:5px 0px -5px 0px">
                        </figure>
                    </a>
                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item" href="../dashboard/profile.php?id='.$id.'">
                            Profile
                        </a>
                        <a class="navbar-item">
                            Transaction History
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="../proses/prosesLogout.php">
                            Log Out
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
        
    </nav>'
?>    
