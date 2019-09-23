<?php
if(isset($_POST['login'])){
    include('../db.php');

    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($con,"SELECT * FROM users WHERE email = '$email' Limit 1" ) or die (mysqli_error($con));
    if(mysqli_num_rows($query) == 0){
        echo '<script>alert("Email not found"); window.location = "../login_page.php"</script>';
    }else{
        $user = mysqli_fetch_assoc($query);
        if(password_verify($password,$user['password'])){
            session_start();
            $_SESSION['isLogin'] = true;
            $_SESSION['user'] = $user;
            echo '<script>window.location = "../dashboard/indexuser.php?id='.$user['id'].'"</script>';
        }else{
            echo '<script>alert("Email or Password Invalid"); window.location = "../login_page.php"</script>';
        }
    }
}else{
    echo '<script>window.history.back()</script>';  
}
?>