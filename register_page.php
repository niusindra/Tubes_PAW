
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bulma-0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login Page</title>
    </head>
  <body>
  <div class="backgroundAll"></div>
  <nav class="navbar is-dark is-fixed-top" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="#">
                <figure >
                    <img src="./css/barbar-icon.png">
                </figure>
            </a>
        </div>
        <div id="navbarBasicExample" class="navbar-menu">
            
            <div class="navbar-end">
                <div class="navbar-item">
                    <a class="button is-light" href="./index.php">
                        Home
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="columns" style="margin-top: 80px;">
            <div class="colimn is-one-quarter" style="margin:auto;">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Sign Up Page
                    </p>
                </header>
                <form action="./proses/prosesRegister.php" method="POST">
                <div class="card-content">
                    <div class="field">
                        <p class="control">
                            <label class="label">Name</label>
                            <input class="input" name="name"  type="text" placeholder="Name">
                        </p>
                        </div>
                        <div class="field">
                         <p class="control">
                             <label class="label">Email</label>
                             <input name="email" class="input" type="email" placeholder="Email">
                        </p>
                        </div>
                        <div class="field">
                            <p class="control">
                                <label class="label">Password</label>
                                <input name="password" class="input" type="password" placeholder="Password">
                            </p>
                            </div>      
                        </div>
                        <footer class="card-footer">
                            <input name="store" type="submit" value="Sign Up" style="padding: 0px !important" class="card-footer-item button is-dark">
                        </footer>
                    </div>
                    <small>Already have account? <a href="./login_page.php">Login</a></small>
                    </div>
                </div>
                </form>
</body>
</html>
