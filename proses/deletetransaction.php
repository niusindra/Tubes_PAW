<?php
    if(isset($_GET['id'])){
        include('../db.php');

        $id = $_GET['id'];
        $query = mysqli_query($con,"SELECT id_user FROM transaction WHERE id='$id'");
        $data = mysqli_fetch_assoc($query);
        $delete = mysqli_query($con,"DELETE FROM transaction WHERE id='$id'")
        
        or die(mysqli_error($con));
            if($delete){
                echo '<script>alert("success"); window.location = "../dashboard/transaction.php?id='.$data['id_user'].'"</script>';
            }else{
                echo '<script>alert("failed"); window.location = "../dashboard/transaction.php?id='.$data['id_user'].'"</script>';
            }
            }else{
                echo '<script>window.history.back()</script>';
            }
        
?>