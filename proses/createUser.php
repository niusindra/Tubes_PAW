<?php
    if(isset($_POST['store1'])){
        include('../db.php');

        $name = $_POST['name'];
        $email = $_POST['email'];
        $tanggal= $_POST['tanggal'];
        $bulan= $_POST['bulan']+1;
        $tahun= $_POST['tahun'];
        $tanggalLahir = $tahun."-".$bulan."-".$tanggal;
        $nomorHandphone = $_POST['number'];
        $jenisKelamin = $_POST['jenis_kelamin'];

        $input = mysqli_query($con,"INSERT INTO customer(name, email, tanggalLahir, nomorHandphone, jenisKelamin)
        VALUES('$name','$email', '$tanggalLahir','$nomorHandphone','$jenisKelamin')")or die(mysqli_error($con));
            if($input){
                echo '<script>alert("success"); window.location = "../dashboard/listPeserta.php"</script>';
            }else{
                echo '<script>window.history.back()</script>';
            }
        }
?>


<?php
    if(isset($_POST['store2'])){
        include('../db.php');

        $name = $_POST['nama'];
        $jenisKelamin = $_POST['jenisKelamin'];
        $email = $_POST['email'];
        $nomorHandphone = $_POST['telp'];
        $pendidikan = $_POST['pendidikan'];
        $ipk = $_POST['ipk'];
        $cumlaude = $_POST['cumlaude'];
        $alamat = $_POST['alamat'];
        $kota = $_POST['kota'];
       
        
        
        $input = mysqli_query($con,"INSERT INTO buku(name,jenisKelamin,email,nomorHandphone,pendidikan,ipk,cumlaude,alamat,kota)
        VALUES('$name','$jenisKelamin','$email','$nomorHandphone','$pendidikan','$ipk','$cumlaude','$alamat','$kota')")
        or die(mysqli_error($con));
            if($input){
                echo '<script>alert("success"); window.location = "../dashboard/listBuku.php"</script>';
            }else{
                echo '<script>window.history.back()</script>';
            }
        }
?>