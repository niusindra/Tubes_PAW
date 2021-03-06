<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bulma-0.7.5/css/bulma.min.css">
    
    <title>BarBarbershop</title>
</head>
  <body>
  <div class="backgroundAll"></div>
  <nav class="navbar is-dark is-fixed-top" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
          <a class="navbar-item" href="#">
                <figure >
                    <img src="./css/barbar-Icon.png">
                </figure>
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            
            <div class="navbar-end">
                <a class="navbar-item">
                    Home
                </a>

                <a class="navbar-item" href="./dashboard/contactus.php">
                    Contact Us
                </a>

                <a class="navbar-item" href="./dashboard/booking.php">
                    Booking
                </a>

                <div class="navbar-item">
                    <a class="button is-light" href="./login_page.php">
                        Log in
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div>
    
    </div>
    <div class="homeStyle">
        <h1>Welcome to Home Page</h1>
    </div>
    </body>
    </html>
    <style lang="css">

.homeStyle{
position: fixed;
top: 0;
bottom: 0;
left: 0;
right: 0;
display: flex;
align-items: center;
font-size: 50px;
font-weight: bold;
color: white;

}

.homeStyle h1{
 margin: 0px auto;
 padding: 10px;
 border-radius: 20px;
 background:rgba(0, 0, 0, 0.6);
}
</style>

