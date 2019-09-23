<?php
$id=$_GET['id']; 
    if(isset($_POST['booking'])){
        include('../db.php');

        $style = $_POST['style'];
        $layanan = $_POST['layanan'];
        $layanantambahan = $_POST['layanantambahan'];
        $tanggal = $_POST['tanggal'];
        $bulan = $_POST['bulan']+1;
        $tahun = $_POST['tahun'];
        $date = $tahun."-".$bulan."-".$tanggal;
        
        $input = mysqli_query($con,"INSERT INTO transaction(id_user,style,layanan,layanan_tambah,tanggal)
        VALUES('$id','$style','$layanan','$layanantambahan','$date')")
        or die(mysqli_error($con));
            if($input){
                echo '<script>alert("Success"); window.location = "../dashboard/transaction.php?id='.$id.'"</script>';
            }else{
                echo '<script>window.history.back()</script>';
            }
        }
?>