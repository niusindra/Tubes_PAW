<?php
if(isset($_POST['edit'])){
    include('../db.php');

    $name = $_POST['name'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $id=$_GET['id'];

    $input = mysqli_query($con,"UPDATE users SET username='$name', password='$password' WHERE id='$id'")or die(mysqli_error($con));
    if($input){
        echo '<script>alert("Success"); window.location = "../dashboard/indexuser.php?id='.$id.'"</script>';
    }else{
        echo '<script>alert("Failed"); window.location = "../dashboard/editprofile.php?id='.$id.'"</script>';
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>