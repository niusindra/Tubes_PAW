<?php include '../layout/dashboarduser.php';
$id=$_GET['id']; 
        $query = mysqli_query($con, "SELECT * FROM users where id='$id'") or die(mysqli_error($con)); 
        $data = mysqli_fetch_assoc($query)?>

        <div class="columns" style="margin-top: 80px;">
            <div class="column is-one-quarter" style="margin:auto;">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Your Profile
                    </p>
                </header>
                <form action="./proses/prosesRegister.php" method="POST">
                <div class="card-content">
                    <div class="field">
                        <p class="control">
                            <label class="label">Name</label>
                            <input class="input" name="name"  type="text" placeholder="Name" value="<?php echo $data['username'] ?>">
                        </p>
                        </div>
                        <div class="field">
                         <p class="control">
                             <label class="label">Email</label>
                             <input name="email" class="input" type="email" placeholder="Email" value=<?php echo $data['email'] ?>>
                        </p>
                        </div>     
                        </div>
                        <footer class="card-footer">
                            <input name="store" type="submit" value="Edit Profile" style="padding: 0px !important" class="card-footer-item button is-dark">
                        </footer>
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
