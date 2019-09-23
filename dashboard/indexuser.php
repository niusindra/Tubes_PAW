<?php include '../layout/dashboarduser.php';
$id=$_GET['id'];
        $query = mysqli_query($con, "SELECT * FROM users where id='$id'") or die(mysqli_error($con)); 
        $data = mysqli_fetch_assoc($query)?>

    <div class="homeStyle">
        <h1>Welcome, <?php echo $data['username'] ?></h1>
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
