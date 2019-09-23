<?php include '../layout/dashboard.php';?>
    <div class="columns" style="margin-top: 80px;">
        <div class="column is-one-quarter" style="margin:auto;">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    Booking Form
                </p>
            </header>
            <form action="./proses/prosesLogin.php" method="post">
            <div class="card-content">
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
                    <input name="login" type="submit" value="Log In" style="padding: 0px !important" class="card-footer-item is-link button">
                </footer>
                </div>
                <small style="color:white">New to My Site? <a href="./register_page.php">Sign Up Now</a></small>
                </div>
            </div>
        </form>
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
 background-color: #6bd6a6;

}
</style>


